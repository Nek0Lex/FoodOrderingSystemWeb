<?php
$id = $_GET['id'];
require_once("Connections/conn.php");
$sql = "DELETE FROM warehousestock WHERE WarehouseStockId = $id";
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: WHremoveoldstock.php');
    exit;
} else {
    echo "Error deleting record";
}