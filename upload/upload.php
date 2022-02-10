<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    ini_set("display_errors", "1"); //php.ini의 display_errors option을 on. 트러블슈팅용.
    $uploadDir = 'D:\Bitnami\wampstack-8.1.2-0\apache2\htdocs\upload\file\\';
    $uploadFileName = $uploadDir.basename($_FILES['userfile']['name']); //basename은 업로드 한 파일의 경로나 확장자를 제거하고 파일명만 남김. 보안용도.
    echo '<pre>';
    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadFileName)){
        echo "File upload success!!!!\n";
    }else{
        print "File upload Fail!!\n";
    }
    echo "Details\n";
    print_r($_FILES);
    echo '</pre>'; 
    ?>
    <img src="file/<?=$_FILES['userfile']['name']?>">
</body>
</html>