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
                                                Transaction ID:
                                            </td>
                                            <td class="col-md-2">
                                                <input type="text" class="form-control" name="transaction_no" id="transaction_no" value="<?php echo 'ST-'.rand(1111,9999); ?>">
                                            </td>
                                            <td class="col-md-1">
                                                Date:
                                            </td>
                                            <td class="col-md-2">
                                                <input data-provide="datepicker" class="form-control datepicker" data-date-format="mm/dd/yyyy">
                                            </td>
                                            <td class="col-md-1">
                                                Bill No:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" class="form-control" name="bill_no" id="bill_no" value="<?php echo 'BILL-'.date("dmY").rand(111,999); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-1">
                                                Customer:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" name="customer" id="customer" class="form-control" >
                                                <div id="customerList" style="position: absolute;"></div>
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
                                                <th>Stock Id</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Available Stock</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                                </thead>
                                                <tbody id="stock_select_form_body">
                                                <tr>
                                                    <td>
                                                        <input type="text" name="Products"  id="Products" class="Products form-control">
                                                        <div id="productList" class="productList" style="position: absolute;"></div>
                                                    </td>
                                                    <td><input type="number" name="quantity" id="quantity"  class="form-control"></td>
                                                    <td><input type="text" name="stock_price" id="stock_price" class="form-control"></td>
                                                    <td><input type="text" name="available_stock" id="available_stock" class="form-control"></td>
                                                    <td><input type="text" name="total" id="total" class="form-control"></td>
                                                    <td><a class="btn btn-info" id="add_row">Add Another</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                        </tr>
                                        <tr>
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
                                                <input type="text"  class="form-control" name="payment" id="payment">
                                            </td>
                                            <td class="col-md-1">
                                                Balance:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" class="form-control" name="balance" id="balance">
                                            </td>
                                            <td class="col-md-1">
                                                Payable Amount:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" class="form-control" name="payable_amount" id="payable_amount">
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
<div id="hidden_fields"></div> <!-- for hidden inputs store which data came from ajax requested file-->
<div id="hidden_fields_stocks"></div> <!-- for hidden inputs store which data came from ajax requested file-->

<?php include("assets/js.php"); ?>



<!--make readonly fields-->
<script>
    $("#bill_no").prop("readonly", true);
    $("#transaction_no").prop("readonly", true);
</script>

<!--script for datepicker and tab hover-->
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

<!--selecting stock-->
<script>
    $(document).ready(function(){
        $(".Products").keyup(function(){
            var stock_id_string = $(this).val();
            if(stock_id_string == ''){
                $('.productList').fadeOut();
            }
            if (stock_id_string != '') {
                $.ajax({
                    url: "ajax_request_files/getAllStockId.php",
                    method: "POST",
                    data: {stock_id_string:stock_id_string},
                    success: function(data)
                    {
                        $('.productList').fadeIn();
                        $('.productList').html(data);
                    }
                });
            }
        });

        $('.productList').on('click', 'li', function(){
            var stock_id = $(this).text();
            $.ajax({
                url: "ajax_request_files/getStockDetails.php",
                method: "POST",
                data: {stock_id:stock_id},
                success: function(data)
                {
                    $('#hidden_fields_stocks').html(data);
                    var hidden_selling_price = $('#hidden_selling_price').val();
                    var hidden_stock_quantity = $('#hidden_stock_quantity').val();
                    $('#stock_price').val(hidden_selling_price);
                    $('#available_stock').val(hidden_stock_quantity);
                    $("#quantity").attr({
                        "max": hidden_stock_quantity,        // substitute your own
                        "min": 1                       // values (or variables) here
                    });

                }
            });



            $('.Products').val($(this).text());
            $('.productList').fadeOut();
        });
    });

</script>


<!--selecting customer-->
<script>
        $("#customer").keyup(function(){
            $('#address').val('');
            $('#contact').val('');
            var customer_name_string = $(this).val();
            if(customer_name_string == ''){
                $('#customerList').fadeOut();
            }
            if (customer_name_string != '') {
                $.ajax({
                    url: "ajax_request_files/getAllCustomer.php",
                    method: "POST",
                    data: {customer_name_string:customer_name_string},
                    success: function(data)
                    {
                        $('#customerList').fadeIn();
                        $('#customerList').html(data);
                    }
                });
            }
        });

        $('#customerList').on('click', 'li', function(){
            var customer_name = $(this).text();


            $.ajax({
                url: "ajax_request_files/getAllCustomerDetails.php",
                method: "POST",
                data: {customer_name:customer_name},
                success: function(data)
                {
                    $('#hidden_fields').html(data);
                    var customer_address = $('#hidden_address').val();
                    var customer_contact1 = $('#hidden_contact').val();
                    $('#address').val(customer_address);
                    $('#contact').val(customer_contact1);
                }
            });


            $('#customer').val(customer_name);
            $('#customerList').fadeOut();
        });
</script>
<script>

</script>

<!--script for calculate total cost for an product select-->
<script>
    $("#quantity").change(function() {
        var available_stock = $('#quantity').val();
        var stock_price = $('#stock_price').val();
        var total = available_stock * stock_price;
        $('#total').val(total);
    });
</script>


<!--add new row for new stock -->
<script>
    $(function () {
        var x = 0;
        $("#add_row").click(function () {
            x++;
            if(x<=4) {
                $("#stock_select_form_body").append("" +
                    '<tr><td><input type="text" name="Products" id="Products" class="Products form-control">' +
                    '<div id="productList" class="productList" style="position: absolute;"></div></td><td>' +
                    '<input type="number" name="quantity" id="quantity"  class="form-control"></td>' +
                    '<td><input type="text" name="stock_price" id="stock_price" class="form-control"></td>' +
                    '<td><input type="text" name="available_stock" id="available_stock" class="form-control"></td>' +
                    '<td><input type="text" name="total" id="total" class="form-control"></td>' +
                    '</tr>');

            }
        });
    })
</script>
</body>
</html>
