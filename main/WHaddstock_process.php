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
require_once("Connections/conn.php");
$query = "SELECT StockId FROM stock WHERE Name = '$stockname'";
$rs = mysqli_query($conn, $query) or die(mysqli_error($conn));
$rc = mysqli_fetch_assoc($rs);
$warehouseStockId =$_SESSION['userId'].$rc['StockId'];
$insertquery = "INSERT INTO warehousestock (WarehouseStockId, WarehouseStaffId, StockId, Amount) VALUES ($warehouseStockId, {$_SESSION['userId']}, {$rc['StockId']}, $amount);";
if (!mysqli_query($conn, $insertquery)){
    echo "<script language='JavaScript'>
    window.alert('Item was duplicated! Please check input again!');
    window.location.href='WHaddstock.php';
    </script>";
} else {
    echo "<script language='JavaScript'>
    window.alert('Item added successfully');
    window.location.href='WHaddstock.php'";
}
?>
</body>
</html>
