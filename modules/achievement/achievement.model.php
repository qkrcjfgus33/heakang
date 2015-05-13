<?php
    /**
     * @class  achievementModel
     * @author XE스쿨 achievement 모듈 만들기 예제
     * @brief  achievement 모듈의 model class
     **/

    class achievementModel extends achievement {

	    /**
         * @brief 초기화
         **/
        function init() {
            
        }
		
		// 목록 가져오기
		function getAchievementContentList($args){
            $output = $this->executeQueryArrayData('achievement.getAchievementContentList', $args);
			$this->contentListPushClassTitle($output->data);
            return $output;
		}

		// 내용 가져오기
		function getAchievementContent($args){
            $output = $this->executeQueryArrayData('achievement.getAchievementContent', $args);
			$this->contentListPushClassTitle($output->data);
            $this->contentListPushPhotoList($output->data);
            return $output;
		}

        function contentListPushClassTitle(&$data) {
            foreach($data as &$val) {
                $val->achieve_class_title = $this->getClassTitle($val->achievement_class_srl);
            }
        }

        function getClassTitle($achievement_class_srl) {
            $obj->achievement_class_srl = $achievement_class_srl;

            $output = $this->executeQueryData('achievement.getAchievementClassTitle', $obj);

            return $output->data->class_title;
        }

        function contentListPushPhotoList(&$data) {
            foreach($data as &$val) {
                $val->achieve_photo_list = $this->getPhotoList($val->achievement_srl);
            }
        }

        function getPhotoList($achievement_srl) {
            $fileModel = &getModel('file');
            return $fileModel->getFiles($achievement_srl);
        }

        function executeQueryArrayData($query, $arg){
            $output = executeQueryArray($query, $arg);

            if(!$output->data) $output->data = array();
            return $output;
        }

        function executeQueryData($query, $arg){
            $output = executeQuery($query, $arg);

            if(!$output->data) $output->data = array();
            return $output;
        }
   }
?>
