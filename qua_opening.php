<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>UCSC e-Procurement System</title>
<?php include('session.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Desktop -->
    <link href="doc1.css" rel="stylesheet" type="text/css" media="only screen and (min-width:769px)"> 
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<?php include('header.php') ?>
<!-- /subnavbar -->

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
            

              <div class="container">
  
    <div class="table-responsive">
  <h2 class="heading"><center>Quotation Opening Schedule</center></h2><br><br>
    <form action="" method="POST"> <!-- POST method<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< POST METHOD -->
      <label for="quotationName"><h4 class="heading">Quotation Name : SUPPLY & DELIVERY OF</h4></label>
        <input type="text" name="quotationName" class="dotted" id="quotationName" value=" 2 Hi end Air COnditioners"><br>
      <label for="date" class="date&time">Date : </label>
        <input type="date" name="date" class="dotted" id="date">
      <label for="time"> Time:</label>
        <input type="time" name="date" class="dotted"  id="time">
    
  </div>
   
  <div class="row">
  <div class="col-xs-12 ">
       <div class="table-responsive"> 
    <table class="table table-bordered table-hover">
   
      <tr><div><h5 style="text-align: center;"><strong>BIDS RECEIVED BEFORE CLOSING TIME</strong></h5></tr> 
      <thead><tr>
        <th>No</th>
        <th>Name of the Bidder</th>
        <th>Quantity</th>
        <th>Unit Price Without VAT(Rs)</th>
        <th>Total Amount with VAT(Rs)</th>
        <th>Remark/ Brand</th>
      </tr></thead>
      <tbody>
        <tr>
          <td>01</td>
          <td><input type="text"  style="border:none" /></td>
          <td><input type="text" style="border:none"/></td>
          <td><input type="text" style="border:none" /></td>
          <td><input type="text" style="border:none"/></td>
          <td><input type="text" style="border:none"/></td>
        </tr>

          <tr>
          <td>02</td>
          <td><input type="text" style="border:none" /></td>
          <td><input type="text" style="border:none" /></td>
          <td><input type="text" style="border:none"/></td>
          <td><input type="text" style="border:none"/></td>
          <td><input type="text" style="border:none"/></td>
        </tr>

          <tr>
          <td>03</td>
          <td><input type="text" style="border:none"/></td>
          <td><input type="text" style="border:none"/></td>
          <td><input type="text" style="border:none"/></td>
          <td><input type="text" style="border:none"/></td>
          <td><input type="text" style="border:none"/></td>
        </tr>


      </tbody>
     </table>
    </div>
    </div>
  </div>
              <center>
              <input type="submit" class = "button btn btn-success btn-large" value="  submit  " name="submit"/>
              <input type="submit" class = "button btn btn-danger btn-large" value="  Reject  " name="reject"/>
              </center>
</form>
 </div>


          
          



            <!-- form/table-end -content --> 
        </div>
          <!-- span6 -->
    
        <!-- span6 -->

          <!-- /widget --> 
      </div>
        <!-- /span6 -->

          <!-- /widget -->
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<div class="extra">
  <div class="extra-inner">
    <div class="container">
      <div class="row">
                    <div class="span3">
                        <h4>
                            UCSC e-Procurement System</h4>
                        <ul>
                            <li><a href="javascript:;">About</a></li>
                            <li><a href="faq.php">About DOP</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Support</h4>
                        <ul>
                            <li><a href="javascript:;">Frequently Asked Questions</a></li>
                            <li><a href="javascript:;">Contact</a></li>
                            <li><a href="javascript:;">Feedback</a></li>
                        </ul> 
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Terms & COnditions</h4>
                        <ul>
                            <li><a href="javascript:;">Terms of Use</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Resources</h4>
                        <ul>
                        </ul>
                    </div>
                    <!-- /span3 -->
                </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /extra-inner --> 
</div>
<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2017 <a href="#">UCSC Deparment of Finance</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 
<script>     

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script><!-- /Calendar -->
</body>
</html>
