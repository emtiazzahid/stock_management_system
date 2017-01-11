<?php
include_once("init.php");

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>POSNIC - Payment</title>

    <!-- Stylesheets -->
    <!---->
    <link rel="stylesheet" href="css/style.css">

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
            <li><a href="view_sales.php" class="sales-tab">Sales</a></li>
            <li><a href="view_customers.php" class=" customers-tab">Customers</a></li>
            <li><a href="view_purchase.php" class="purchase-tab">Purchase</a></li>
            <li><a href="view_supplier.php" class=" supplier-tab">Supplier</a></li>
            <li><a href="view_product.php" class=" stock-tab">Stocks / Products</a></li>
            <li><a href="view_payments.php" class="active-tab payment-tab">Payments / Outstandings</a></li>
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

            <h3>Payment</h3>
            <ul>
                <li><a href="view_payments.php">Payments</a></li>

            </ul>

        </div>
        <!-- end side-menu -->

        <div class="side-content fr">

            <div class="content-module">

                <div class="content-module-heading cf">

                    <h3 class="fl">Payment</h3>

                </div>
                <!-- end content-module-heading -->

                <div class="content-module-main cf">


                    <table>
                        <form action="" method="post" name="search">
                            <input name="searchtxt" type="text" class="round my_text_box" placeholder="Search">
                            &nbsp;&nbsp;<input name="Search" type="submit" class="my_button round blue   text-upper"
                                               value="Search">
                        </form>
                        <form action="" method="get" name="limit_go">
                            Page per Record<input name="limit" type="text" class="round my_text_box" id="search_limit"
                                                  style="margin-left:5px;"
                                                  value="<?php if (isset($_GET['limit'])) echo $_GET['limit']; else echo "10"; ?>"
                                                  size="3" maxlength="3">
                            <input name="go" type="button" value="Go" class=" round blue my_button  text-upper"
                                   onclick="return confirmLimitSubmit()">
                        </form>

                        <form name="deletefiles" action="delete.php" method="post">


                            <table>

                                <tr>
                                    <th>No</th>
                                    <th>Transaction Id</th>
                                    <th>Due Date</th>
                                    <th>subtotal</th>
                                    <th>Payment</th>
                                    <th>Balance</th>
                                    <th>Add Payment</th>

                                </tr>
                              <tr>


                                        <td>Lorem ipsum</td>
                                        <td width="100">Lorem ipsum</td>

                                        <td width="100">Lorem ipsum</td>

                                        <td width="100">Lorem ipsum</td>
                                        <td width="100">Lorem ipsum</td>
                                        <td width="100">Lorem ipsum</td>
                                        <td>
                                            <a href="#">Pay
                                                now
                                            </a>

                                        </td>


                                </tr>
                                <tr>


                                        <td>Lorem ipsum</td>
                                        <td width="100">Lorem ipsum</td>

                                        <td width="100">Lorem ipsum</td>

                                        <td width="100">Lorem ipsum</td>
                                        <td width="100">Lorem ipsum</td>
                                        <td width="100">Lorem ipsum</td>
                                        <td>
                                            <a href="#">Pay
                                                now
                                            </a>

                                        </td>


                                </tr>

                            </table>
                        </form>


                </div>
            </div>
            <div id="footer">

            </div>
            <!-- end footer -->

</body>
</html>