<?php
session_start();
$id = 'tomato';
$pwd = '111111';
if(!empty($_POST['id']) && !empty($_POST['pwd'])){
    if($_POST['id'] == $id && $_POST['pwd'] == $pwd){
        $_SESSION['is_login'] = true;
        $_SESSION['nickname'] = '토마토';
        header('Location: ./session.php');
        exit;
    }
}
echo '로그인 하지 못했습니다.';
?>