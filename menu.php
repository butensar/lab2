<!DOCTYPE html>
<html lang="en">
<head>
<title>Цэс</title>
</head>
<body>

<a href="test.php">Бүртгүүлэх</a>
<a href="testu.php">Хэрэглэгчид</a>
<?php
    if (isset($_GET["type"])){
        $type=$_GET["type"];
        if( $type == "register"){
            include 'test.php';
        }
        else if( $type == "users"){
            include 'testu.php'; //include ашиглан register болон users файл руу үсэрж орно
        }
    }
    ?>


</body>
</html>