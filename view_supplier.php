<?php
include_once("init.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>

    <!-- Stylesheets -->
    <!---->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- jQuery & JS files -->
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
            <li><a href="view_sales.php" class=" sales-tab">Sales</a></li>
            <li><a href="view_customers.php" class="customers-tab">Customers</a></li>
            <li><a href="view_purchase.php" class="purchase-tab">Purchase</a></li>
            <li><a href="view_supplier.php" class="active-tab   supplier-tab">Supplier</a></li>
            <li><a href="view_product.php" class="stock-tab">Stocks / Products</a></li>
            <li><a href="view_payments.php" class="payment-tab">Payments</a></li>
            <li><a href="view_report.php" class="report-tab">Reports</a></li>
        </ul>
        <!-- end tabs -->

        <!-- Change this image to your own company's logo -->
        <!-- The logo will automatically be resized to 30px height. -->
        <a href="#" id="company-branding-small" class="fr"><img src="upload/posnic.png"/></a>

    </div>
    <!-- end full-width -->

</div>
<!-- end header -->


<!-- MAIN CONTENT -->
<div id="content">
    <div class="page-full-width cf">
        <div class="side-menu fl">
            <h3>supplier Management</h3>
            <ul>
                <li><a href="add_supplier.php">Add supplier</a></li>
                <li><a href="view_supplier.php">View supplier</a></li>
            </ul>

        </div>
        <!-- end side-menu -->

        <div class="side-content fr">

            <div class="content-module">

                <div class="content-module-heading cf">
                    <h3 class="fl">supplier</h3>
                </div>
                <!-- end content-module-heading -->
             </div>
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Supplier Namee</th>
                            <th>Supplier Address</th>
                            <th>Contact</th>
                            <th>Balance</th>
                            <th>Edit /Delete</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Supplier Namee</th>
                            <th>Supplier Address</th>
                            <th>Contact</th>
                            <th>Balance</th>
                            <th>Edit /Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM supplier_details";
                        $result = mysqli_query($db->connection, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td> <?php echo $row['id']; ?></td>
                                <td> <?php echo  $row['supplier_name']; ?></td>
                                <td> <?php echo $row['supplier_address']; ?></td>
                                <td> <?php echo $row['supplier_contact1']; ?></td>
                                <td> <?php echo $row['balance']; ?></td>
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
            <!-- end footer -->

</body>
</html>