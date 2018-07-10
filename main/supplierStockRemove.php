<?php
$id = $_GET['id'];
require_once("Connections/conn.php");
$sql = "DELETE FROM SupplierStock WHERE SupplierStockId = $id";
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: supplierStockR.php');
    exit;
} else {
    echo "Error deleting record";
}