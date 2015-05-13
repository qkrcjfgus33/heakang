<?php
    /**
     * @class new_posts
     * @author vomvoru (qkrcjfgus3@gmail.com)
     * @version 0.1
     **/

    class new_posts extends WidgetHandler {

        /**
         * @brief 위젯의 실행 부분
         *
         * ./widgets/위젯/conf/info.xml 에 선언한 new_posts를 args로 받는다
         * 결과를 만든후 print가 아니라 return 해주어야 한다
         **/

        function proc($args) {
        	Context::set('title',$args->title);
			// 출력될 목록 수
            $args->list_count = (int)$args->list_count;
            if(!$args->list_count) $args->list_count = 6;

			// 게시물을 가져옴
			$obj->module_srl = $args->selected_module_srl;
			$obj->list_count = $args->list_count;

            $oDocumentModel = &getModel('document');
            $oModuleModel = &getModel('module');
			$output = $oDocumentModel->getDocumentList($obj, true);
            $module_srl = $args->selected_module_srl;
			if(!$output->toBool()) return '';
            Context::set('oDocumentMid', $oModuleModel->getModuleInfoByModuleSrl($module_srl)->mid);
            Context::set('oDocumentItemList',$output->data);

			// 템플릿의 스킨 경로를 지정 (skin, colorset에 따른 값을 설정)
            $tpl_path = sprintf('%sskins/%s', $this->widget_path, $args->skin);

            // 템플릿 파일을 지정
            $tpl_file = 'new_posts';

            // 템플릿 컴파일
            $oTemplate = &TemplateHandler::getInstance();
            return $oTemplate->compile($tpl_path, $tpl_file);
        }
	}

?>
