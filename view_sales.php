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
                 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
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