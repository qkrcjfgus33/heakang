<?php
    /**
     * @class  achievementView
     * @author XE스쿨 achievement 모듈 만들기 예제
     * @brief achievement 모듈의 view class
     **/

    class achievementView extends achievement {

        /**
         * @brief 초기화
         **/
        function init() {

            // module_srl이 있으면 미리 체크하여 존재하는 모듈이면 module_info 세팅
            $module_srl = Context::get('module_srl');
            if(!$module_srl && $this->module_srl) {
                $module_srl = $this->module_srl;
                Context::set('module_srl', $module_srl);
            }

            // module model 객체 생성 
            $oModuleModel = &getModel('module');

            // module_srl이 넘어오면 해당 모듈의 정보를 미리 구해 놓음
			// 모듈의 브라우저 타이틀, 관리자, 레이아웃 등 xe_modules table의 값과 정보
            if($module_srl) {
                $module_info = $oModuleModel->getModuleInfoByModuleSrl($module_srl);
				$this->module_info = $module_info;
				Context::set('module_info',$module_info);
            }

            // 스킨 경로를 미리 template_path 라는 변수로 설정함
            // 스킨이 존재하지 않는다면 default로 변경
            $template_path = sprintf("%sskins/%s/",$this->module_path, $this->module_info->skin);
            if(!is_dir($template_path)||!$this->module_info->skin) {
                $this->module_info->skin = 'default';
                $template_path = sprintf("%sskins/%s/",$this->module_path, $this->module_info->skin);
            }
            $this->setTemplatePath($template_path);

        }
		
        /**
         * @brief 목록
         **/
        function dispAchievementContentList() {

            /**
             * 목록보기 권한 체크 (모든 권한은 ModuleObject에서 xml 정보와 module_info의 grant 값을 비교하여 미리 설정하여 놓음)
             **/
            if(!$this->grant->access || !$this->grant->list) return $this->dispAchievementMessage('msg_not_permitted');

			// module_srl 확인
			$module_srl = Context::get('module_srl');
            $args->module_srl = $module_srl; 
            $args->page = Context::get('page');

			// module model 객체 생성 
            //$oModuleModel = &getModel('module');

			// achievement model에서 목록을 가져옴
            $oAchievementModel = &getModel('achievement');
            $output = $oAchievementModel->getAchievementContentList($args);

			// $achievement_list 변수에 담는다.
			Context::set('achievement_list', $output->data);
            Context::set('page', $output->page);
            Context::set('page_navigation', $output->page_navigation);

            // template_file을 list.html로 지정
            $this->setTemplateFile('list');
        }

        /**
         * @brief 선택된 achievement 내용보기
         **/
        function dispAchievementContentView() {

			// 보기 권한 체크
            if(!$this->grant->view) return $this->dispAchievementMessage('msg_not_permitted');

			// achievement의 식별번호를 가져옴
            $achievement_srl = Context::get('achievement_srl');
			$obj->achievement_srl = $achievement_srl;

			// achievement model에서 내용을 가져옴
			$oAchievementModel = &getModel('achievement');
			$output = $oAchievementModel->getAchievementContent($obj);
			
            // $achievement_info 변수에 Context 세팅
			Context::set('achievement_info', $output->data[0]);

            /**
             * 목록보기 권한 체크 (모든 권한은 ModuleObject에서 xml 정보와 module_info의 grant 값을 비교하여 미리 설정하여 놓음)
             **/
            if(!$this->grant->access || !$this->grant->list) return $this->dispAchievementMessage('msg_not_permitted');

            // module_srl 확인
            $module_srl = Context::get('module_srl');
            $args->module_srl = $module_srl; 
            $args->page = Context::get('page');

            // module model 객체 생성 
            //$oModuleModel = &getModel('module');

            // achievement model에서 목록을 가져옴
            $oAchievementModel = &getModel('achievement');
            $output = $oAchievementModel->getAchievementContentList($args);

            // $achievement_list 변수에 담는다.
            Context::set('achievement_list', $output->data);
            Context::set('page', $output->page);
            Context::set('page_navigation', $output->page_navigation);

            // template_file을 view.html로 지정
            $this->setTemplateFile('view');
        }

        /**
         * @brief 내용 작성/수정 화면 출력
         **/
        function dispAchievementContentWrite() {

			// 쓰기 권한 체크
            if(!$this->grant->write) return $this->dispAchievementMessage('msg_not_permitted');

			// achievement_new 확인
            $achievement_new = Context::get('achievement_new');

			// update
			if($achievement_new == 'false') {
                $achievement_srl = Context::get('achievement_srl');

				$obj->achievement_srl = $achievement_srl;

				// achievement model에서 내용을 가져옴
				$oAchievementModel = &getModel('achievement');
				$output = $oAchievementModel->getAchievementContent($obj);

			   // 변경된 $output을 $achievement_info 변수에 set
			   Context::set('achievement_info', $output->data[0]);
               Context::set('achievement_srl', $achievement_srl);

			// new
			} else {
			  Context::set('achievement_srl','',true);
			}

            // editor 모듈 사용하기
            // 에디터 모델 인스턴스 얻기
            $oEditorModel = &getModel('editor');
             
            // 옵션 정하기
            $option->allow_fileupload = true;
            $option->content_style = 'default';
            $option->content_font = null;
            $option->content_font_size = null;
            $option->enable_autosave = false;
            $option->enable_default_component = false;
            $option->enable_component = false;
            $option->disable_html = true;
            $option->height = 1;
            $option->skin = 'fileupload';
            $option->colorset ='white';
            $option->primary_key_name = 'achievement_srl';
            $option->content_key_name = 'content';
             
            // 에디터 HTML 정하기
            $editor = $oEditorModel->getEditor($achievement_srl, $option);
            Context::set('editor', $editor);

             // 내용 작성시 검증을 위해 사용되는 XmlJSFilter  
            Context::addJsFilter($this->module_path.'tpl/filter', 'content_insert.xml');

			// 콜백 함수를 처리하는 javascript 
            Context::addJsFile($this->module_path.'tpl/js/achievement.js');

            Context::addJsFile($this->module_path.'tpl/js/jquery.datetimepicker.js');

			// 내용 작성화면 템플릿 파일 지정 write.html
            if($achievement_new == 'false') {
                $this->setTemplateFile('update');
            }else{
                $this->setTemplateFile('write');
            }
		}

        /**
         * @brief 삭제 화면 출력
         **/
        function dispAchievementContentDelete() {

			// 삭제 권한
            if(!$this->grant->delete) return $this->dispAchievementMessage('msg_not_permitted');

			// GET parameter에서 achievement_srl을 받아 확인
            $achievement_srl = Context::get('achievement_srl');

			// achievement_srl이 없는 경우 오류 메시지 출력
			if(!$achievement_srl) $this->alertMessage('msg_not_founded');

             // 내용 작성시 검증을 위해 사용되는 XmlJSFilter
            Context::addJsFilter($this->module_path.'tpl/filter', 'content_delete.xml');

			// 콜백 함수를 처리하는 javascript 
            Context::addJsFile($this->module_path.'tpl/js/achievement.js');

            // 템플릿 파일 지정
            $this->setTemplateFile('delete');
        }

        /**
         * @brief 메세지 출력
         **/
        function dispAchievementMessage($msg_code) {
            $msg = Context::getLang($msg_code);
            if(!$msg) $msg = $msg_code;
            Context::set('message', $msg);
            $this->setTemplateFile('message');
        }

        /**
         * @brief 오류메세지를 system alert로 출력하는 method
         * 특별한 오류를 알려주어야 하는데 별도의 디자인까지는 필요 없을 경우 페이지를 모두 그린후에 오류를 출력하도록 함
         **/
        function alertMessage($message) {
            $script =  sprintf('<script type="text/javascript"> xAddEventListener(window,"load", function() { alert("%s"); } );</script>', Context::getLang($message));
            Context::addHtmlHeader( $script );
        }

    }
?>
