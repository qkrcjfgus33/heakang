<?php
    /**
     * @class  historyModel
     * @author XE스쿨 HISTORY 모듈 만들기 예제
     * @brief  history 모듈의 model class
     **/

    class historyModel extends history {

	    /**
         * @brief 초기화
         **/
        function init() {
        }
		
		// 목록 가져오기
		function getHistoryContentList($args){
            $output = executeQueryArray('history.getHistoryContentList', $args);
			return $output;
		}

		// 내용 가져오기
		function getHistoryContentHistory($args){
            $output = executeQueryArray('history.getHistoryContentHistory', $args);
			return $output;
		}

   }
?>
