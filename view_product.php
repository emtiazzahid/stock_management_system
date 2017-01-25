<?php include("master_head.php"); ?>
<div class="container-fluid">
    <div class="row">
           <div class="col-md-2">
            <div class="panel panel-default">
              <div class="panel-heading epanel">Products/Stocks</div>
              <div class="panel-body">
              <nav class="navbar navbar-default sidebar" role="navigation">
                <div class="navbar-header">   
                </div>
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                      <li><a href="add_stock.php">Add Stock/Product</a></li>
                      <li class="active"><a href="view_product.php">View Stock/Product</a></li>
                      <li><a href="add_category.php">Add Stock Category</a></li>
                      <li><a href="view_category.php">view Stock Category</a></li>
                      <li><a href="view_stock_availability.php">view Stock Available</a></li>
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
                    <a href="#products" role="tab" data-toggle="tab">Stock/Product</a>
                  </li>
                </ul>
              </div>
              <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="products">

                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>stock id</th>
                    <th>stock name</th>
                    <th>stock quatity</th>
                    <th>supplier id</th>
                    <th>company price</th>
                    <th>selling price</th>
                    <th>category</th>
                    <th>date</th>
                    <th>expire date</th>
                    <th>Edit /Delete</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>stock id</th>
                    <th>stock name</th>
                    <th>stock quatity</th>
                    <th>supplier id</th>
                    <th>company price</th>
                    <th>selling price</th>
                    <th>category</th>
                    <th>date</th>
                    <th>expire date</th>
                    <th>Edit /Delete</th>
                </tr>
                </tfoot>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM stock_details";
                    $result = mysqli_query($db->connection, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
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
                        <td>
                            <a href="update_stock.php?sid=<?php echo $row['id']; ?>&table=stock_details"
                               class="table-actions-button ic-table-edit">
                            </a>
                            <a onclick="return confirmSubmit()"
                               href="delete.php?id=<?php echo $row['id']; ?>&table=stock_details"
                               class="table-actions-button ic-table-delete">
                            </a>
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
        $('li').children('.stock-tab').addClass('active-tab');
    });
</script>
</body>

</html>