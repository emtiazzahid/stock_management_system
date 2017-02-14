<?php include("master_head.php"); ?>






<div class="container-fluid">
    <div class="row">
           <div class="col-md-2">
            <div class="panel panel-default">
              <div class="panel-heading epanel">Stock Purchase</div>
              <div class="panel-body">
              <nav class="navbar navbar-default sidebar" role="navigation">
                <div class="navbar-header">   
                </div>
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li><a href="add_purchase.php">Add Purchase</a></li>
                         <li><a href="view_purchase.php">View Purchase </a></li>
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
                    <a href="#purchase" role="tab" data-toggle="tab">Purchase</a>
                  </li>
                </ul>
              </div>
              <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="purchase">
                   <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Stock Id</th>
                    <th>Stock Name</th>
                    <th>Date</th>
                    <th>Supplier</th>
                    <th>Amount</th>
                    <th>Edit /Delete</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Stock Id</th>
                    <th>Stock Name</th>
                    <th>Date</th>
                    <th>Supplier</th>
                    <th>Amount</th>
                    <th>Edit /Delete</th>
                </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>5482</td>
                        <td>Pen</td>
                        <td>1/8/2016</td>
                        <td>S.M Shorfuddin</td>
                        <td>54000</td>
                        <td>
                            <a href=""
                               class="table-actions-button ic-table-edit">
                            </a>
                            <a
                                href="#"
                                class="table-actions-button ic-table-delete"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>6489</td>
                        <td>Book</td>
                        <td>1/8/2016</td>
                        <td>Nadia Fardaus</td>
                        <td>35004</td>
                        <td>
                            <a href=""
                               class="table-actions-button ic-table-edit">
                            </a>
                            <a
                                href="#"
                                class="table-actions-button ic-table-delete"></a>
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