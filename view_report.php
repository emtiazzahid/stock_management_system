<?php include("master_head.php"); ?>

<div class="container-fluid">
    <div class="row">
           <div class="col-md-2">
            <div class="panel panel-default">
              <div class="panel-heading epanel">Report</div>
              <div class="panel-body">
              <nav class="navbar navbar-default sidebar" role="navigation">
                <div class="navbar-header">   
                </div>
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                           <li><a href="view_report.php">View Report</a></li>
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
                    <a href="#report" role="tab" data-toggle="tab">Reports</a>
                  </li>
                </ul>
              </div>
              <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="report">
                        <table class="form" border="0" cellspacing="0" cellpadding="0">
                            <form action="" method="post" name="form1" id="form1" name=""
                                  id="" target="myNewWinsr">

                            
                                <tr>
                                    <td><strong>Sales Report </strong></td>
                                    <td>From</td>
                                    <td><input class="datepicker" data-date-format="mm/dd/yyyy"></td>
                                    <td>To</td>
                                    <td><input class="datepicker" data-date-format="mm/dd/yyyy">
                                    </td>
                                    <td><input  class="btn btn-info" name="submit" type="button" value="Show" >
                                    </td>

                                </tr>
                            </form>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            <form action="purchase_report.php" method="post" name="purchase_report" target="_blank">
                                <tr>
                                    <td><strong>Purchase Report </strong></td>
                                    <td>From</td>
                                    <td><input class="datepicker" data-date-format="mm/dd/yyyy"></td>
                                    <td>To</td>
                                    <td><input class="datepicker" data-date-format="mm/dd/yyyy"></td>
                                    <td><input class="btn btn-info" name="submit" type="button" value="Show" >
                                    </td>
                                </tr>
                            </form>

                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            <form action=".php" method="post" name=""
                                  target="_blank">
                                <tr>
                                    <td><strong>Purchase Stocks </strong></td>
                                    <td>From</td>
                                    <td><input class="datepicker" data-date-format="mm/dd/yyyy"></td>
                                    <td>To</td>
                                    <td><input class="datepicker" data-date-format="mm/dd/yyyy"></td>
                                    <td><input class="btn btn-info" name="" type="button" value="Show"
                                              ></td>
                                </tr>
                            </form>

                        </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>


</div>

<?php include("master_foot.php"); ?>