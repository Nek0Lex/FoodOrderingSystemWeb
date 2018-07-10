<?php
$date = $_POST['datepicker'];
$id = $_POST['id'];
require_once("Connections/conn.php");
$sql = "UPDATE orders SET ReceivedDate = '$date' WHERE OrderId = $id";
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    echo "<script language='JavaScript'>
    window.alert('Update successfully');
    window.location.href='WHvieworder.php'
    </script>";
} else {
    echo "<script language='JavaScript'>
    window.alert('Error in changing date!');
    window.location.href='WHvieworder.php'
    </script>";
}