<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form</title>
     <!--link the bootstrap css file-->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
     
     <style type="text/css">
     .colbox {
          margin-left: 0px;
          margin-right: 0px;
     }
     </style>
</head>
<body>
<div class="container">
     <div class="row">
          <div class="col-lg-6 col-sm-6">
  <h1>MailCloud.my</h1>
          </div>
          <div class="col-lg-6 col-sm-6">
               
               <ul class="nav nav-pills pull-right" style="margin-top:20px">
                    <li class="active"><a href="#">Login</a></li>
                    <li><a href="#">Daftar</a></li>
               </ul>
               
          </div>
     </div>
</div>
<hr/>

<div class="container">
     <div class="row">
          <div class="col-lg-4 col-sm-4 well">
         
               <fieldset>
               <legend>Login</legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
               <form action="<?= site_url('login') ?>" method="post">
               <label for="username">Username/MyKad</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                   <input type="text" name="NoKP" required="required"/> 
               </div>
               </div>
               </div>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
               <label for="txt_password" class="control-label">Password</label>
               </div>
               <div class="col-lg-8 col-sm-8">
               <label for="password"></label>
               <input type="password" name="password" required="required" />    
               </div>
               </div>
               </div>       
               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
               <button type="submit" class="btn btn-default">Login</button>
               </form>  
               </div>
               </div>
               
       
                      
            <?php if(isset($_SESSION)) {
        echo $this->session->flashdata('flash_data');
    } ?>

          </fieldset>
         
              
          </div>
     </div>
</div>
<!--load jQuery library-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--load bootstrap.js-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>







  