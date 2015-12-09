<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/' ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/' ?>css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Login</title>
    
</head>
<body>
  
        <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <img src="<?php echo base_url().'/assets/' ?>LawnPay2.png" height="95"width="250"style="display:block;margin:auto;"/>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                             <div class="errors">      
 <?php  
      $this->customerror->showCustomError(); 
 ?>
            </div>
                        <form id="loginform" action="<?php echo base_url().'login/doLogin' ?>" method="post" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" value="<?php echo set_value('username'); ?>" class="form-control" name="username" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                        <input style="width: 100%" value="Login" type="submit" class="btn btn-success">
                            

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="javascript:void(0)" onClick="signup(true)">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="login(true)">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form method="post" action="<?php echo base_url().'signup/register/customer/less' ?>" id="signupform" class="form-horizontal" role="form">
                                
                                <?php  
                                          $this->customerror->showCustomError();
                                          if(@$emailExsist === 'yes'):
                                             echo   'Email address already exsist <a href="'.base_url().'login" >Login Here</a>';
 
                                          endif;
                                     ?>
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo set_value('customer[youremail]'); ?>" class="form-control" name="customer[youremail]" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname"   class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo set_value('customer[firstname]'); ?>" class="form-control" name="customer[firstname]" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo set_value('customer[lastname]'); ?>" class="form-control" name="customer[lastname]" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="customer[password]" placeholder="Password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo set_value('customer[icode]'); ?>" class="form-control" name="customer[icode]" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <input  type="submit" id="btn-signup" type="button" class="btn btn-info" value="signup">
                                        <span style="margin-left:8px;">or</span>  
                                    </div>
                                </div>
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
    <script>
        $.expr[':'].blank = function(obj){
  return obj.innerHTML.trim().length === 0;
};


        $('.errors:blank').remove();
        function signup(hideError){
           $('#loginbox').hide(); $('#signupbox').show();
           if($('.errors').length && hideError){
             $('.errors').remove();  
           }
           
        }
        
        function login(hideError){
            $('#signupbox').hide(); $('#loginbox').show()
            if($('.errors').length && hideError){
             $('.errors').remove();  
           }
        }
    </script>
      <?php if(@$signup === 'yes'):
            echo '<script>signup(false)</script>';
       endif;
 ?>
</body>
</html>