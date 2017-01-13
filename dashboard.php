<?php
include_once("init.php");

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SDK - Dashboard</title>

    <!-- Stylesheets -->
<?php include("assets/css.php"); ?>


    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<!-- TOP BAR -->
<?php include_once("tpl/top_bar.php"); ?>
<!-- end top-bar -->


<!-- HEADER -->
<div id="header-with-tabs">

    <div class="page-full-width cf">

        <ul id="tabs" class="fl">
            <li><a href="dashboard.php" class="active-tab dashboard-tab">Dashboard</a></li>
            <li><a href="view_sales.php" class="sales-tab">Sales</a></li>
            <li><a href="view_customers.php" class=" customers-tab">Customers</a></li>
            <li><a href="view_purchase.php" class="purchase-tab">Purchase</a></li>
            <li><a href="view_supplier.php" class=" supplier-tab">Supplier</a></li>
            <li><a href="view_product.php" class=" stock-tab">Stocks / Products</a></li>
            <li><a href="view_payments.php" class="payment-tab">Payments / Outstandings</a></li>
            <li><a href="view_report.php" class="report-tab">Reports</a></li>
        </ul>
        <!-- end tabs -->

        <!-- Change this image to your own company's logo -->
        <!-- The logo will automatically be resized to 30px height. -->
        <?php 
        $line = $db->queryUniqueObject("SELECT * FROM store_details ");

        $_SESSION['logo'] = $line->log;
        ?>
        <a href="#" id="company-branding-small" class="fr"><img src="upload/posnic.png"/></a>

    </div>
    <!-- end full-width -->

</div>
<!-- end header -->


    <div class="container-fluid">
    <div class="row">
           <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading epanel">Panel heading without title</div>
              <div class="panel-body">
              <nav class="navbar navbar-default sidebar" role="navigation">
                <div class="navbar-header">   
                </div>
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="add_sales.php">Add Sales</a></li>
                    <li><a href="add_purchase.php">Add Purchase</a></li>
                    <li><a href="add_supplier.php">Add Supplier</a></li>
                    <li><a href="add_customer.php">Add Customer</a></li>
                    <li><a href="view_report.php">Report</a></li>
                  </ul>
                </div>
            </nav>

              </div>
            </div>
        </div>
            <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel-heading">
              <ul class="nav nav-tabs" role="tablist">
                  <li class="active">
                    <a href="#statistics" role="tab" data-toggle="tab">Statistics</a>
                  </li>
    <?php 
            $stock_avail = $db->countOfAll("stock_avail");
            if ($stock_avail <= 7) { ?>
                  <li><a href="#alerts" role="tab" data-toggle="tab" style="color:red">Alerts</a></li>
     <?php 
        }
    ?>
                </ul>
              </div>
              <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="statistics">
                                         <table style="width:350px; float:left;" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="250" align="left">&nbsp;</td>
                            <td width="150" align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">Total Number of Products</td>
                            <td align="left"><?php echo $count = $db->countOfAll("stock_avail"); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">Tatal Sales Transactions</td>
                            <td align="left"><?php echo $count = $db->countOfAll("stock_sales"); ?></td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">Total number of Suppliers</td>
                            <td align="left"><?php echo $count = $db->countOfAll("supplier_details"); ?></td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">Total Number of Customers</td>
                            <td align="left"><?php echo $count = $db->countOfAll("customer_details"); ?></td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                    </table>

                  </div>
                  <div class="tab-pane" id="alerts">
                      <div class="alert alert-danger alert-dismissable">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>lower products quantity!</strong> Please Add more
                        </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
    </div>
</div>
<!-- FOOTER -->
<div id="footer">
   
</div>
<!-- end footer -->

<?php include("assets/js.php"); ?>
</body>
</html>