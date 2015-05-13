<?php
    /**
     * @class  history
     * @author XE스쿨 history 모듈 만들기 예제
     * @brief  history 모듈의 high class
     **/
 
    class history extends ModuleObject {
 
 
        /**
         * @brief 설치시 추가 작업이 필요할시 구현
         **/
        function moduleInstall() {
 
            return new Object();
        }
 
        /**
         * @brief 설치가 이상이 없는지 체크하는 method
         **/
        function checkUpdate() {
 
            return false;
        }
 
        /**
         * @brief 업데이트 실행
         **/
        function moduleUpdate() {
 
            return new Object(0, 'success_updated');
        }
 
        function moduleUninstall() {
 
            return new Object();
        }
 
        /**
         * @brief 캐시 파일 재생성
         **/
        function recompileCache() {
        }
 
    }
?>