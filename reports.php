<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>UCSC e-Procurement System</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    
    <link href="css/pages/reports.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php"><img src="img/logo.png" height="40px" width="40px">UCSC e-Procurement System</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="faq.php">Help</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> User <b class="caret"></b></a>
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
        <li><a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li ><a href="past_proc.php"><i class="icon-list-alt"></i><span>Past Procurements</span> </a> </li>
        <li class="active"><a href="reports.php"><i class="icon-bar-chart"></i><span>Reports</span> </a> </li>
        
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Register Users</a></li>
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



<div class="info-box">
               <div class="row-fluid stats-box">
                  
                  
                  <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="datatable-buttons_info" style="">
                      <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 158px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Procurement #ID</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 251px;" aria-label="Position: activate to sort column ascending">Completed on</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 119px;" aria-label="Office: activate to sort column ascending">Deparment</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 61px;" aria-label="Age: activate to sort column ascending">Total</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 117px; display: none;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 92px; display: none;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                      </thead>


                      <tbody>   
                      <tr role="row" class="odd">
                          <td tabindex="0" class="sorting_1">121000040</td>
                          <td>2017/11/28</td>
                          <td>Procurement Dept</td>
                          <td>33</td>
                          <td style="display: none;">2008/11/28</td>
                          <td style="display: none;">$162,700</td>
                        </tr><tr role="row" class="even">
                          <td class="sorting_1" tabindex="0">121000045</td>
                          <td>2017/10/28</td>
                          <td>NOC</td>
                          <td>47</td>
                          <td style="display: none;">2009/10/09</td>
                          <td style="display: none;">$1,200,000</td>
                        </tr><tr role="row" class="odd">
                          <td tabindex="0" class="sorting_1">121000065</td>
                          <td>2017/10/28</td>
                          <td>Media Dept</td>
                          <td>66</td>
                          <td style="display: none;">2009/01/12</td>
                          <td style="display: none;">$86,000</td>
                        
                      
                        </tr><tr role="row" class="even">
                          <td tabindex="0" class="sorting_1">121000110</td>
                          <td>2017/10/28</td>
                          <td>Stat Dept</td>
                          <td>22</td>
                          <td style="display: none;">2012/03/29</td>
                          <td style="display: none;">$433,060</td>
                        </tr></tbody>
                    </table>
                  </div>
               </div>
               
               
             </div>








	      	<div class="row">
	      	<div class="span12">
          <div class="info-box" style="padding: 15px; ">

	      <!-- Table start -->
	      	<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-xs-6">
                          <p class="lead" style="padding: 10px;">Total Procurement Cost #121000065</p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>Rs. 862.450</td>
                                </tr>
                                <tr>
                                  <th>Tax (9.3%)</th>
                                  <td>Rs. 80.634</td>
                                </tr>
                                <tr>
                                  <th>Shipping:</th>
                                  <td>Rs. 26.080</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>Rs. 1.123.665</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                          <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                          <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button><br><br>
                        </div>
                        </div>

</div>
           <!-- Table end here -->
         </div>
         </div>      
	      	
	  	  <!-- /row -->
	
	      <!-- /row -->
	      
	      
	      
	      
			
	      
	      
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->
    

    

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
</div><!-- /extra -->


    
    
<div class="footer">
	
	<div class="footer-inner">
		
		<div class="container">
			
			<div class="row">
				
    			<div class="span12">
    				&copy; 2013 <a href="#">Bootstrap Responsive Admin Template</a>.
    			</div> <!-- /span12 -->
    			
    		</div> <!-- /row -->
    		
		</div> <!-- /container -->
		
	</div> <!-- /footer-inner -->
	
</div> <!-- /footer -->
    

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/excanvas.min.js"></script>
<script src="js/chart.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>


  </body>

</html>
