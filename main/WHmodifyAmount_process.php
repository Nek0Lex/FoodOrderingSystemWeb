<?php
$id = $_POST['getid'];
$amount = $_POST['amount'];
require_once("Connections/conn.php");
$sql = "UPDATE warehousestock SET Amount = '$amount' WHERE WarehouseStockId = $id";
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    echo "<script language='JavaScript'>
    window.alert('Update successfully');
    window.location.href='WHmodifyAmount.php'
    </script>";
} else {
    echo "<script language='JavaScript'>
    window.alert('Error in modify');
    window.location.href='WHmodifyAmount.php'
    </script>";
}