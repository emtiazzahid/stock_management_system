<?php include("master_head.php"); ?>

<?php
if (isset($_GET['sid']))
    $id = $_GET['sid'];

$line = $db->queryUniqueObject("SELECT * FROM customer_details WHERE id = $id");
?>

<?php
if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($db->connection, $_POST['id']);
    $customer_name = trim(mysqli_real_escape_string($db->connection, $_POST['customer_name']));
    $customer_address = trim(mysqli_real_escape_string($db->connection, $_POST['customer_address']));
    $customer_contact1	 = trim(mysqli_real_escape_string($db->connection, $_POST['customer_contact1']));
    $customer_contact2= trim(mysqli_real_escape_string($db->connection, $_POST['customer_contact2']));
    $balance = trim(mysqli_real_escape_string($db->connection, $_POST['balance']));

    $query = "UPDATE customer_details SET customer_name = '$customer_name', customer_address = '$customer_address', customer_contact1 = $customer_contact1,
      customer_contact2 = '$customer_contact2', balance = $balance  WHERE id = $id";

    $db->execute($query);
    header('Location: view_customers.php');
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
                                <li><a href="add_customer.php">Add Customer</a></li>
                                <li class="active"><a href="view_customers.php">View Customers</a></li>
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
                            <a href="#update_customer_details" role="tab" data-toggle="tab">Update Customer Info</a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="update_customer_details">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo  $line->id; ?>">
                                <div class="col-md-8"><br>
                                    <table class="table">
                                        <tr>
                                            <td class="col-md-2">
                                                Customer Name:
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text"  class="form-control" name="customer_name" id="customer_name" placeholder="" value="<?php echo $line->customer_name ?>">
                                            </td>
                                            <td class="col-md-2">
                                                Customer Address:
                                            </td>
                                            <td class="col-md-3">
                                                <textarea class="form-control" name="customer_address" id="customer_address"><?php echo $line->customer_address ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-2">
                                                Customer Contact 1:
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text"  class="form-control" name="customer_contact1" id="customer_contact1" value="<?php echo $line->customer_contact1	 ?>">
                                            </td>
                                            <td class="col-md-2">
                                                Customer Contact 2:
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="customer_contact2" id="customer_contact2" value="<?php echo $line->customer_contact2 ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-2">
                                                Balance:
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text"  class="form-control" name="balance" id="balance" value="<?php echo $line->balance ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <button type="submit" name="update" class="btn btn-info">Update</button>
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