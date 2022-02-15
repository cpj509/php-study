<?php
$success = 'login';
$$success = 'nice!';

$faillogin = 'wrong';
$$faillogin = 'try again!!!';
if ($_GET['id'] === 'asd') {
    if ($_GET['password'] === '1111') {
        # code...
        echo $success;
        echo '<br/>';
        echo $login;
    } else {
        # code...
        echo $faillogin;
        echo '<br/>';
        echo $wrong;
    }
    
} else {
    echo ('wrong id!!!!!');
}


?>