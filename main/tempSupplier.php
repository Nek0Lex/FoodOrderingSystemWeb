<?php
session_start();
require_once("Connections/conn.php");

/**
a.	List approved orders
        Can view all your approved the orders
            Details can be viewed
            OrderId, Stock Name, Order Amount, Orders Purchase Date, Orders Delivery Date, Order Received Date

 */
$query = "SELECT * FROM Orders INNER JOIN SupplierStock ON Orders.SupplierStockId = SupplierStock.SupplierStockId INNER JOIN Suppliers ON SupplierStock.SupplierId = Suppliers.SupplierId WHERE Suppliers.SupplierId='{$_SESSION['userId']}'";
$rs = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($rc = mysqli_fetch_assoc($rs)) {
    echo
    "<tr>
         <td>{$rc['OrderId']}</td>
         <td>{$rc['Name']}</td>
         <td>{$rc['SupplierStockId']}</td>
         <td>{$rc['Amount']}</td>
         <td>{$rc['PurchaseDate']}</td>
         <td>{$rc['DeliveryDate']}</td>
         <td>{$rc['ReceivedDate']}</td>         
     </tr>";
}
mysqli_free_result($rs);

/**
b.	Update the delivery date
        Update the delivery date of an order.
 */

// TODO


/**
c.	Add stock into SupplierStock
        Add the stock that you can provide into SupplierStock table.
            Required information
            Amount
 */
$stockId = '102';
$supplierStockId = $_SESSION['userId'].$stockId;
$amount = 120;
$sql = "INSERT INTO SupplierStock VALUES ('$supplierStockId', '{$_SESSION['userId']}','$stockId', $amount)";
mysqli_query($conn, $sql);



/**
d.	Remove old stock in SupplierStock table
        Can view & delete old stock in SupplierStock table
 */

// Delete only one record
$supplierStockId = "3001102";
$sql = "DELETE FROM SupplierStock WHERE SupplierStockId = $supplierStockId ";
mysqli_query($conn, $sql);

// Delete multi rows
// TODO

mysqli_close($conn);
