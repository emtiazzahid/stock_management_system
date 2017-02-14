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
                    <a href="#statistics" role="tab" data-toggle="tab">Products</a>
                  </li>
              </ul>

                  <?php
                  if(isset($_POST['btn_prd_search'])){
                      $search_for = $_POST['search_for'];
                      $search_key= $_POST['search_key'];
                      if($search_for == 'name'){
                          $sql = "SELECT * FROM stock_details WHERE stock_name LIKE '%$search_key%'";

                      }
                      else{
                          $price = floatval($search_key);
                          $sql = "SELECT * FROM stock_details WHERE selling_price = $search_key OR company_price = $search_key";
                      }

                      $result = mysqli_query($db->connection, $sql);
                  }
                  ?>
              </div>
              <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="statistics">
                      <table  id="example" class="table table-striped table-bordered dt-responsive nowrap"  cellpadding="0" cellspacing="0">
                       <thead>
                           <th>ID</th>
                           <th>stock_id</th>
                           <th>stock_name</th>
                           <th>stock_quantity</th>
                           <th>supplier_id</th>
                           <th>company_price</th>
                           <th>selling_price</th>
                           <th>category</th>
                           <th>date</th>
                           <th>expire_date</th>
                       </thead>
                          <tbody>
                          <?php  while ($row = mysqli_fetch_array($result)) { ?>
                              <tr>
                                  <td><?php echo $row['id']; ?></td>
                                  <td><?php echo $row['stock_id']; ?></td>
                                  <td><?php echo $row['stock_name']; ?></td>
                                  <td><?php echo $row['stock_quantity']; ?></td>
                                  <td><?php echo $row['supplier_id']; ?></td>
                                  <td><?php echo $row['company_price']; ?></td>
                                  <td><?php echo $row['selling_price']; ?></td>
                                  <td><?php echo $row['category']; ?></td>
                                  <td><?php echo $row['date']; ?></td>
                                  <td><?php echo $row['expire_date']; ?></td>
                              </tr>
                          <?php } ?>
                          </tbody>
                        <tr>
                            <td width="250" align="left">&nbsp;</td>
                            <td width="150" align="left">&nbsp;</td>
                        </tr>
                    </table>

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