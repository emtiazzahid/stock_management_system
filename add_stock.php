<?php include("master_head.php"); ?>

<?php
$query = "SELECT supplier_name FROM supplier_details ORDER by supplier_name ASC";
$suppliers = $db->query($query);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $contact1 = $_POST['contact1'];
    $contact2= $_POST['contact2'];
    $address= $_POST['address'];
    $balance= $_POST['balance'];

    $query  = "INSERT into stock_details (stock_id, stock_name, stock_quatity,supplier_contact2,balance)
              VALUES ('$name','$address',  '$contact1','$contact2','$balance')";
    $db->execute($query);
    header('Location: view_stock.php');
}

?>
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
                            <a href="#add_product" role="tab" data-toggle="tab">Stocks/Products</a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="add_product">
                            <form action="" method="post">
                                <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <td class="col-md-2">
                                            *Stock ID:
                                    </td>
                                    <td class="col-md-3">
                                        <input type="text"  class="form-control" name="" id="" placeholder="">
                                    </td>
                                    <td class="col-md-2">
                                        *Name:
                                    </td>
                                    <td class="col-md-3">
                                            <input type="text" class="form-control" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-2">
                                        *Cost:
                                    </td>
                                    <td class="col-md-3">
                                        <input type="text"  class="form-control" name="" id="">
                                    </td>
                                    <td class="col-md-2">
                                        *Sell:
                                    </td>
                                    <td class="col-md-3">
                                        <input type="text" class="form-control" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-2">
                                        Supplier:
                                    </td>
                                    <td class="col-md-3">
                                        <select name="supplier" id="supplier" class="form-control">
                                            <?php foreach($suppliers as $supplier){ ?>
                                            <option value="<?php echo $supplier['supplier_name'] ?>"><?php echo $supplier['supplier_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td class="col-md-2">
                                        Category:
                                    </td>
                                    <td class="col-md-3">
                                        <input type="text" class="form-control" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button type="submit" name="submit" class="btn btn-info">Add+</button>
                                    </td>
                                    <td colspan="2">
                                        <button type="clear" name="clear" class="btn btn-danger">Clear</button>
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
