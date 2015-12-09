<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/' ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/' ?>css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="customer[viewport" content="width=device-width, initial-scale=1">
    <title>Customer Signup</title>
    <style>
.form-control { margin-bottom: 10px; </style>
</head>
<body>
    <div class="container" style="margin-top:25px">
    <div class="row">
        <div class="col-xs-12">
            <div class="jumbotron">
            <legend><img src="<?php echo base_url().'/assets/' ?>LawnPay2.png" height="95"width="250"style="display:block;margin:auto;"/></legend>
          <?php if(@$_REQUEST['code']==='green'):
              
                 echo 'done';
              
          endif; ?>
             
  <?php //if(@$error == 1): ?>
            <div class="errors">      
 <?php echo validation_errors(); ?>
            </div>
             <?php
             if(@$emailExsist === 'yes')
                  echo   'Email address already exsist <a href="'.base_url().'login" >Login Here</a>';
?>
            <form action="<?php echo base_url().'signup/register' ?>" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <label for="expMonth" style="display:block">FIRST NAME</label>
                    <input class="form-control" name="customer[firstname]" placeholder="First Name" value="<?php echo set_value('customer[firstname]'); ?>" type="text"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <label for="expMonth" style="display:block">LAST NAME</label>
                    <input class="form-control" name="customer[lastname]" value="<?php echo set_value('customer[lastname]'); ?>" placeholder="Last Name" type="text"  required />
                </div>
            </div>
            <label for="expMonth" style="display:block">E-MAIL</label>    
            <input class="form-control" name="customer[youremail]" value="<?php echo set_value('customer[youremail]'); ?>" placeholder="Your Email" type="email" />
            <input class="form-control" name="customer[reenteremail]" value="<?php echo set_value('customer[reenteremail]'); ?>" placeholder="Re-enter Email" type="email" />
            <label for="expMonth" style="display:block">PASSWORD</label>    
            <input class="form-control" name="customer[password]"  placeholder="Password" type="password" />
            <label for="expMonth" style="display:block">PHONE NUMBER</label>    
            <input class="form-control" name="customer[phone_number]" value="<?php echo set_value('customer[phone_number]'); ?>" value="<?php echo set_value('username'); ?>" placeholder="Phone Number" type="text" />
            <label for="expMonth" style="display:block">ADDRESS</label>    
            <input class="form-control" name="customer[address]" value="<?php echo set_value('customer[address]'); ?>" placeholder="Address" type="text" />
            <label for="expMonth" style="display:block">ZIP CODE</label>    
            <input class="form-control" name="customer[zip_code]" value="<?php echo set_value('customer[zip_code]'); ?>" placeholder="Zip Code" type="text" />
          
            <label for="expMonth" style="display:block">CREDIT CARD</label>    
            <input class="form-control" name="customer[creditcard]" value="<?php echo set_value('customer[creditcard]'); ?>" placeholder="Credit Card Number" type="text" />
                   <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="expMonth" style="display:block">EXPIRATION DATE</label>
                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                        <input type="text" class="form-control" name="customer[expMonth]" value="<?php echo set_value('customer[expMonth]'); ?>" placeholder="MM" required data-stripe="exp_month" />
                                    </div>
                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                        <input type="text" class="form-control" name="customer[expYear]" value="<?php echo set_value('customer[expYear]'); ?>" placeholder="YY" required data-stripe="exp_year" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cvCode">CV CODE</label>
                                    <input type="text" value="<?php echo set_value('customer[cvCode]'); ?>" class="form-control"  name="customer[cvCode]" placeholder="CV" required data-stripe="cvc" />
                                </div>
                            </div>
                        </div>
            <label for="">
                BIRTH DATE</label>
            <div class="row">
                <div class="col-xs-4 col-md-4">
                    <select name="customer[dob_month]" class="form-control">
                        <option value="-1">Month</option>
                         <option value="1">January</option>
                         <option value="2">February</option>
                         <option value="3">March</option>
                         <option value="4">April</option>
                         <option value="5">May</option>
                         <option value="6">June</option>
                         <option value="7">July</option>
                         <option value="8">August</option>
                         <option value="9">September</option>
                       <option value="10">October</option>
                          <option value="11">November</option>
                            <option value="12">December</option>
                         
                         
                    </select>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select name="customer[dob_day]" class="form-control">
                        <option value="Day">Day</option>
                        <?php for($i=1;$i<=31;$i++): ?>
                         <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                         <?php endfor; ?>
                    </select>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select name="customer[dob_year]" class="form-control">
                        <?php for($i=2010;$i>=1900;$i--): ?>
                         <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                         <?php endfor; ?>
                    </select>
                </div>
            </div>
            <label for="expMonth" style="display:block">LANDSCAPER ID</label>    
            <input class="form-control" name="customer[companyid]" value="<?php echo set_value('customer[companyid]'); ?>" placeholder="Landscaper ID" type="email" />
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">
                Sign up</button>
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