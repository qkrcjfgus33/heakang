<?php
    /**
     * @class achievement_preview
     * @author vomvoru (qkrcjfgus3@gmail.com)
     * @version 0.1
     **/

    class achievement_preview extends WidgetHandler {

        /**
         * @brief 위젯의 실행 부분
         *
         * ./widgets/위젯/conf/info.xml 에 선언한 achievement_preview를 args로 받는다
         * 결과를 만든후 print가 아니라 return 해주어야 한다
         **/

        function proc($args) {
            // 출력될 목록 수
            $args->list_count = 10;

            // 게시물을 가져옴
            $obj->module_srl = $args->selected_module_srl;
            $obj->list_count = $args->list_count;
            
            $oAchivementModel = &getModel('achievement');
            
            $output = $oAchivementModel->getAchievementContentList($obj);
            $oAchivementModel->contentListPushPhotoList($output->data);
            $oAchivementAdminModel = &getAdminModel('achievement');

            if(!$output->toBool()) return '';
            Context::set('oAchivementTitle',$this->getTitle($args->selected_module_srl));
            Context::set('oAchivementItemList',$output->data);
            Context::set('oAchivementSrl',$args->selected_module_srl);
            Context::set('oAchivementMid', $this->getMid($args->selected_module_srl));


            // 템플릿의 스킨 경로를 지정 (skin, colorset에 따른 값을 설정)
            $tpl_path = sprintf('%sskins/%s', $this->widget_path, $args->skin);

            // 템플릿 파일을 지정
            $tpl_file = 'achievement_preview';

            // 템플릿 컴파일
            $oTemplate = &TemplateHandler::getInstance();
            return $oTemplate->compile($tpl_path, $tpl_file);
        }

        function getTitle($module_srl){
            $oAchivementAdminModel = &getAdminModel('achievement');
            $oAchivementModuleList = $oAchivementAdminModel->getAchievementAdminList()->data;

            foreach($oAchivementModuleList as $val){
                if($val->module_srl == $module_srl){
                    return $val->browser_title;
                }
            }
        }

        function getMid($module_srl){
            $oAchivementAdminModel = &getAdminModel('achievement');
            $oAchivementModuleList = $oAchivementAdminModel->getAchievementAdminList()->data;
            
            foreach($oAchivementModuleList as $val){
                if($val->module_srl == $module_srl){
                    return $val->mid;
                }
            }
        }
    }

?>
