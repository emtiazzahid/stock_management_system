<?php include("master_head.php");
?>

<?php
$query = "SELECT supplier_name FROM supplier_details ORDER by supplier_name ASC";
$suppliers = $db->query($query);
$query = "SELECT category_name FROM category_details ORDER by category_name ASC";
$categories = $db->query($query);



if(isset($_POST['submit'])){
    $customer = $_POST['customer'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $query_for_customer = "SELECT customer_name FROM customer_details WHERE customer_name = '$customer'";
    $exist_customer = $db->query($query_for_customer);
    foreach($exist_customer as $ec){$data = $ec;}
    if($data == null){
        $query  = "INSERT into customer_details (customer_name, customer_address, customer_contact1)
              VALUES ('$customer','$address', '$contact')";
        $db->execute($query);
    }


    $transaction_no = $_POST['transaction_no'];
    $sales_date = $_POST['sales_date'];
    $bill_no = $_POST['bill_no'];
    $products = '';
    $quantity = '';
    $price = '';
    $available_stock = '';
    $total = '';

    if($_POST['Products']!=''){
        $products = $_POST['Products'];
        $quantity = $_POST['quantity'];
        $price = $_POST['stock_price'];
        $available_stock = $_POST['available_stock'];
        $total = $_POST['total'];
        $db->update_prd_quantity($_POST['Products'] , $_POST['quantity']);

        if($_POST['Products2']!=''){
            $products .= ','.$_POST['Products2'];
            $quantity .= ','.$_POST['quantity2'];
            $price .= ','.$_POST['stock_price2'];
            $available_stock .= ','.$_POST['total2'];
            $total .= ','.$_POST['available_stock2'];
            $db->update_prd_quantity($_POST['Products2'] , $_POST['quantity2']);

            if($_POST['Products3']!=''){
                $products .= ','.$_POST['Products3'];
                $quantity .= ','.$_POST['quantity3'];
                $price .= ','.$_POST['stock_price3'];
                $available_stock .= ','.$_POST['available_stock3'];
                $available_stock .= ','.$_POST['total3'];
                $db->update_prd_quantity($_POST['Products3'] , $_POST['quantity3']);

                if($_POST['Products4']!=''){
                    $products .= ','.$_POST['Products4'];
                    $quantity .= ','.$_POST['quantity4'];
                    $price .= ','.$_POST['stock_price4'];
                    $available_stock .= ','.$_POST['available_stock4'];
                    $available_stock .= ','.$_POST['total4'];
                    $db->update_prd_quantity($_POST['Products4'] , $_POST['quantity4']);

                    if($_POST['Products5']!=''){
                        $products .= ','.$_POST['Products5'];
                        $quantity .= ','.$_POST['quantity5'];
                        $price .= ','.$_POST['stock_price5'];
                        $available_stock .= ','.$_POST['available_stock5'];
                        $available_stock .= ','.$_POST['total5'];
                        $db->update_prd_quantity($_POST['Products5'] , $_POST['quantity5']);
                    }
                }
            }
        }

    }

    $discount_amount = $_POST['discount_amount'];
    $grand_total = $_POST['grand_total'];
    $payment = $_POST['payment'];
    $due = $_POST['due'];
    $payment_method = $_POST['payment_method'];
    $due_date= $_POST['due_date'];
    $description= $_POST['description'];
    $loss_or_profit = $_POST['loss_or_profit'];


    $query  = "INSERT into stock_sales (
transactionid,sales_date,billnumber,customer,address,contact,product,quantity,selling_price,dis_amount,grand_total,payment,
due_amount,due,payment_method,description,amount,l_p
)
VALUES (
'$transaction_no','$sales_date','$bill_no','$customer','$address','$contact','$products','$quantity','$price','$discount_amount','$grand_total',
'$payment','$due','$due_date','$payment_method','$description','$total','$loss_or_profit'
)";
    $db->execute($query);

//    header('Location: view_sales.php');
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
                                                <input data-provide="datepicker" class="form-control datepicker" name="sales_date" data-date-format="mm/dd/yyyy">
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
                                                    <td>
                                                        <input type="text" name="stock_price" id="stock_price" class="form-control">
                                                        <input type="hidden" name="company_price" id="company_price" class="form-control">
                                                    </td>
                                                    <td><input type="text" name="available_stock" id="available_stock" class="form-control"></td>
                                                    <td>
                                                        <input type="text" name="total" id="total" class="form-control">
                                                        <input type="hidden" name="company_cost_total" id="company_cost_total">
                                                    </td>
                                                    <td><a class="btn btn-info" id="add_row_2">+</a></td>
                                                </tr>
                                                <tr id="product_row_2" >
                                                    <td>
                                                        <input type="text" name="Products2"  id="Products2" class="Products2 form-control">
                                                        <div id="productList2" class="productList2" style="position: absolute;"></div>
                                                    </td>
                                                    <td><input type="number" name="quantity2" id="quantity2"  class="form-control"></td>
                                                    <td>
                                                        <input type="text" name="stock_price2" id="stock_price2" class="form-control">
                                                        <input type="hidden" name="company_price2" id="company_price2" class="form-control">
                                                    </td>
                                                    <td><input type="text" name="available_stock2" id="available_stock2" class="form-control"></td>
                                                    <td>
                                                        <input type="text" name="total2" id="total2" class="form-control">
                                                        <input type="hidden" name="company_cost_total2" id="company_cost_total2">
                                                    </td>
                                                    <td><a class="btn btn-info" id="remove_row_2">-</a><a class="btn btn-info" id="add_row_3">+</a></td>
                                                </tr>
                                                <tr id="product_row_3">
                                                    <td>
                                                        <input type="text" name="Products3"  id="Products3" class="Products3 form-control">
                                                        <div id="productList3" class="productList3" style="position: absolute;"></div>
                                                    </td>
                                                    <td><input type="number" name="quantity3" id="quantity3"  class="form-control"></td>
                                                    <td>
                                                        <input type="text" name="stock_price3" id="stock_price3" class="form-control">
                                                        <input type="hidden" name="company_price3" id="company_price3" class="form-control">
                                                    </td>
                                                    <td><input type="text" name="available_stock3" id="available_stock3" class="form-control"></td>
                                                    <td>
                                                        <input type="text" name="total3" id="total3" class="form-control">
                                                        <input type="hidden" name="company_cost_total3" id="company_cost_total3">
                                                    </td>
                                                    <td><a class="btn btn-info" id="remove_row_3">-</a><a class="btn btn-info" id="add_row_4">+</a></td>
                                                </tr>
                                                <tr id="product_row_4">
                                                    <td>
                                                        <input type="text" name="Products4"  id="Products4" class="Products4 form-control">
                                                        <div id="productList4" class="productList4" style="position: absolute;"></div>
                                                    </td>
                                                    <td><input type="number" name="quantity4" id="quantity4"  class="form-control"></td>
                                                    <td>
                                                        <input type="text" name="stock_price4" id="stock_price4" class="form-control">
                                                        <input type="hidden" name="company_price4" id="company_price4" class="form-control">
                                                    </td>
                                                    <td><input type="text" name="available_stock4" id="available_stock4" class="form-control"></td>
                                                    <td>
                                                        <input type="text" name="total4" id="total4" class="form-control">
                                                        <input type="hidden" name="company_cost_total4" id="company_cost_total4">
                                                    </td>
                                                    <td><a class="btn btn-info" id="remove_row_4">-</a><a class="btn btn-info" id="add_row_5">+</a></td>
                                                </tr>
                                                <tr id="product_row_5">
                                                    <td>
                                                        <input type="text" name="Products5"  id="Products5" class="Products5 form-control">
                                                        <div id="productList5" class="productList5" style="position: absolute;"></div>
                                                    </td>
                                                    <td><input type="number" name="quantity5" id="quantity5"  class="form-control"></td>
                                                    <td>
                                                        <input type="text" name="stock_price5" id="stock_price5" class="form-control">
                                                        <input type="hidden" name="company_price5" id="company_price5" class="form-control">
                                                    </td>
                                                    <td><input type="text" name="available_stock5" id="available_stock5" class="form-control"></td>
                                                    <td>
                                                        <input type="text" name="total5" id="total5" class="form-control">
                                                        <input type="hidden" name="company_cost_total5" id="company_cost_total5">
                                                    </td>
                                                    <td><a class="btn btn-info" id="remove_row_5">-</a></td>
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
                                                <input type="hidden" name="company_total_product_cost" id="company_total_product_cost"> <!--hidden filed to carry the loss or profit value-->
                                                <input type="hidden" name="loss_or_profit" id="loss_or_profit"> <!--hidden filed to carry the loss or profit value-->

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
                                                Due:
                                            </td>
                                            <td class="col-md-1">
                                                <input type="text" class="form-control" name="due" id="due">
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
                                                <input data-provide="datepicker" class="form-control datepicker" name="due_date" id="due_date" data-date-format="mm/dd/yyyy">
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


<!-- for hidden inputs store which data came from ajax requested file-->
<!-- for hidden inputs store which data came from ajax requested file-->
<div id="hidden_fields"></div>
<div id="hidden_fields_stocks"></div>

<div id="hidden_fields2"></div>
<div id="hidden_fields_stocks2"></div>

<div id="hidden_fields3"></div>
<div id="hidden_fields_stocks3"></div>

<div id="hidden_fields4"></div>
<div id="hidden_fields_stocks4"></div>

<div id="hidden_fields5"></div>
<div id="hidden_fields_stocks5"></div>



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
                    var hidden_company_price = $('#hidden_company_price').val();
                    var hidden_selling_price = $('#hidden_selling_price').val();
                    var hidden_stock_quantity = $('#hidden_stock_quantity').val();
                    $('#company_price').val(hidden_company_price);
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
<script>
    $(document).ready(function(){
        $(".Products2").keyup(function(){
            var stock_id_string2 = $(this).val();
            if(stock_id_string2 == ''){
                $('.productList2').fadeOut();
            }
            if (stock_id_string2 != '') {
                $.ajax({
                    url: "ajax_request_files/getAllStockId2.php",
                    method: "POST",
                    data: {stock_id_string2:stock_id_string2},
                    success: function(data)
                    {
                        $('.productList2').fadeIn();
                        $('.productList2').html(data);
                    }
                });
            }
        });

        $('.productList2').on('click', 'li', function(){
            var stock_id2 = $(this).text();
            $.ajax({
                url: "ajax_request_files/getStockDetails2.php",
                method: "POST",
                data: {stock_id2:stock_id2},
                success: function(data)
                {
                    $('#hidden_fields_stocks2').html(data);
                    var hidden_company_price2 = $('#hidden_company_price2').val();
                    var hidden_selling_price2 = $('#hidden_selling_price2').val();
                    var hidden_stock_quantity2 = $('#hidden_stock_quantity2').val();
                    $('#company_price2').val(hidden_company_price2);
                    $('#stock_price2').val(hidden_selling_price2);
                    $('#available_stock2').val(hidden_stock_quantity2);
                    $("#quantity2").attr({
                        "max": hidden_stock_quantity2,        // substitute your own
                        "min": 1                       // values (or variables) here
                    });

                }
            });



            $('.Products2').val($(this).text());
            $('.productList2').fadeOut();
        });
    });

</script>
<script>
    $(document).ready(function(){
        $(".Products3").keyup(function(){
            var stock_id_string3 = $(this).val();
            if(stock_id_string3 == ''){
                $('.productList3').fadeOut();
            }
            if (stock_id_string3 != '') {
                $.ajax({
                    url: "ajax_request_files/getAllStockId3.php",
                    method: "POST",
                    data: {stock_id_string3:stock_id_string3},
                    success: function(data)
                    {
                        $('.productList3').fadeIn();
                        $('.productList3').html(data);
                    }
                });
            }
        });

        $('.productList3').on('click', 'li', function(){
            var stock_id3 = $(this).text();
            $.ajax({
                url: "ajax_request_files/getStockDetails3.php",
                method: "POST",
                data: {stock_id3:stock_id3},
                success: function(data)
                {
                    $('#hidden_fields_stocks3').html(data);
                    var hidden_company_price3 = $('#hidden_company_price3').val();
                    var hidden_selling_price3 = $('#hidden_selling_price3').val();
                    var hidden_stock_quantity3 = $('#hidden_stock_quantity3').val();
                    $('#company_price3').val(hidden_company_price3);
                    $('#stock_price3').val(hidden_selling_price3);
                    $('#available_stock3').val(hidden_stock_quantity3);
                    $("#quantity3").attr({
                        "max": hidden_stock_quantity3,        // substitute your own
                        "min": 1                       // values (or variables) here
                    });

                }
            });



            $('.Products3').val($(this).text());
            $('.productList3').fadeOut();
        });
    });

</script>
<script>
    $(document).ready(function(){
        $(".Products4").keyup(function(){
            var stock_id_string4 = $(this).val();
            if(stock_id_string4 == ''){
                $('.productList4').fadeOut();
            }
            if (stock_id_string4 != '') {
                $.ajax({
                    url: "ajax_request_files/getAllStockId4.php",
                    method: "POST",
                    data: {stock_id_string4:stock_id_string4},
                    success: function(data)
                    {
                        $('.productList4').fadeIn();
                        $('.productList4').html(data);
                    }
                });
            }
        });

        $('.productList4').on('click', 'li', function(){
            var stock_id4 = $(this).text();
            $.ajax({
                url: "ajax_request_files/getStockDetails4.php",
                method: "POST",
                data: {stock_id4:stock_id4},
                success: function(data)
                {
                    $('#hidden_fields_stocks4').html(data);
                    var hidden_company_price4 = $('#hidden_company_price4').val();
                    var hidden_selling_price4 = $('#hidden_selling_price4').val();
                    var hidden_stock_quantity4 = $('#hidden_stock_quantity4').val();
                    $('#company_price4').val(hidden_company_price4);
                    $('#stock_price4').val(hidden_selling_price4);
                    $('#available_stock4').val(hidden_stock_quantity4);
                    $("#quantity4").attr({
                        "max": hidden_stock_quantity4,        // substitute your own
                        "min": 1                       // values (or variables) here
                    });

                }
            });



            $('.Products4').val($(this).text());
            $('.productList4').fadeOut();
        });
    });

</script>
<script>
    $(document).ready(function(){
        $(".Products5").keyup(function(){
            var stock_id_string5 = $(this).val();
            if(stock_id_string5 == ''){
                $('.productList5').fadeOut();
            }
            if (stock_id_string5 != '') {
                $.ajax({
                    url: "ajax_request_files/getAllStockId5.php",
                    method: "POST",
                    data: {stock_id_string5:stock_id_string5},
                    success: function(data)
                    {
                        $('.productList5').fadeIn();
                        $('.productList5').html(data);
                    }
                });
            }
        });

        $('.productList5').on('click', 'li', function(){
            var stock_id5 = $(this).text();
            $.ajax({
                url: "ajax_request_files/getStockDetails5.php",
                method: "POST",
                data: {stock_id5:stock_id5},
                success: function(data)
                {
                    $('#hidden_fields_stocks5').html(data);
                    var hidden_company_price5 = $('#hidden_company_price5').val();
                    var hidden_selling_price5 = $('#hidden_selling_price5').val();
                    var hidden_stock_quantity5 = $('#hidden_stock_quantity5').val();
                    $('#company_price5').val(hidden_company_price5);
                    $('#stock_price5').val(hidden_selling_price5);
                    $('#available_stock5').val(hidden_stock_quantity5);
                    $("#quantity5").attr({
                        "max": hidden_stock_quantity5,        // substitute your own
                        "min": 1                       // values (or variables) here
                    });

                }
            });



            $('.Products5').val($(this).text());
            $('.productList5').fadeOut();
        });
    });

</script>
<!--assign grand total cost and loss or profit-->
<script>
    $("#grand_total").click(function(){
        var discount_amount =  $('#discount_amount').val();

        var company_cost_total = $("#company_cost_total").val();
        var company_cost_total2 = $("#company_cost_total2").val();
        var company_cost_total3 = $("#company_cost_total3").val();
        var company_cost_total4 = $("#company_cost_total4").val();
        var company_cost_total5 = $("#company_cost_total5").val();

        var company_total_product_cost = (parseInt(company_cost_total) + parseInt(company_cost_total2)+ parseInt(company_cost_total3));
        $('#company_total_product_cost').val(company_total_product_cost);




        var total = $("#total").val();
        var total2 = $("#total2").val();
        var total3 = $("#total3").val();
        var total4 =  $("#total4").val();
        var total5 = $("#total5").val();
        var grand_total =  (parseInt(total) + parseInt(total2) +  parseInt(total3) +  parseInt(total4) +  parseInt(total5)) - parseInt(discount_amount);
        $('#grand_total').val(grand_total);

        $('#loss_or_profit').val(grand_total - company_total_product_cost);
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
    var zero = 0;
    $('#company_cost_total').val(zero);
    $('#company_cost_total2').val(zero);
    $('#company_cost_total3').val(zero);
    $('#company_cost_total4').val(zero);
    $('#company_cost_total5').val(zero);

    $('#total').val(zero);
    $('#total2').val(zero);
    $('#total3').val(zero);
    $('#total4').val(zero);
    $('#total5').val(zero);
    $('#discount_amount').val(zero);
</script>
<script>
    $("#quantity").change(function() {
        var available_stock = $('#quantity').val();
        var company_price = $('#company_price').val();
        var stock_price = $('#stock_price').val();
        var total = available_stock * stock_price;
        var company_cost_total = available_stock * company_price;
        $('#total').val(total);
        $('#company_cost_total').val(company_cost_total);

    });
</script>
<script>
    $("#quantity2").change(function() {
        var available_stock2 = $('#quantity2').val();
        var company_price2 = $('#company_price2').val();
        var stock_price2 = $('#stock_price2').val();
        var total2 = available_stock2 * stock_price2;
        var company_cost_total2 = available_stock2 * company_price2;
        $('#total2').val(total2);
        $('#company_cost_total2').val(company_cost_total2);
    });
</script>
<script>
    $("#quantity3").change(function() {
        var available_stock3 = $('#quantity3').val();
        var company_price3 = $('#company_price3').val();
        var stock_price3 = $('#stock_price3').val();
        var total3 = available_stock3 * stock_price3;
        var company_cost_total3 = available_stock3 * company_price3;
        $('#total3').val(total3);
        $('#company_cost_total3').val(company_cost_total3);
    });
</script>
<script>
    $("#quantity4").change(function() {
        var available_stock4 = $('#quantity4').val();
        var company_price4 = $('#company_price4').val();
        var stock_price4 = $('#stock_price4').val();
        var total4 = available_stock4 * stock_price4;
        var company_cost_total4 = available_stock4 * company_price4;
        $('#total4').val(total4);
        $('#company_cost_total4').val(company_cost_total4);
    });
</script>
<script>
    $("#quantity5").change(function() {
        var available_stock5 = $('#quantity5').val();
        var company_price5 = $('#company_price5').val();
        var stock_price5 = $('#stock_price5').val();
        var total5 = available_stock5 * stock_price5;
        var company_cost_total5 = available_stock5 * company_price5;
        $('#total5').val(total5);
        $('#company_cost_total5').val(company_cost_total5);
    });
</script>

<!--payment due -->
<script>
    $("#payment").val('0');
    $("#payment").keyup(function(){
        var payment_amount =  $("#payment").val();
        var grand_total_all  = $('#grand_total').val();
        var due = parseInt(grand_total_all) - parseInt(payment_amount);
        if(due<=0){
            $("#due").val('0');
        }
        else
            $("#due").val(due);

    });

</script>
<!--add or remove new row for new stock -->
<script>
    $(function () {
        $('#product_row_2').addClass('hide_div');
        $('#product_row_3').addClass('hide_div');
        $('#product_row_4').addClass('hide_div');
        $('#product_row_5').addClass('hide_div');

        $("#add_row_2").click(function () {
            $('#product_row_2').removeClass('hide_div');
        });
        $("#add_row_3").click(function () {
            $('#product_row_3').removeClass('hide_div');
        });
        $("#add_row_4").click(function () {
            $('#product_row_4').removeClass('hide_div');
        });
        $("#add_row_5").click(function () {
            $('#product_row_5').removeClass('hide_div');
        });

        $("#remove_row_2").click(function () {
            $('#product_row_2').addClass('hide_div');
        });
        $("#remove_row_3").click(function () {
            $('#product_row_3').addClass('hide_div');
        });
        $("#remove_row_4").click(function () {
            $('#product_row_4').addClass('hide_div');
        });
        $("#remove_row_5").click(function () {
            $('#product_row_5').addClass('hide_div');
        });
    })
</script>
</body>
</html>
