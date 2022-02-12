<?php
    setcookie('cookie1', 'tough');
    /**
     * //세 번째 옵션의 뜻은 유효 기간이 15초라는 뜻. 
     * 유효 기간 후에는 데이터가 자동으로 삭제. 
     * 두 번째 time()은 위의 'tough'처럼 쿠키에 저장되는 데이터임.
     */
    setcookie('cookie2', time(), time() + 15);  

?>