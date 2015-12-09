<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/' ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/' ?>css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landscaper Signup</title>
    <style>
.form-control { margin-bottom: 10px; </style>
</head>
<body>
    <div class="container" style="margin-top:25px">
    <div class="row">
        <div class="col-xs-12">
            <div class="jumbotron">
            <legend><img src="<?php echo base_url().'/assets/' ?>LawnPay2.png" height="95"width="250"style="display:block;margin:auto;"/></legend>
            <?php //if(@$error == 1): ?>
            <div class="errors">      
 <?php echo validation_errors(); ?>
            </div>
             <?php
             if(@$emailExsist === 'yes')
                  echo   'Email address already exsist <a href="'.base_url().'login/index/landscaper" >Login Here</a>';
?>
            <form action="<?php echo base_url().'signup/register/landscaper' ?>" method="post" class="form" role="form">
            <div class="row">
                      <div class="col-xs-6 col-md-6">
                    <label for="expMonth" style="display:block">FIRST NAME</label>
                    <input class="form-control" name="landscaper[firstname]" placeholder="First Name" value="<?php echo set_value('landscaper[firstname]'); ?>" type="text"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <label for="expMonth" style="display:block">LAST NAME</label>
                    <input class="form-control" name="landscaper[lastname]" value="<?php echo set_value('landscaper[lastname]'); ?>" placeholder="Last Name" type="text"  required />
                </div>
            </div>
            <label for="expMonth" style="display:block">E-MAIL</label>    
            <input class="form-control" name="landscaper[youremail]" value="<?php echo set_value('landscaper[youremail]'); ?>" placeholder="Your Email" type="email" />
            <input class="form-control" name="landscaper[reenteremail]" value="<?php echo set_value('landscaper[reenteremail]'); ?>" placeholder="Re-enter Email" type="email" />
            <label for="expMonth" style="display:block">PASSWORD</label>    
            <input class="form-control" name="landscaper[password]"  placeholder="Password" type="password" />
            <label for="expMonth" style="display:block">PHONE NUMBER</label>    
            <input class="form-control" name="landscaper[phone_number]" value="<?php echo set_value('landscaper[phone_number]'); ?>" value="<?php echo set_value('username'); ?>" placeholder="Phone Number" type="text" />
            <label for="expMonth" style="display:block">ADDRESS</label>    
            <input class="form-control" name="landscaper[address]" value="<?php echo set_value('landscaper[address]'); ?>" placeholder="Address" type="text" />
            <label for="expMonth" style="display:block">ZIP CODE</label>    
            <input class="form-control" name="landscaper[zip_code]" value="<?php echo set_value('landscaper[zip_code]'); ?>" placeholder="Zip Code" type="text" />
          
            <label for="expMonth" style="display:block">CITY/STATE</label>    
            <input class="form-control" value="<?php echo set_value('landscaper[city]'); ?>" name="landscaper[city]" placeholder="City/State" type="text" />
            <label for="expMonth" style="display:block">COMPANY NAME</label>    
            <input class="form-control" value="<?php echo set_value('landscaper[companyid]'); ?>" name="landscaper[companyid]" placeholder="Company Name" type="text" />
            <br />
            <br />
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign up">
                
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
        </script>
</body>
</html>