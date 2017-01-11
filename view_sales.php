<?php
include_once("init.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SDK - Stock</title>

    <!-- Stylesheets -->
    <!---->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- jQuery & JS files -->
<!--    --><?php //include_once("tpl/common_js.php"); ?>
<!--    <script src="js/script.js"></script>-->
</head>
<body>

<!-- TOP BAR -->
<?php include_once("tpl/top_bar.php"); ?>
<!-- end top-bar -->

<!-- HEADER -->
<div id="header-with-tabs">

    <div class="page-full-width cf">

        <ul id="tabs" class="fl">
            <li><a href="dashboard.php" class="dashboard-tab">Dashboard</a></li>
            <li><a href="view_sales.php" class=active-tab sales-tab">Sales</a></li>
            <li><a href="view_customers.php" class=" customers-tab">Customers</a></li>
            <li><a href="view_purchase.php" class=" purchase-tab">Purchase</a></li>
            <li><a href="view_supplier.php" class=" supplier-tab">Supplier</a></li>
            <li><a href="view_product.php" class=" stock-tab">Stocks / Products</a></li>
            <li><a href="view_payments.php" class="payment-tab">Payments / Outstandings</a></li>
            <li><a href="view_report.php" class="report-tab">Reports</a></li>
        </ul>

        <a href="#" id="company-branding-small" class="fr"><img src="upload/posnic.png" alt="Point of Sale"/></a>

    </div>
    <!-- end full-width -->

</div>
<!-- end header -->


<!-- MAIN CONTENT -->
<div id="content">

    <div class="page-full-width cf">

        <div class="side-menu fl">

            <h3>Sales</h3>
            <ul>
                <li><a href="add_sales.php">Add Sales</a></li>
                <li><a href="view_sales.php">View Sales</a></li>

            </ul>

        </div>
        <!-- end side-menu -->

        <div class="side-content fr">
            <div class="content-module">
                <div class="content-module-heading cf">
                    <h3 class="fl">Sales</h3>
                </div>
            </div>
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Stock Name</th>
                    <th>Stock Id</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Payment</th>
                    <th>Amount</th>
                    <th>Edit /Delete</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Stock Name</th>
                    <th>Stock Id</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Payment</th>
                    <th>Amount</th>
                    <th>Edit /Delete</th>
                </tr>
                </tfoot>
                <tbody>
                <?php
                    $sql = "SELECT * FROM stock_sales ORDER BY date desc";
                    $result = mysqli_query($db->connection, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                <tr>
                    <td> <?php echo $row['id']; ?></td>
                    <td><?php echo $row['stock_name']; ?></td>
                    <td> <?php echo $row['transactionid']; ?></td>
                    <td> <?php echo $row['date']; ?></td>
                    <td> <?php echo $row['customer_id']; ?></td>
                    <td> <?php echo $row['payment']; ?></td>
                    <td> <?php echo $row['subtotal']; ?></td>
                    <td>
                        <a href="update_sales.php?sid=<?php echo $row['id']; ?>&table=stock_sales&return=view_sales.php"
                           class="table-actions-button ic-table-edit">
                        </a>
                        <a onclick="return confirmSubmit()"
                           href="delete.php?id=<?php echo $row['id']; ?>&table=stock_sales&return=view_sales.php"
                           class="table-actions-button ic-table-delete"></a>
                    </td>
                </tr>

               <?php  } ?>
                </tbody>
            </table>
            <!-- end footer -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#example').DataTable();
                } );
            </script>
</body>
</html>