<?php
include_once("init.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SDK - Customer</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="js/script.js"></script>

</head>
<body>


<?php include_once("tpl/top_bar.php"); ?>

<div id="header-with-tabs">

    <div class="page-full-width cf">

        <ul id="tabs" class="fl">
            <li><a href="dashboard.php" class="dashboard-tab">Dashboard</a></li>
            <li><a href="view_sales.php" class=" sales-tab">Sales</a></li>
            <li><a href="view_customers.php" class="active-tab customers-tab">Customers</a></li>
            <li><a href="view_purchase.php" class="purchase-tab">Purchase</a></li>
            <li><a href="view_supplier.php" class="  supplier-tab">Supplier</a></li>
            <li><a href="view_product.php" class="stock-tab">Stocks / Products</a></li>
            <li><a href="view_payments.php" class="payment-tab">Payments / Outstandings</a></li>
            <li><a href="view_report.php" class="report-tab">Reports</a></li>
        </ul>

        <a href="#" id="company-branding-small" class="fr"><img src="upload/posnic.png"></a>

    </div>

</div>
<!-- end header -->


<!-- MAIN CONTENT -->
<div id="content">

    <div class="page-full-width cf">

        <div class="side-menu fl">

            <h3>Customer Management</h3>
            <ul>
                <li><a href="add_customer.php">Add Customer</a></li>
                <li><a href="view_customers.php">View Customers</a></li>
            </ul>

        </div>
        <!-- end side-menu -->

        <div class="side-content fr">
            <div class="content-module">
                <div class="content-module-heading cf">
                    <h3 class="fl">Customers</h3>
                </div>
            </div>
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Customer Name</th>
                    <th>Customer Address Id</th>
                    <th>Contact</th>
                    <th>Balance</th>
                    <th>Edit /Delete</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Customer Name</th>
                    <th>Customer Address Id</th>
                    <th>Contact</th>
                    <th>Balance</th>
                    <th>Edit /Delete</th>
                </tr>
                </tfoot>
                <tbody>
                <?php
                $sql = "SELECT * FROM customer_details";
                $result = mysqli_query($db->connection, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td> <?php echo $row['id']; ?></td>
                        <td><?php echo $row['customer_name']; ?></td>
                        <td> <?php echo $row['customer_address']; ?></td>
                        <td> <?php echo $row['customer_contact1']; ?></td>
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