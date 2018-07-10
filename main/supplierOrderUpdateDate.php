<?php
session_start();
require_once("Connections/conn.php");
$id = $_POST['OrderId'];
$date = date('Y-m-d', strtotime($_POST['DeliveryDate']));

$sql = "UPDATE Orders SET DeliveryDate = '$date' WHERE OrderId = $id";
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    echo "<script language='JavaScript'>
    window.alert('Updated successfully');
    window.location.href='supplierOrderUpdate.php'
    </script>";
} else {
    echo "<script language='JavaScript'>
    window.alert('Error in modify');
    window.location.href='supplierOrderUpdate.php'
    </script>";
}