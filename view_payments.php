<?php include("master_head.php"); ?>

<div class="container-fluid">
    <div class="row">
           <div class="col-md-2">
            <div class="panel panel-default">
              <div class="panel-heading epanel">Payments</div>
              <div class="panel-body">
              <nav class="navbar navbar-default sidebar" role="navigation">
                <div class="navbar-header">   
                </div>
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                           <li><a href="view_payments.php">Payments</a></li>
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
                    <a href="#payment" role="tab" data-toggle="tab">Payment</a>
                  </li>
                </ul>
              </div>
              <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="payment">
                       <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Transaction Id</th>
                                    <th>Due Date</th>
                                    <th>subtotal</th>
                                    <th>Payment</th>
                                    <th>Balance</th>
                                    <th>Add Payment</th>

                                </tr>
                                </thead>
                                <tbody>
                              <tr>
                                        <td>Lorem ipsum</td>
                                        <td>Lorem ipsum</td>

                                        <td>Lorem ipsum</td>

                                        <td>Lorem ipsum</td>
                                        <td>Lorem ipsum</td>
                                        <td >Lorem ipsum</td>
                                        <td><a href="#">Pay now</a></td>
                                </tr>
                                <tr>
                                        <td>Lorem ipsum</td>
                                        <td>Lorem ipsum</td>

                                        <td>Lorem ipsum</td>

                                        <td>Lorem ipsum</td>
                                        <td>Lorem ipsum</td>
                                        <td >Lorem ipsum</td>
                                        <td><a href="#">Pay now</a></td>
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