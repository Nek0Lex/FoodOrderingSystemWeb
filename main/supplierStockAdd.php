<?php
session_start();
$stockname = $_POST['stockname'];
$amount = $_POST['amount'];
require_once("Connections/conn.php");
$query = "SELECT StockId FROM stock WHERE Name = '$stockname'";
$rs = mysqli_query($conn, $query) or die(mysqli_error($conn));
$rc = mysqli_fetch_assoc($rs);
$supplierStockId =$_SESSION['userId'].$rc['StockId'];
$sql = "INSERT INTO SupplierStock VALUES ('$supplierStockId', '{$_SESSION['userId']}','{$rc['StockId']}', $amount)";
if (!mysqli_query($conn, $sql)){
    echo "<script language='JavaScript'>
    window.alert('Item was duplicated! Please check input again!');
    window.location.href='supplierStock.php';
    </script>";
} else {
    echo "<script language='JavaScript'>
    window.alert('Item added successfully');
    window.location.href='supplierStock.php';
    </script>";
}