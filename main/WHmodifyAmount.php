<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="style2.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet"
          href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet"
          href="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
    <link rel="stylesheet"
          href="css/index.css">
    <link rel="stylesheet"
          href="dist/css/sb-admin-2.css">
    <link rel="stylesheet" type="text/css"
          href="vendor/font-awesome/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            $('#warehousetable').DataTable({
                select: false
            });
        });
    </script>
    <script src="script/Time.js"></script>
</head>

<body onload="startTime()">

<div class="wrapper" style="background-color: rgb(47, 49, 54)">
    <nav id="sidebar" style="background-color: rgb(47, 49, 54)">
        <div class="sidebar-header" style="background-color: rgb(32, 34, 37)">
            <?php echo "<h3>" . $_SESSION['userType'] . "</h3>"; ?>
        </div>
        <ul class="list-unstyled components" style="background-color: rgb(47, 49, 54); border-bottom-width: 0px">
            <?php echo "<p>" . "Hello, " . $_SESSION['userName'] . "</p>"; ?>
            <li>
                <a href="#menu">Profile</a>
            </li>
            <li>
                <a href="WHvieworder.php">View orders</a>
            </li>
            <li>
                <a href="WHmodifyAmount.php">Modify orders</a>
            </li>
            <li>
                <a href="WHaddstock.php">Add new stocks</a>
            </li>
            <li>
                <a href="WHremoveoldstock.php">Remove old stocks</a>
            </li>
            <li>
                <?php
                echo "<a href='logout.php'>logout</a>";
                ?>
            </li>
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content"
         style="background: rgb(54, 57, 62);">
        <nav class="navbar navbar-default navbar-static-top" role="navigation"
             style="margin-bottom: 0; background-color: rgb(54, 57, 62);">
            <div class="navbar-header">
                <a class="navbar-brand" href="warehouse.php"
                   style="color: aliceblue">Hello, <?php echo $_SESSION['userName']; ?>! Now Time is: <span
                            id="timeHeader"></span></a></div>
        </nav>

        <div class="row" style="">
            <div class="col-lg-12">
                <h1 class="page-header" style="color: aliceblue">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="glyphicon glyphicon-align-left"></i>
                    </button>
                    <a href="warehouse.php">Modify Stock</a>
                </h1>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                </div>
            </div>
        </div>

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
                                    <div class="huge">View Order</div>
                                </div>
                            </div>
                        </div>
                        <a href="WHvieworder.php">
                            <div class="panel-footer">
                                <span class="pull-left">List delivery orders</span>
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
                                    <div class="huge">Modify</div>
                                </div>
                            </div>
                        </div>
                        <a href="WHmodifyAmount.php">
                            <div class="panel-footer">
                                <span class="pull-left">Modify the stock amount in warehouse</span>
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
                        <a href="WHaddstock.php">
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
                                    <div class="huge">Removes</div>
                                </div>
                            </div>
                        </div>
                        <a href="WHremoveoldstock.php">
                            <div class="panel-footer">
                                <span class="pull-left">Remove old stock in Warehouse</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-14">
                <div class="col">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Warehouse Stock
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-14">
                                <div class="col">
                                    <div class="table-responsive">
                                        <table id="warehousetable"
                                               class="table table-bordered table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th>Warehouse Stock ID</th>
                                                <th>Amount</th>
                                                <th>Name</th>
                                                <th>Modify</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            require_once("Connections/conn.php");
                                            $query = "SELECT WarehouseStockId, Amount, Name 
                                                          FROM WarehouseStock INNER JOIN STOCK 
                                                          ON WarehouseStock.StockId = Stock.StockId 
                                                          WHERE WarehouseStock.WarehouseStaffId = '{$_SESSION['userId']}'";
                                            $rs = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                            while ($rc = mysqli_fetch_assoc($rs)) {
                                                echo "<tr>
                                                        <form action='WHmodifyAmount_process.php' method='post'>
                                                        <td>
                                                        <input id='getid' name='getid' type='number' value='{$rc['WarehouseStockId']}' style='border: none; background-color: rgb(255,255,255)' readonly>
                                                        </td>
                                                        <td>
                                                        <input id='amount' type=\"number\" name=\"amount\" min=\"0\" max=\"9999\" value='{$rc['Amount']}'>
                                                        </td>
                                                        <td>{$rc['Name']}</td>
                                                        <td><a id='modify' href='WHmodifyAmount_process.php?id=" . $rc['WarehouseStockId'] . "'><button id='btn_modify' type=\"submit\" class=\"btn btn-primary\" style='background-color: rgb(114,137,218)' >Modify</button></a></td>
                                                        </form>
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