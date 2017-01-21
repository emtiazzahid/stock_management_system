<?php include("master_head.php"); ?>

<?php
if (isset($_GET['sid']))
    $id = $_GET['sid'];

$line = $db->queryUniqueObject("SELECT * FROM supplier_details WHERE id = $id");
?>

<?php
if (isset($_POST['update'])) {

    $id = mysqli_real_escape_string($db->connection, $_POST['id']);
    $name = trim(mysqli_real_escape_string($db->connection, $_POST['name']));
    $address = trim(mysqli_real_escape_string($db->connection, $_POST['address']));
    $contact1 = trim(mysqli_real_escape_string($db->connection, $_POST['contact1']));
    $contact2 = trim(mysqli_real_escape_string($db->connection, $_POST['contact2']));
    $balance = trim(mysqli_real_escape_string($db->connection, $_POST['balance']));

    $query = "UPDATE supplier_details SET supplier_name = '$name', supplier_address = '$address', supplier_contact1 = '$contact1',
      supplier_contact2 = '$contact2', balance = '$balance' WHERE id = $id";

    $db->execute($query);
    header('Location: view_supplier.php');
}

?>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading epanel">Supplier</div>
                <div class="panel-body">
                    <nav class="navbar navbar-default sidebar" role="navigation">
                        <div class="navbar-header">
                        </div>
                        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="add_supplier.php">Add Supplier</a></li>
                                <li><a href="view_supplier.php">View Suppliers</a></li>
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
                            <a href="#update_supplier" role="tab" data-toggle="tab">Update Supplier</a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="update_supplier">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo  $line->id; ?>">
                                <div class="col-md-8"><br>
                                    <table class="table">
                                        <tr>
                                            <td class="col-md-1">
                                                *Name:
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text"  class="form-control" name="name" id="" placeholder="" value="<?php echo  $line->supplier_name; ?>">
                                            </td>
                                            <td class="col-md-1">
                                                Contact 1:
                                            </td>
                                            <td class="col-md-2">
                                                <input type="text" class="form-control" name="contact1" id="" value="<?php echo  $line->supplier_contact1; ?>">
                                            </td>
                                            <td class="col-md-1">
                                                Contact 2:
                                            </td>
                                            <td class="col-md-2">
                                                <input type="text" class="form-control" name="contact2" id="" value="<?php echo  $line->supplier_contact2; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-2">
                                                Address:
                                            </td>
                                            <td class="col-md-3" colspan="3">
                                                <textarea  col="5" row="3" class="form-control" name="address" id=""><?php echo  $line->supplier_address; ?></textarea>
                                            </td>
                                            <td class="col-md-2">
                                                Balance:
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text" class="form-control" name="balance" id="" value="<?php echo  $line->balance; ?>">
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