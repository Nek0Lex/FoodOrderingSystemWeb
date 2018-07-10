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
<?php
session_start();
$stockname = $_POST['stockname'];
$amount = $_POST['amount'];
echo $stockname;
echo $amount;
echo $_SESSION['userId'];
?>
<button type="button" id="back" class="btn btn-primary"><a href="WHaddstock.php">Confirm</a></button>
</body>
</html>
