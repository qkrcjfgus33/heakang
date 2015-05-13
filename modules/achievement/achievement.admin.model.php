<?php
    /**
     * @class  achievementAdminModel
     * @author XE스쿨 achievement 모듈 만들기 예제
     * @brief  achievement 모듈의 admin model class
     **/

    class achievementAdminModel extends achievement {

	    /**
         * @brief 초기화
         **/
        function init() {
        }

		function getAchievementAdminList($args){
            $output = executeQueryArray('achievement.getAchievementAdminList', $args);
			return $output;
		}

   }
?>
