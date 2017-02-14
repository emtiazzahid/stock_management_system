<?php include("master_head.php"); ?>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $contact1 = $_POST['contact1'];
    $contact2= $_POST['contact2'];
    $address= $_POST['address'];

    $query  = "INSERT into supplier_details (supplier_name, supplier_address, supplier_contact1,supplier_contact2)
              VALUES ('$name','$address',  '$contact1','$contact2')";
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
                                <li class="active"><a href="add_supplier.php">Add Supplier</a></li>
                                <li><a href="view_supplier.php">View Supplier</a></li>
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
                            <a href="#supplier" role="tab" data-toggle="tab">Supplier</a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="supplier">
                            <form action="" method="post">
                                <div class="col-md-8"><br>
                                    <table class="table">
                                        <tr>
                                            <td class="col-md-1">
                                                *Name:
                                            </td>
                                            <td class="col-md-3">
                                                <input type="text"  class="form-control" name="name" id="" placeholder="">
                                            </td>
                                            <td class="col-md-1">
                                                Contact 1:
                                            </td>
                                            <td class="col-md-2">
                                                <input type="text" class="form-control" name="contact1" id="">
                                            </td>
                                            <td class="col-md-1">
                                                Contact 2:
                                            </td>
                                            <td class="col-md-2">
                                                <input type="text" class="form-control" name="contact2" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-2">
                                                Address:
                                            </td>
                                            <td class="col-md-3" colspan="3">
                                                <textarea  col="5" row="3" class="form-control" name="address" id=""></textarea>
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
        $('li').children('.supplier-tab').addClass('active-tab');
    });
</script>
</body>

</html>