<?php
session_start();
require_once("connection/conn.php");
$userId = $_POST['inputUserId'];
$password = $_POST['inputPassword'];

$sql = "SELECT ManagerId AS UserID, 'Managers' AS TableName  FROM Managers WHERE ManagerId='$userId' AND Password = '$password'
        UNION ALL
        SELECT RestaurantId AS UserID, 'Restaurants' AS TableName FROM Restaurants WHERE RestaurantId='$userId' AND Password = '$password'
        UNION ALL
        SELECT SupplierId AS UserID, 'Suppliers' AS TableName FROM Suppliers WHERE SupplierId='$userId' AND Password = '$password'
        UNION ALL
        SELECT WarehouseStaffId AS UserID, 'WarehouseStaff' AS TableName FROM WarehouseStaff WHERE WarehouseStaffId='$userId' AND Password = '$password'";

$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if (mysqli_num_rows($rs) <= 0) {
    echo ("<script language='JavaScript'>
    window.alert('Login Failed');
    window.location.href='login.html';
    </script>");
} else {
    $rc = mysqli_fetch_assoc($rs);
    $_SESSION['userId'] = $userId;
    $_SESSION['userType'] = $rc['TableName'];
    mysqli_free_result($rs);
    mysqli_close($conn);
    header("Location:index.html");
    exit();
}