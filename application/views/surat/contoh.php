<!DOCTYPE HTML>
<html>
  <head>
    <link href="css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="css/bootstrap-datetimepicker.min.css">
  </head>
  <body>
    <div id="datetimepicker" class="input-append date">
      <input type="text"></input>
      <span class="add-on">
        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
      </span>
    </div>
    <script type="text/javascript"
     src="js/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy ',
       });
    </script>
  </body>
<html>