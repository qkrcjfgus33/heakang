<?php
    /**
     * @class  historyController
     * @author XE스쿨 HISTORY 모듈 만들기 예제
     * @brief  history 모듈의 controller class
     **/

    class historyController extends history {

        /**
         * @brief 초기화
         **/
        function init() {
        }

        /**
         * @brief HISTORY 입력
         **/
        function procHistoryContentWrite() {

            // request 값을 모두 받음
            $obj = Context::getRequestVars();

			// 현재 모듈번호 확인
			$obj->module_srl = Context::get('module_srl');

			//history_srl 확인
			$history_srl = Context::get('history_srl');

			// history_srl에 따라 새로 입력하거나 수정하기 위해
			if($history_srl) {

				// module_srl이 있으면 update
				$output = executeQuery("history.updateHistory", $obj);
				$this->setMessage('success_updated');

			} else {

				// module_srl이 없으면 insert
				$output = executeQuery("history.insertHistory", $obj);
				$this->setMessage('success_registed');

			}
 
		}

        /**
         * @brief HISTORY 삭제
         **/
        function procHistoryContentDelete() {

			// 삭제를 원하는 history_srl 값을 받음
            $obj->history_srl = Context::get('history_srl');

			// 삭제 실행
			$output = executeQuery("history.deleteHistory", $obj);
			if(!$output->toBool()) return $output;

			$this->setMessage('success_deleted');
        }

	}
?>
