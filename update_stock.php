<?php include("master_head.php"); ?>

<?php
if (isset($_GET['sid']))
    $id = $_GET['sid'];

$line = $db->queryUniqueObject("SELECT * FROM stock_details WHERE id = $id");
?>

<?php
if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($db->connection, $_POST['id']);
    $stock_id = trim(mysqli_real_escape_string($db->connection, $_POST['stock_id']));
    $stock_name = trim(mysqli_real_escape_string($db->connection, $_POST['stock_name']));
    $stock_quatity = trim(mysqli_real_escape_string($db->connection, $_POST['stock_quatity']));
    $supplier_id = trim(mysqli_real_escape_string($db->connection, $_POST['supplier_id']));
    $company_price = trim(mysqli_real_escape_string($db->connection, $_POST['company_price']));
    $selling_price = trim(mysqli_real_escape_string($db->connection, $_POST['selling_price']));
    $category = trim(mysqli_real_escape_string($db->connection, $_POST['category']));
    $expire_date = trim(mysqli_real_escape_string($db->connection, $_POST['expire_date']));

    $query = "UPDATE stock_details SET stock_id = '$stock_id', stock_name = '$stock_name', stock_quatity = $stock_quatity,
      supplier_id = '$supplier_id', company_price = $company_price , selling_price = $selling_price,category = '$category',
      expire_date = '$expire_date'  WHERE id = $id";

    $db->execute($query);
    header('Location: view_product.php');
}

?>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading epanel">Stock/Products</div>
                <div class="panel-body">
                    <nav class="navbar navbar-default sidebar" role="navigation">
                        <div class="navbar-header">
                        </div>
                        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="add_stock.php">Add Stock/Product</a></li>
                                <li><a href="view_product.php">View Stock/Product</a></li>
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
                            <a href="#update_stock" role="tab" data-toggle="tab">Update Product Info</a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="update_stock">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo  $line->id; ?>">
                                <div class="col-md-8"><br>
                                    <table class="table">
                                        <tr>
                                            <td class="col-md-1">
                                                *Stock Id:
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text"  class="form-control" name="stock_id" id="" placeholder="" value="<?php echo  $line->stock_id; ?>">
                                            </td>
                                            <td class="col-md-1">
                                                Stock Name:
                                            </td>
                                            <td class="col-md-2">
                                                <input type="text" class="form-control" name="stock_name" id="" value="<?php echo  $line->stock_name; ?>">
                                            </td>
                                            <td class="col-md-1">
                                                Stock Quantity:
                                            </td>
                                            <td class="col-md-2">
                                                <input type="text" class="form-control" name="stock_quatity" id="" value="<?php echo  $line->stock_quatity; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-1">
                                                Supplier ID:
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="supplier_id" id="" value="<?php echo  $line->supplier_id; ?>">  </td>
                                            <td class="col-md-1">
                                                Company Price:
                                            </td>
                                            <td class="col-md-2">
                                                <input type="text" class="form-control" name="company_price" id="" value="<?php echo  $line->company_price; ?>">
                                            </td>
                                            <td class="col-md-1">
                                                Selling Price:
                                            </td>
                                            <td class="col-md-2">
                                                <input type="text" class="form-control" name="selling_price" id="" value="<?php echo  $line->selling_price; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-1">
                                               Category:
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="category" id="" value="<?php echo  $line->category; ?>">  </td>
                                            <td class="col-md-1">
                                                Expire Date:
                                            </td>
                                            <td class="col-md-2">
                                                <input type="text" class="form-control" name="expire_date" id="" value="<?php echo  $line->expire_date; ?>">
                                            </td>
                                            <td colspan="3">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <button type="submit" name="update" class="btn btn-info">Update</button>
                                            </td>
                                            <td colspan="2">
                                                <a href="view_product.php" class="btn btn-danger">Cancel</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("master_foot.php"); ?>