<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet"
          href="style2.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet"
          href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <link rel="stylesheet"
          href="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">

    <link rel="stylesheet"
          href="css/index.css">

    <!-- Custom CSS -->
    <link rel="stylesheet"
          href="dist/css/sb-admin-2.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" \
          href="vendor/font-awesome/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#warehousetable').DataTable();
        });
    </script>

</head>

<body>

<div class="wrapper" style="background-color: rgb(47, 49, 54)">
    <nav id="sidebar" style="background-color: rgb(47, 49, 54)">
        <div class="sidebar-header" style="background-color: rgb(32, 34, 37)">
            <h3>Header as you want </h3>
        </div>
        <ul class="list-unstyled components"  style="background-color: rgb(47, 49, 54); border-bottom-width: 0px" >
            <p>Dummy Heading</p>
            <li>
                <a href="#menu">Animación</a>
            </li>
            <li>
                <a href="#menu">Ilustración</a>

            </li>
            <li>
                <a href="#">Interacción</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li>
                <a href="#">Acerca</a>
            </li>
            <li>
                <a href="#">Logout</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content"
         style="background: rgb(54, 57, 62);">
        <nav class="navbar navbar-default navbar-static-top" role="navigation"
             style="margin-bottom: 0; background-color: rgb(54, 57, 62);">
            <div class="navbar-header">
                <a class="navbar-brand" href="supplier.php" style="color: aliceblue">SB Admin v2.0</a>
            </div>
        </nav>

        <div class="row" style="">
            <div class="col-lg-12">
                <h1 class="page-header" style="color: aliceblue">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="glyphicon glyphicon-align-left"></i>
                    </button>
                    <a href="supplier.php">View order</a>
                </h1>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->

        <div id="page">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-folder-open fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Orders</div>
                                </div>
                            </div>
                        </div>
                        <a href="supplierOrder.php">
                            <div class="panel-footer">
                                <span class="pull-left">List approved orders</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Update</div>
                                </div>
                            </div>
                        </div>
                        <a href="supplierOrderUpdate.php">
                            <div class="panel-footer">
                                <span class="pull-left">Update the delivery date of orders</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">New Stocks</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Add stock into warehouse</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Remove</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Remove old stock in warehouse</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="col-lg-14">
                <div class="col">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Delivery orders
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id="warehousetable" class="table table-bordered table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th>OrderId</th>
                                                <th>StockName</th>
                                                <th>OrdersAmount</th>
                                                <th>PurchaseDate</th>
                                                <th>DeliveryDate</th>
                                                <th>ReceivedDate</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            require_once("Connections/conn.php");
                                            $query = "SELECT OrderId, Stock.Name StockName, Orders.Amount OrdersAmount, PurchaseDate, DeliveryDate, ReceivedDate FROM Orders 
                                                        INNER JOIN SupplierStock ON Orders.SupplierStockId = SupplierStock.SupplierStockId 
                                                        INNER JOIN Suppliers ON SupplierStock.SupplierId = Suppliers.SupplierId 
                                                        INNER JOIN Stock ON SupplierStock.StockId = Stock.StockId
                                                        WHERE Suppliers.SupplierId='{$_SESSION['userId']}'";
                                            $rs = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                            while ($rc = mysqli_fetch_assoc($rs)) {
                                                echo
                                                "<tr>
                                                     <td>{$rc['OrderId']}</td>
                                                     <td>{$rc['StockName']}</td>
                                                     <td>{$rc['OrdersAmount']}</td>
                                                     <td>{$rc['PurchaseDate']}</td>
                                                     <td>{$rc['DeliveryDate']}</td>
                                                     <td>{$rc['ReceivedDate']}</td>
                                                 </tr>";
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>