<?php
$conn = mysqli_connect('localhost', 'root', '111111', 'phpstudy1');
switch($_GET['mode']){
    case 'insert':
    mysqli_query($conn, "INSERT INTO topic(title, description, created) VALUES('".mysqli_real_escape_string($conn, $_POST['title'])."', '".mysqli_real_escape_string($conn, $_POST['description'])."', now())");
    header("Location: list.php"); 
    break;
    case 'delete':
    mysqli_query($conn, 'DELETE FROM topic WHERE id = '.mysqli_real_escape_string($conn, $_POST['id']));
    header("Location: list.php"); 
    break;
    case 'modify':
    mysqli_query($conn,'UPDATE topic SET title = "'.mysqli_real_escape_string($conn, $_POST['title']).'", description = "'.mysqli_real_escape_string($conn, $_POST['description']).'" WHERE id = '.mysqli_real_escape_string($conn, $_POST['id']));
    header("Location: list.php?id={$_POST['id']}");
    break;
}
mysqli_close($conn);
?>