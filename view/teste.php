<?php
$pdo = new PDO("pgsql:host=localhost;dbname=clinica","postgres","ca1997");
include_once '../controller/AlterarController.php';

$obj = new AlterarController();



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
<form>
    First name:<br>
    <input type="text" name="firstname" value="<?php echo $obj->showNome();?>"><br>
    Last name:<br>
    <input type="text" name="lastname">
</form>

</body>
</html>
