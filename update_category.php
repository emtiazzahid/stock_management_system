<?php include("master_head.php"); ?>

<?php
if (isset($_GET['sid']))
    $id = $_GET['sid'];

$line = $db->queryUniqueObject("SELECT * FROM category_details WHERE id = $id");
?>

<?php
if (isset($_POST['update'])) {
    $category_name = trim(mysqli_real_escape_string($db->connection, $_POST['category_name']));
    $category_description = trim(mysqli_real_escape_string($db->connection, $_POST['category_description']));

    $query = "UPDATE category_details SET category_name = '$category_name', category_description = '$category_description'
    WHERE id = $id";

    $db->execute($query);
    header('Location: view_category.php');
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
                                    <li class="active"><a href="view_category.php">view Stock Category</a></li>
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
                                <a href="#update_category" role="tab" data-toggle="tab">Update Category</a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="update_category">
                                <form action="" method="post">
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td class="col-md-2">
                                                    *Name:
                                                </td>
                                                <td class="col-md-6">
                                                    <input type="text" class="form-control" name="category_name" id="category_name" value="<?php echo $line->category_name; ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-2">
                                                    Description
                                                </td>
                                                <td class="col-md-6">
                                                    <input type="text"  class="form-control" name="category_description" id="category_description" value="<?php echo $line->category_description; ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <button type="submit" name="update" class="btn btn-info">Update</button>
                                                </td>
                                                <td>
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