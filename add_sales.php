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
                                <li class="active"><a href="add_sales.php">Add Sales</a></li>
                                <li><a href="view_sales.php">View Sales</a></li>
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
                            <a href="#add_sales" role="tab" data-toggle="tab">Add Sales</a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="add_sales">
                            <form action="" method="post">
                                <div class="col-md-10">
                                    <table class="table">
                                        <tr>
                                            <td class="col-md-1">
                                                Stock ID:
                                            </td>
                                            <td class="col-md-2">
                                                <input type="text" name="Products" id="Products" class="form-control">
                                                <div id="productList"></div>
                                            </td>
                                            <td class="col-md-1">
                                                Date:
                                            </td>
                                            <td class="col-md-2">
<!--                                                <input class="form-control datepicker" data-date-format="mm/dd/yyyy">-->
                                                <div class="input-group date" data-provide="datepicker">
                                                    <input type="text" class="form-control">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-th"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-md-1">
                                                Bill No:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" class="form-control" name="bill_no" id="bill_no">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-1">
                                                Customer:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text"  class="form-control" name="customer" id="customer">
                                            </td>
                                            <td class="col-md-1">
                                                Address:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" class="form-control" name="address" id="address">
                                            </td>
                                            <td class="col-md-1">
                                                Contact:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" class="form-control" name="contact" id="contact">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                            <table>
                                                <thead>
                                                <th>Item</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Available Stock</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input type="text" name="item" class="form-control"></td>
                                                    <td><input type="text" name="item" class="form-control"></td>
                                                    <td><input type="text" name="item" class="form-control"></td>
                                                    <td><input type="text" name="item" class="form-control"></td>
                                                    <td><input type="text" name="item" class="form-control"></td>
                                                    <td><button class="btn btn-info">Add Another</button></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-1">
                                                Discount:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text"  class="form-control" name="discount" id="discount">
                                            </td>
                                            <td class="col-md-1">
                                                Discount Amount:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" class="form-control" name="discount_amount" id="discount_amount">
                                            </td>
                                            <td class="col-md-1">
                                                Grand Total:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" class="form-control" name="grand_total" id="grand_total">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="col-md-1">
                                                Payment:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text"  class="form-control" name="customer" id="customer">
                                            </td>
                                            <td class="col-md-1">
                                                Balance:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" class="form-control" name="address" id="address">
                                            </td>
                                            <td class="col-md-1">
                                                Payable Amount:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" class="form-control" name="contact" id="contact">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-1">
                                                Payment Method:
                                            </td>
                                            <td class="col-md-1">
                                                <select name="payment_method" id="payment_method" class="form-control">
                                                    <option value="cash">Cash</option>
                                                    <option value="Check">Check</option>
                                                </select>
                                            </td>
                                            <td class="col-md-1">
                                                Due Date:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" class="form-control" name="due_date" id="due_date">
                                            </td>
                                            <td class="col-md-1">
                                                Description:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" class="form-control" name="description" id="description">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <button type="submit" name="submit" class="btn btn-info">Add+</button>
                                            </td>
                                            <td colspan="3">
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
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
            startDate: '-3d'
        });
    });

    $(document).ready(function () {
        $('li').children('.sales-tab').addClass('active-tab');
    });
</script>
<script>
    $(document).ready(function(){
        $("#Products").keyup(function(){
            var query = $(this).val();
            if(query == ''){
                $('#productList').fadeOut();
            }
            if (query != '') {
                $.ajax({
                    url: "ajax_request_files/getAllStockId.php",
                    method: "POST",
                    data: {query:query},
                    success: function(data)
                    {
                        $('#productList').fadeIn();
                        $('#productList').html(data);
                    }
                });
            }
        });
        $(document).on('click', 'li', function(){
            $('#Products').val($(this).text());
            $('#productList').fadeOut();
        });
    });

</script>
</body>
</html>
