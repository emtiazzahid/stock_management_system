<?php include("master_head.php"); ?>

<?php

if(isset($_POST['submit'])){
    $customer_name = $_POST['customer_name'];
    $customer_address = $_POST['customer_address'];
    $customer_contact1= $_POST['customer_contact1'];
    $customer_contact2	 = $_POST['customer_contact2'];

    $query  = "INSERT into customer_details (customer_name, customer_address, customer_contact1,customer_contact2)
              VALUES ('$customer_name','$customer_address', '$customer_contact1','$customer_contact2')";
    $db->execute($query);
    header('Location: view_customers.php');
}

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading epanel">Customer</div>
                <div class="panel-body">
                    <nav class="navbar navbar-default sidebar" role="navigation">
                        <div class="navbar-header">
                        </div>
                        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="add_customer.php">Add Customer</a></li>
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
                            <a href="#add_cutomers" role="tab" data-toggle="tab">Add Customers</a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="add_cutomers">
                            <form action="" method="post">
                                <div class="col-md-8">
                                    <table class="table">
                                        <tr>
                                            <td class="col-md-2">
                                                Customer Name:
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text"  class="form-control" name="customer_name" id="customer_name" placeholder="">
                                            </td>
                                            <td class="col-md-2">
                                                Customer Address:
                                            </td>
                                            <td class="col-md-3">
                                                <textarea class="form-control" name="customer_address" id="customer_address"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-2">
                                                Customer Contact 1:
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text"  class="form-control" name="customer_contact1" id="customer_contact1">
                                            </td>
                                            <td class="col-md-2">
                                                Customer Contact 2:
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="customer_contact2" id="customer_contact2">
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
        $('li').children('.customers-tab').addClass('active-tab');
    });
</script>
</body>
</html>