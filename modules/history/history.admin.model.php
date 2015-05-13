<?php
    /**
     * @class  historyAdminModel
     * @author XE스쿨 HISTORY 모듈 만들기 예제
     * @brief  history 모듈의 admin model class
     **/

    class historyAdminModel extends history {

	    /**
         * @brief 초기화
         **/
        function init() {
        }

		function getHistoryAdminList($args){
            $output = executeQueryArray('history.getHistoryAdminList', $args);
			return $output;
		}

   }
?>
