<?php include("master_head.php"); ?>

<div class="container-fluid">
    <div class="row">
           <div class="col-md-2">
            <div class="panel panel-default">
              <div class="panel-heading epanel">Sales</div>
              <div class="panel-body">
                  <nav class="navbar navbar-default sidebar" role="navigation">
                      <div class="navbar-header">
                      </div>
                      <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                                <li><a href="add_sales.php">Add Sales</a></li>
                                <li class="active"><a href="view_sales.php">View Sales</a></li>
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
                    <a href="#sales" role="tab" data-toggle="tab">Sales</a>
                  </li>
                </ul>
              </div>
              <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="sales">
                 <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                     <thead>
                        <tr>
                            <th>No</th>
                            <th>Transaction ID</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Customer</th>
                            <th>Paid Amount</th>
                            <th>Discount Amount</th>
                            <th>Grand Total</th>
                            <th>Due</th>
                            <th>Due Date</th>
                            <th>Payment Method</th>
                            <th>Description</th>
                            <th>Bill No</th>
                            <th>L/P</th>
                            <th>Edit /Delete</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Transaction ID</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Customer</th>
                            <th>Paid Amount</th>
                            <th>Discount Amount</th>
                            <th>Grand Total</th>
                            <th>Due</th>
                            <th>Due Date</th>
                            <th>Payment Method</th>
                            <th>Description</th>
                            <th>Bill No</th>
                            <th>L/P</th>
                            <th>Edit /Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                            $sql = "SELECT * FROM stock_sales ORDER BY sales_date desc";
                            $result = mysqli_query($db->connection, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                        <tr>
                            <td> <?php echo $row['id']; ?></td>
                            <td><?php echo $row['transactionid']; ?></td>
                            <td> <?php echo $row['sales_date']; ?></td>
                            <td> <?php echo $row['selling_price']; ?></td>
                            <td> <?php echo $row['product']; ?></td>
                            <td> <?php echo $row['quantity']; ?></td>
                            <td> <?php echo $row['amount']; ?></td>
                            <td> <?php echo $row['customer']; ?></td>
                            <td> <?php echo $row['payment']; ?></td>
                            <td> <?php echo $row['dis_amount']; ?></td>
                            <td> <?php echo $row['grand_total']; ?></td>
                            <td> <?php echo $row['due_amount']; ?></td>
                            <td> <?php echo $row['due']; ?></td>
                            <td> <?php echo $row['payment_method']; ?></td>
                            <td> <?php echo $row['description']; ?></td>
                            <td> <?php echo $row['billnumber']; ?></td>
                            <td> <?php echo $row['l_p']; ?></td>
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

                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>


<?php include("assets/js.php"); ?>
<script>
    $(document).ready(function () {
        $('li').children('.sales-tab').addClass('active-tab');
    });
</script>
</body>
</html>