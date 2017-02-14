<?php include("master_head.php"); ?>

<div class="container-fluid">
    <div class="row">
           <div class="col-md-2">
            <div class="panel panel-default">
              <div class="panel-heading epanel">Report</div>
              <div class="panel-body">
              <nav class="navbar navbar-default sidebar" role="navigation">
                <div class="navbar-header">   
                </div>
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                           <li><a href="view_report.php">View Report</a></li>
                  </ul>
                </div>
            </nav>
              </div>
            </div>
        </div>
        <div class="col-md-10">
        <div class="panel panel-default">
              <div class="panel-heading">
              <ul class="nav nav-tabs" role="tablist">
                  <li class="active">
                    <a href="#report" role="tab" data-toggle="tab">Reports</a>
                  </li>
                </ul>
              </div>
              <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="report">
                        <table class="form" border="0" cellspacing="0" cellpadding="0">
                            <form action="" method="get">
                                <tr>
                                    <td><strong>Sales Report </strong></td>
                                    <td>From</td>
                                    <td><input  class="datepicker" data-date-format="mm/dd/yyyy" name="sales_from"></td>
                                    <td>To</td>
                                    <td><input class="datepicker" data-date-format="mm/dd/yyyy" name="sales_to">
                                    </td>
                                    <td><input  class="btn btn-info" name="show_sales_report" type="submit" value="Show" >
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

                            <form action="" method="get" name="purchase_report">
                                <tr>
                                    <td><strong>Profit/Loss Report </strong></td>
                                    <td>From</td>
                                    <td><input class="datepicker" data-date-format="mm/dd/yyyy" name="lp_start"></td>
                                    <td>To</td>
                                    <td><input class="datepicker" data-date-format="mm/dd/yyyy" name="lp_end"></td>
                                    <td><input class="btn btn-info" name="show_lp_report" type="submit" value="Show" >
                                    </td>
                                </tr>
                            </form>
                        </table>



                      <?php if(isset($_GET['show_sales_report'])){ ?>
                      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>
                          <tr>
                              <th>No</th>
                              <th>Transaction Id</th>
                              <th>Sales Date</th>
                              <th>Product</th>
                              <th>Total Cost</th>
                              <th>Bill Number</th>
                          </tr>
                          </thead>
                          <tfoot>
                          <tr>
                              <th>No</th>
                              <th>Transaction Id</th>
                              <th>Sales Date</th>
                              <th>Product</th>
                              <th>Total Cost</th>
                              <th>Bill Number</th>
                          </tr>
                          </tfoot>
                          <tbody>
                          <?php

                          $sales_from = $_GET['sales_from'];
                          $sales_to = $_GET['sales_to'];
                          $sql = "select * from stock_sales where sales_date between '$sales_from' and '$sales_to' order by id asc";
                          $result = mysqli_query($db->connection, $sql);
                          while ($row = mysqli_fetch_array($result)) {
                              ?>
                              <tr>
                                  <td> <?php echo $row['id']; ?></td>
                                  <td> <?php echo  $row['transactionid']; ?></td>
                                  <td> <?php echo $row['sales_date']; ?></td>
                                  <td> <?php echo $row['product']; ?></td>
                                  <td> <?php echo $row['grand_total']; ?></td>
                                  <td> <?php echo $row['billnumber']; ?></td>
                              </tr>
                          <?php  } ?>
                          </tbody>
                      </table>
                      <?php } ?>

                      <?php if(isset($_GET['show_lp_report'])){ ?>
                      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>
                          <tr>
                              <th>No</th>
                              <th>Supplier Namee</th>
                              <th>Date</th>
                              <th>Product</th>
                              <th>Customer</th>
                              <th>Amount</th>
                          </tr>
                          </thead>
                          <tfoot>
                          <tr>
                              <th>No</th>
                              <th>Supplier Namee</th>
                              <th>Date</th>
                              <th>Product</th>
                              <th>Customer</th>
                              <th>Amount</th>
                          </tr>
                          </tfoot>
                          <tbody>
                          <?php
                          $from = $_GET['lp_start'];
                          $to = $_GET['lp_end'];
                          $sql = "select * from stock_sales where sales_date between '$from' and '$to' order by id asc";
                          $result = mysqli_query($db->connection, $sql);
                          while ($row = mysqli_fetch_array($result)) {
                              ?>
                              <tr>
                                  <td> <?php echo $row['id']; ?></td>
                                  <td> <?php echo $row['transactionid']; ?></td>
                                  <td> <?php echo $row['sales_date']; ?></td>
                                  <td> <?php echo $row['product']; ?></td>
                                  <td> <?php echo $row['customer']; ?></td>
                                  <td> <?php echo $row['l_p']; ?></td>
                              </tr>

                          <?php  } ?>
                          </tbody>
                      </table>
                      <?php } ?>

                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>


</div>

<?php include("master_foot.php"); ?>