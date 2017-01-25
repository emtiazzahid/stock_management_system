<?php include("master_head.php"); ?>

<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $description = $_POST['description'];

    $query  = "INSERT into category_details (category_name, category_description)
              VALUES ('$name','$description')";
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
                                <li class="active"><a href="add_category.php">Add Stock Category</a></li>
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
                            <a href="#add_category" role="tab" data-toggle="tab">Category</a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="add_category">
                            <form action="" method="post">
                                <div class="col-md-8">
                                    <table class="table">
                                        <tr>
                                            <td class="col-md-2">
                                                *Name:
                                            </td>
                                            <td class="col-md-6">
                                                <input type="text" class="form-control" name="name" id="name">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-2">
                                                Description
                                            </td>
                                            <td class="col-md-6">
                                                <input type="text"  class="form-control" name="description" id="description">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button type="submit" name="submit" class="btn btn-info">Add+</button>
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