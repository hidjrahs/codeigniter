<!DOCTYPE html>  
  <html lang="en">  
  <head>  
   <title>Registration</title>  
   <meta charset="utf-8">  
   <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
   <!-- Latest compiled and minified CSS -->  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
   <style type="text/css">  
    .form-box{  
     max-width: 500px;  
     position: relative;  
     margin: 5% auto;  
    }  
   </style>  
  </head>  
  <body>  
   <div class="wrapper">  
    <div class="container">  
     <div class="row">  
      <div class="form-box">  
       <div class="panel panel-primary">  
        <div class="panel-heading text-center">  
         <h3>Register</h3>  
        </div>  
        <div class="panel-body">  
         <div class="row">  
           <div class="col-sm-12">  
            <?php echo $this->session->flashdata('msg'); ?>  
          </div>  
         </div>  
         <form action="<?php echo base_url(); ?>user/registration" method="post">  
          <div class="row">  
           <div class="col-sm-6">  
            <div class="form-group">  
                   <label class="control-label" for="fname">First Name</label>  
                      <div >  
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="">  
                        <span class="text-danger"><?php echo form_error('fname'); ?></span>  
                      </div>  
                  </div>  
           </div>  
          <div class="col-sm-6">  
            <div class="form-group">  
                   <label class="control-label" for="fname">Last Name</label>  
                     <div >  
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required="">  
                       <span class="text-danger"><?php echo form_error('lame'); ?></span>  
                     </div>  
                  </div>  
           </div>  
         </div>  
         <div class="form-group">  
                 <label class="control-label" for="pswd">Email</label>  
                    <div>  
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">  
                     <span class="text-danger"><?php echo form_error('email'); ?></span>  
                   </div>  
                </div>  
                <div class="form-group">  
                 <label class="control-label" for="pswd">Password</label>  
                   <div>  
                      <input type="password" class="form-control" id="pswd" name="password" placeholder="Password" required="">  
                     <span class="text-danger"><?php echo form_error('password'); ?></span>  
                   </div>  
               </div>  
                <div class="form-group">  
                 <label class="control-label" for="cn-pswd">Confirm Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="cn-pswd" name="confirmpswd" placeholder="Confirm Password" required="">  
                      <span class="text-danger"><?php echo form_error('confirmpswd'); ?></span>  
                   </div>  
                </div>  
                <div class="form-group">   
                  <div class="row">  
                    <div class="col-sm-offset-5 col-sm-3 btn-submit">  
                      <button type="submit" class="btn btn-success">Register</button>  
                    </div>  
                  </div>  
                </div>  
         </form>  
        </div>  
        <div class="panel-footer text-center">  
         <h5><a href="http://codesquery.com">Click Here for more tutorials</a></h5>  
       </div>  
       </div>  
      </div>  
     </div>  
    </div>  
   </div>  
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  </body>  
  </html>  
