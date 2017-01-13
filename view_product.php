<?php include("master_head.php"); ?>


<div class="container-fluid">
    <div class="row">
           <div class="col-md-2">
            <div class="panel panel-default">
              <div class="panel-heading epanel">Panel heading without title</div>
              <div class="panel-body">
              <nav class="navbar navbar-default sidebar" role="navigation">
                <div class="navbar-header">   
                </div>
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Add Stock/Product</a></li>
                        <li><a href="view_product.php">View Stock/Product</a></li>
                        <li><a href="#">Add Stock Category</a></li>
                        <li><a href="#">view Stock Category</a></li>
                        <li><a href="#">view Stock Available</a></li>
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
                    <a href="#products" role="tab" data-toggle="tab">Stock/Product</a>
                  </li>
                </ul>
              </div>
              <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="products">

                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Stock Name</th>
                    <th>Stock Id</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Payment</th>
                    <th>Amount</th>
                    <th>Edit /Delete</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Stock Name</th>
                    <th>Stock Id</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Payment</th>
                    <th>Amount</th>
                    <th>Edit /Delete</th>
                </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pen</td>
                        <td>4344</td>
                        <td>1/8/2016</td>
                        <td>Md. Emtiaz</td>
                        <td>4000</td>
                        <td>4000</td>
                        <td>
                            <a href="#" class="table-actions-button ic-table-edit"></a>
                            <a href="#" class="table-actions-button ic-table-delete"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Book</td>
                        <td>4564</td>
                        <td>1/8/2016</td>
                        <td>Md. Tutul</td>
                        <td>5465</td>
                        <td>5465</td>

                        <td>
                            <a href="#" class="table-actions-button ic-table-edit"></a>
                            <a href="#" class="table-actions-button ic-table-delete"></a>
                        </td>
                    </tr>

                    </tbody>
                </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>



<?php include("master_foot.php"); ?>