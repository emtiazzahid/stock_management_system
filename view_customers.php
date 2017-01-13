<?php include("master_head.php"); ?>


<div class="container-fluid">
    <div class="row">
           <div class="col-md-2">
            <div class="panel panel-default">
              <div class="panel-heading epanel">Customer Management</div>
              <div class="panel-body">
              <nav class="navbar navbar-default sidebar" role="navigation">
                <div class="navbar-header">   
                </div>
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li><a href="add_customer.php">Add Customer</a></li>
                        <li><a href="view_customers.php">View Customers</a></li>
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
                    <a href="#sales" role="tab" data-toggle="tab">Customers</a>
                  </li>
                </ul>
              </div>
              <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="sales">
               <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
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

                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>


<?php include("master_foot.php"); ?>