<?php
include ("appBody.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form name="form" action="" method="get">
    Podaj ilosc liczb: <br>
    <input type = "text" name = "size" id ="size">
    <input type = "submit" name="button" value="ENTER">
</form>

<?php
    $appBody = new appBody();

    if(array_key_exists('button', $_GET)) {
        $appBody->program();
    }
    ?>

</body>
</html>