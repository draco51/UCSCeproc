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


<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">UCSC e-Procurement System</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="faq.html">Help</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i><?php echo "{$_SESSION['login_user']}" ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="login.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li><a href="past_proc.php"><i class="icon-list-alt"></i><span>Past Procurements</span> </a> </li>
        <li><a href="reports.php"><i class="icon-bar-chart"></i><span>Reports</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>More</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Register Users</a></li>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        
          <div class="container">
  <div class="row">
    <div class="col-xs-8 ">
      <div class="table-responsive">

        <table class="table table-bordered table-hover">
        <form>


<!-- Table 1  -->

<colgroup>

</colgroup>
  <tr>
    <th colspan="3" id="heading" style="text-align:center;background-color:#E4E4E4;"><u>BACKGROUND</u></th>
  </tr>
  <tr>
    <th>Tender Name & Number</th>
    <td colspan="2"><input type="text" class="form-control" name="tendername" style="border:none"></td>
  </tr>
  <tr>
    <th>Brief Description of Goods/Works</th>
    <td><input type="text" class="form-control" name="sample_goods" style="border:none" placeholder="Sample goods"></td>
    <td><input type="text" class="form-control" name="no" style="border:none" placeholder="No"></td>
  </tr>
  <tr>
    <th>Estimated Amount Without Taxes (Rs)</th>
    <td colspan="2"><input type="text" class="form-control" name="amount" style="border:none" ></td>
  </tr>
</table>


<!-- Table 2 --><br>
<div  class="table-responsive">
<table class = 'table table-bordered'>
<colgroup>
<col style="width: 71px">
<col style="width: 421px">
<col style="width: 180px">
<col style="width: 171px">
</colgroup>
  <tr>
    <th colspan="4">NAMES OF EVALUATION COMMITTEE MEMBERS</th>
  </tr>
  <tr class="heading">
    <th style="text-align:center;background-color:#E4E4E4;">S No</th>
    <th style="text-align:center;background-color:#E4E4E4;">Name</th>
    <th style="text-align:center;background-color:#E4E4E4;">Designation</th>
    <th style="text-align:center;background-color:#E4E4E4;">Capacity</th>
  </tr>
  <tr>
    <td style="text-align:center;">1</td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
  </tr>
  <tr>
    <td style="text-align:center;">2</td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
  </tr>
  <tr>
    <td style="text-align:center;">3</td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
  </tr>
</table>
</div>


<!-- Table3 --><br>
<div class="table-responsive">
<table class = 'table table-bordered'>
<colgroup>
<col style="width: 55px">
<col style="width: 389px">
<col style="width: 70px">
<col style="width: 103px">
<col style="width: 102px">
<col style="width: 55px">
<col style="width: 57px">
</colgroup>
  <tr>
    <th colspan="7" style="background-color:#E4E4E4">BIDS RECEIVED BEFORE CLOSING TIME</th>
  </tr>
  <tr>
    <th>S No</th>
    <th>Name of the Bidder</th>
    <th>Quanitity</th>
    <th>Unit Price<br>without<br>VAT(with installation<br>chargers and<br>Piping (Rs)</th>
    <th>Total Amount<br>without VAT<br>(Rs)</th>
    <th>Brand</th>
    <th>Rank</th>
  </tr>
  <tr>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
  </tr>
  <tr>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
  </tr>
  <tr>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
  </tr>
  <tr>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
  </tr>
</table>
</div>

<!-- Table4 --><br>
<div class="table-responsive">
<table class = 'table table-bordered'>
<colgroup>
<col style="width: 144px">
<col style="width: 237px">
<col style="width: 256px">
</colgroup>
  <tr>
    <th colspan="3">REASON FOR REJECTING LOWEST QUOATATION</th>
  </tr>
  <tr>
    <td></td>
    <td>Bidder</td>
    <td>Reason</td>
  </tr>
  <tr>
    <td>The Lowest Bidder</td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
  </tr>
  <tr>
    <td>Other Comments</td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
  </tr>
</table>
</div>



<!-- Table5 --><br>
<div class="table-responsive">
<table class = 'table table-bordered'>
<colgroup>
<col style="width: 325px">
<col style="width: 547px">
</colgroup>
  <tr>
    <th colspan="2" style="text-align: center;">CONTRACT AWARD RECOMMENDATION</th>
  </tr>
  <tr>
    <td>Reason for Recommendation</td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
  </tr>
  <tr>
    <td>Name of the contractor/Supplier</td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
  </tr>
  <tr>
    <td>Contract Amount with Taxes (Rs)<br><br></td>
    <td><input type="text" class="form-control" name="" style="border:none" ></td>
  </tr>
</table>
</div>


        </div></div></div></div>
        <br><br><br>
             <center>
              <input type="submit" class = "button btn btn-success btn-large btn-block" value="  Submit  " name="submit"/>
              <input type="submit" class = "button btn btn-danger btn-large" value="  Cancel  " name="reject"/>
              </center>          

      
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
