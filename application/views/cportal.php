<?php

$events = array();
$eventsFullData = array();
$count = 0;
foreach($pay as $data):
    $date = explode(' ',$data->date);
    $events[$count]['title'] = $data->price.'$';
   $events[$count]['start'] = $date[0];
   $eventsFullData[$count]['title'] = $data->price.'$';
   $eventsFullData[$count]['des'] = $data->description;
    $eventsFullData[$count]['price'] = $data->price;
    $eventsFullData[$count]['cname'] = $data->companyname;
   $eventsFullData[$count++]['start'] = $date[0];
endforeach;
//echo '<pre>';
//var_dump($pay);
//exit();

$event = json_encode($events);
$eventsFullData = json_encode($eventsFullData);;
?>
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
    <title>Customer Portal</title>
    <script>$(document).ready(function() {

    // page is now ready, initialize the calendar...
    var events = <?php echo $eventsFullData ?>;
    $('#calendar').fullCalendar({
        events: <?php echo $event ?>,
         dayClick: function(date, jsEvent, view) {
             var date = $(this).data('date');
             showPayments(date);
         }
        // put your options and callbacks here
    })
    
    function showPayments(date){
        var lis = '';
       $.each(events,function(index,event){
           if(event.start == date){
              lis +=  Skin(event.price,event.des,event.cname);
           }
           
           if(lis != ''){
               $('#event-main').html('');
               $('#event-main').append(lis)
           }
            
       }) 
    }
    
    function Skin(price,des,cname){
        return '<li class="list-group-item"><button onclick="myFunction()" style="float:right; margin-right:0px"type="button" class="btn btn-default">Pay</button><span class="badge">'+price+'PAID</span>' +cname+'-'+des+'</li>';
    }
   
    
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
        <button onclick="location.href='<?php echo base_url().'logout'?>'"style="float:right"type="button" class="btn btn-default">Signout</button><button style="float:right; margin-right:0px"type="button" class="btn btn-default">Settings</button>
        
    </div>
    <div class="container">
        <div class="jumbotron" style="background-color:white;margin-top:30px">
            <div class="row">
                <div class="col-xs-6">
                        <form action="demo_form.asp">
                            <input style="margin-top:20px;"type="checkbox" name="vehicle" value="Bike"> Automatically Pay Recurring Invoices <button type="button" class="btn btn-default" style="float:right">Save Setting</button><br>
                        </form>
                        <hr/>
                        <ul class="list-group" id="event-main">
                        <?php foreach($pay as $data): ?>
                        <li class="list-group-item"><button onclick="myFunction()" style="float:right; margin-right:0px"type="button" class="btn btn-default">Pay</button><span class="badge"><?php echo $data->price; ?> PAID</span> <?php echo $data->companyname.'-'.$data->description; ?></li>
                          <?php endforeach; ?>
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