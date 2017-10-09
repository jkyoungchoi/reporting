<?php
session_start();
if(!isset($_SESSION['login_session_ready'])){
//    header("location: ./app/libs/GIS-login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Narasha GIS Reporting">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">
    <link rel="stylesheet" href="./app/css/app.css">
    <link rel="stylesheet" href="./assets/ui.css">
    <title>Reporting</title>
</head>

<body><nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand title-color" href="#">Custom Reporting</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-toggle="modal" data-target="#profile-modal">Login / Profile</a></li>
            <li><a href="#" data-toggle="modal" data-target="#help-modal">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right"><div class="form-group">
            <select class="form-control" onchange="reportType(this)" id="reportTypeSelection"><option value="btTable">#1 Reporting Data Table w/ Export</option><option value="cusomTemp">#2 Custom Template Report</option><option>#3 Custom PDF Report</option></select>
              </div>
          </form>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
        <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-database" aria-hidden="true"></i></a>
        <div id="sidebar-wrapper">
            <div id="data-list">
          <ul class="sidebar-nav list">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="glyphicon glyphicon-remove"></i></a>
            <li class="sidebar-brand">
              <h3 class="listTitleColor">Data List</h3>
            </li>
          </ul>
            </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-md-offset-1 rowPadding" id="btTable">
              <table id="table"></table>
        </div>
          <div class="col-md-10 col-md-offset-1" id="cusomTemp" class="rowPadding">
              <table id="custom-table"><tr><td>Custom Report Template</td></tr></table>
        </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="profile-modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"> Profile</h4>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="help-modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"> Help / About</h4>
          </div>
          <div class="modal-body">
            <p>How to</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
</body>

</html>
<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
<script src="./assets/ui.js"></script>
<script src="./app/js/app.js"></script>