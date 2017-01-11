<?php
include_once("init.php");

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SDK - Report</title>

    <!-- Stylesheets -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/date_pic/date_input.css">

    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- jQuery & JS files -->
    <?php include_once("tpl/common_js.php"); ?>
    <script src="js/script.js"></script>
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
            <li><a href="view_product.php" class="stock-tab">Stocks / Products</a></li>
            <li><a href="view_payments.php" class=" payment-tab">Payments / Outstandings</a></li>
            <li><a href="view_report.php" class="active-tab report-tab">Reports</a></li>
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

            <h3>Report</h3>
            <ul>
                <ul>
                    <li><a></a></li>

                </ul>
            </ul>


        </div>
        <!-- end side-menu -->

        <div class="side-content fr">

            <div class="content-module">

                <div class="content-module-heading cf">

                    <h3 class="fl">Report</h3>

                </div>
                <!-- end content-module-heading -->

                <div class="content-module-main cf">
                    <form action="">

                        <table class="form" border="0" cellspacing="0" cellpadding="0">
                            <form action="" method="post" name="form1" id="form1" name=""
                                  id="" target="myNewWinsr">
                                <tr>

                                    <td><strong>Sales Report </strong></td>
                                    <td>From</td>
                                    <td><input name="" type="text" id=""
                                               style="width:80px;"></td>
                                    <td>To</td>
                                    <td><input name="" type="text" id="" style="width:80px;">
                                    </td>
                                    <td><input name="submit" type="button" value="Show" >
                                    </td>

                                </tr>
                            </form>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            <form action="purchase_report.php" method="post" name="purchase_report" target="_blank">
                                <tr>
                                    <td><strong>Purchase Report </strong></td>
                                    <td>From</td>
                                    <td><input name="" type="text" id=""
                                               style="width:80px;"></td>
                                    <td>To</td>
                                    <td><input name="" type="text" id=""
                                               style="width:80px;"></td>
                                    <td><input name="submit" type="button" value="Show" >
                                    </td>
                                </tr>
                            </form>

                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            <form action=".php" method="post" name=""
                                  target="_blank">
                                <tr>
                                    <td><strong>Purchase Stocks </strong></td>
                                    <td>From</td>
                                    <td><input name="" type="text" id=""
                                               style="width:80px;"></td>
                                    <td>To</td>
                                    <td><input name="" type="text" id="to_sales_purchase_date"
                                               style="width:80px;"></td>
                                    <td><input name="" type="button" value="Show"
                                              ></td>
                                </tr>
                            </form>

                        </table>


                </div>
                <!-- end content-module-main -->


            </div>
            <!-- end content-module -->


        </div>
        <!-- end full-width -->

    </div>
    <!-- end content -->


    <!-- FOOTER -->
    <div id="footer">

    </div>
    <!-- end footer -->

</body>
</html>