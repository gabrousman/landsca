<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='<?php echo base_url().'/assets/' ?>fullcalendar/fullcalendar.css' />
    <script src='<?php echo base_url().'/assets/' ?>fullcalendar/lib/jquery.min.js'></script>
    <script src='<?php echo base_url().'/assets/' ?>fullcalendar/lib/moment.min.js'></script>
    <script src='<?php echo base_url().'/assets/' ?>fullcalendar/fullcalendar.js'></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/' ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/' ?>css/custom.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landscaper Portal</title>
    <script>$(document).ready(function() {

    // page is now ready, initialize the calendar...
    
    $('#calendar').fullCalendar({
        // put your options and callbacks here
    })
    
});</script>
    <script>
function myFunction() {
    window.confirm("Pay Invoice?");
}
</script>
</head>
<body>
    
    <div class="container" style="margin-top:25px">
        <img style="display:block;margin:auto;"src="<?php echo base_url().'/assets/' ?>LawnPay2.png" height="95"width="250"/>
        <div style="width=100%;height=100px;background-color:white;"></div>
        <button onclick="location.href='<?php echo base_url().'logout/index/landscaper'?>'"style="float:right"type="button" class="btn btn-default">Signout</button><button style="float:right; margin-right:0px"type="button" class="btn btn-default">Settings</button>
        
    </div>
    <div class="container">
        <div class="jumbotron" style="background-color:white;margin-top:30px">
            <div class="row">
                <div class="col-xs-6">
                        <form action="demo_form.asp">
                            <input style="margin-top:20px;"type="checkbox" name="vehicle" value="Bike"> Automatically Pay Recurring Invoices <button type="button" class="btn btn-default" style="float:right">Save Setting</button><br>
                        </form>
                        <hr/>
                    <ul class="list-group">
                        <li class="list-group-item"><button onclick="myFunction()" style="float:right; margin-right:0px"type="button" class="btn btn-default">Pay</button><span class="badge">$40 PAID</span> John Doe Company - Trimmed Hedges/Mowed Lawn</li>
                        <li class="list-group-item"><button onclick="myFunction()" style="float:right; margin-right:0px"type="button" class="btn btn-default">Pay</button><span class="badge">$45 PAID</span> John Doe Company - mowed lawn</li> 
                        <li class="list-group-item"><button onclick="myFunction()" style="float:right; margin-right:0px"type="button" class="btn btn-default">Pay</button><span class="badge">$72 PAID</span> John Doe Company - mowed lawn</li>
                        <li class="list-group-item"><button onclick="myFunction()" style="float:right; margin-right:0px"type="button" class="btn btn-default">Pay</button><span class="badge">$103 PAID</span> John Doe Company - mowed lawn</li> 
                        <li class="list-group-item"><button onclick="myFunction()" style="float:right; margin-right:0px"type="button" class="btn btn-default">Pay</button><span class="badge">$43 PAID</span> John Doe Company - mowed lawn/trimmed hedges</li> 
                        <li class="list-group-item"><button onclick="myFunction()" style="float:right; margin-right:0px"type="button" class="btn btn-default">Pay</button><span class="badge">$83 DUE</span> John Doe Company - mowed lawn</li>
                    </ul>
                </div>
                <div class="col-xs-6">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>