<?php
// session_save_path('./session');
session_start();
echo $_SESSION['title'];
var_dump($_SESSION);
?>