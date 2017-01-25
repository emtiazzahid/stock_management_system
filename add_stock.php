<?php include("master_head.php"); ?>

<?php
$query = "SELECT supplier_name FROM supplier_details ORDER by supplier_name ASC";
$suppliers = $db->query($query);
$query = "SELECT category_name FROM category_details ORDER by category_name ASC";
$categories = $db->query($query);


if(isset($_POST['submit'])){
    $stock_id = 'SD'.$_POST['stock_id'];
    $stock_name = $_POST['stock_name'];
    $stock_quantity = $_POST['stock_quantity'];
    $supplier_id= $_POST['supplier_id'];
    $company_price = $_POST['company_price'];
    $selling_price = $_POST['selling_price'];
    $category = $_POST['category'];
    $expire_date = $_POST['expire_date'];

    $query  = "INSERT into stock_details (stock_id, stock_name, stock_quantity,supplier_id,company_price, selling_price,category, date, expire_date)
              VALUES ('$stock_id','$stock_name', '$stock_quantity','$supplier_id','$company_price', '$selling_price','$category',NOW(), '$expire_date')";
    $db->execute($query);
    header('Location: view_product.php');
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
                                <li class="active"><a href="add_stock.php">Add Stock/Product</a></li>
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
                                        <input type="text"  class="form-control" name="stock_id" id="stock_id" placeholder="">
                                    </td>
                                    <td class="col-md-2">
                                        *Name:
                                    </td>
                                    <td class="col-md-3">
                                            <input type="text" class="form-control" name="stock_name" id="stock_name">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-2">
                                        *Cost:
                                    </td>
                                    <td class="col-md-3">
                                        <input type="text"  class="form-control" name="company_price" id="company_price">
                                    </td>
                                    <td class="col-md-2">
                                        *Sell:
                                    </td>
                                    <td class="col-md-3">
                                        <input type="text" class="form-control" name="selling_price" id="selling_price">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-2">
                                        Quantity:
                                    </td>
                                    <td class="col-md-3">
                                        <input type="text"  class="form-control" name="stock_quantity" id="stock_quantity">
                                    </td>
                                    <td class="col-md-2">
                                        Supplier:
                                    </td>
                                    <td class="col-md-3">
                                        <select name="supplier_id" id="supplier_id" class="form-control">
                                            <?php foreach($suppliers as $supplier){ ?>
                                                <option value="<?php echo $supplier['supplier_name'] ?>"><?php echo $supplier['supplier_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-2">
                                        Category:
                                    </td>
                                    <td class="col-md-3">
                                        <select name="category" id="category" class="form-control">
                                            <?php foreach($categories as $category){ ?>
                                                <option value="<?php echo $category['category_name'] ?>"><?php echo $category['category_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td class="col-md-2">
                                        Expire Date:
                                    </td>
                                    <td class="col-md-3">
                                        <input type="date" name="expire_date" id="expire_date" class="form-control">
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

<?php include("assets/js.php"); ?>
<script>
    $(document).ready(function () {
        $('li').children('.stock-tab').addClass('active-tab');
    });
</script>
</body>
</html>
