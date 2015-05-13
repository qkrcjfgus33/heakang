<?php
    /**
     * @class  achievementController
     * @author XE스쿨 achievement 모듈 만들기 예제
     * @brief  achievement 모듈의 controller class
     **/

    class achievementController extends achievement {

        /**
         * @brief 초기화
         **/
        function init() {
        }

        /**
         * @brief achievement 입력
         **/
        function procAchievementContentWrite() {

            // request 값을 모두 받음
            $obj = Context::getRequestVars();

			// 현재 모듈번호 확인
			$obj->module_srl = Context::get('module_srl');

            if($obj->achievement_srl == 0){
                $obj->achievement_srl = getNextSequence();
            }
			//achievement_new 확인
			//$achievement_new = Context::get('achievement_new');

			// achievement_new에 따라 새로 입력하거나 수정하기 위해
			//if($achievement_new == "false") {

			//	$output = executeQuery("achievement.updateAchievement", $obj);
			//	$this->setMessage('success_updated');

			//} else {
				$output = executeQuery("achievement.insertAchievement", $obj);
                debugPrint($obj);
                $this->setMessage($output->message);

			//}
 
		}

        /**
         * @brief achievement 삭제
         **/
        function procAchievementContentDelete() {

			// 삭제를 원하는 achievement_srl 값을 받음
            $obj->achievement_srl = Context::get('achievement_srl');

			// 삭제 실행
			$output = executeQuery("achievement.deleteAchievement", $obj);
			if(!$output->toBool()) return $output;

			$this->setMessage('success_deleted');
        }

	}
?>
