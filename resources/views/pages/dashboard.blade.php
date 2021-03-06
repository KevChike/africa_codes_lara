<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from thevectorlab.net/flatlab/boxed_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2015 14:30:10 GMT -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Point to Database</title>

    <!-- Bootstrap core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
      
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
      <link href="css/gallery.css" rel="stylesheet" />
      

      <link href="css/spin.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" /> 
      
      
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="">



    <!-- header start -->
        <header class="header blue-bg">
              <div class="container ">
                  <div class="sidebar-toggle-box">
                      <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-reorder tooltips"></div>
                  </div>
                  <!--logo start-->
                  <a href="index-2.html" class="logo" >AFRICA<span style="color:#FCB322;">CODES</span></a>
                  <!--logo end-->
                  <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    
                  </div>
                  <div class="top-nav ">
                      <ul class="nav pull-right top-menu">
                          <li>
                              <input type="text" class="form-control search" placeholder="Search">
                          </li>
                          <!-- user login dropdown start-->
                          <li class="dropdown">
                              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                  <img alt="" src="img/images.png" style="width: 30px;height: 30px;">
                                  <span class="username">{{ Auth::user()->name }}</span>
                                  <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu extended logout">
                                  <div class="log-arrow-up"></div>
                                  
                                  <li>
                                    <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                      <i class="fa fa-key"></i> Log Out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                  </li>
                              </ul>
                          </li>
                          
                          <!-- user login dropdown end -->
                      </ul>
                  </div>
              </div>
        </header>
    <!-- header end -->

    <section id="main-content" style="margin-left:0px;">

        <!-- <div class="first_page bg_grey" id="sec_1"> -->
          <div class="container">
          <style type="text/css">
          .container{
                width: 1100px;
                position: relative;
          }
          </style>
            <div id="srch_container"  style="width:1000px;    width: 1100px; margin-top: 80px;">
              <div class="row">
                 
                  <div class="theme-config">
                    <div class="theme-config-box">
                        <div class="spin-icon">
                            <i class="fa fa-cogs fa-spin"></i>
                        </div>
                        <div class="skin-setttings">
                            <div class="title">Instructions</div>
                            <div class="setings-item" style="padding:10px;">
                              <p> 1. Bind to database table 'transactions'</p>
                              <p>2. Bar: Show amount of transactions in a year for customer with ID=3 (Jan-June)</p>
                              <p>3. Pie: Distribution for same customer</p>
                              <p>4.(a) user Count (Count from users table)<br>
                               (b) Count(customers) <br>
                               (c) Sum(Transaction for the year ie. sum of total field.</p>

                            </div>
                            
                        </div>
                    </div>
                  </div>
                   <span><a href="/profile"><i class="fa  fa-angle-double-left" style=" font-size: 25px;color: #1ab394;"></i></a></span>
               <div class="col-lg-12" style="margin-top:20px;">
                  <div class="col-lg-6">
                    <section class="panel" style="height:370px;">
                              <header class="panel-heading">
                                  <strong>Bar</strong>
                              </header>
                              <div class="panel-body text-center" style="">
                                  <canvas id="bar" height="300" width="400"></canvas>
                              </div>
                          </section>
                  </div>
                  <div class="col-lg-6">
                  <section class="panel" style="height:370px;">
                              <header class="panel-heading">
                                  <strong>Pie</strong>
                              </header>
                              <div class="panel-body text-center" style="">
                                  <canvas id="pie" height="300" width="300"></canvas>
                              </div>
                          </section>
                  </div>
                 
              </div>

              </div>
              <!--state overview start-->
              <div class="row state-overview" style="padding:15px;">
                  <div class="col-lg-4 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                  0
                              </h1>
                              <p>Users</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                  0
                              </h1>
                              <p>Customers</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="fa fa-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  0
                              </h1>
                              <p>Transactions</p>
                          </div>
                      </section>
                  </div>
                   <a class="btn btn-success" href="#myModal"  type="button" data-toggle="modal" style=" float: right; margin-right: 10px;">Done</a> 
                   <!-- modal start -->
                                         <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                          <h4 class="modal-title" style="text-align: center;font-weight: bold;">Completed</h4>
                                                      </div>
                                                      <div class="modal-body" style=" text-align: justify;color:gray;">
                                                         <section class="panel">
                                                               <div class="panel-body">
                                                                  <p>Thanks Boss! send to projects@africacodes.net. 
                                                                  </p>
                                                              </div>
                                                          </section>
                                                        </div>
                                                      <div class="modal-footer">
                                                         
                                                          <a class="btn btn-success" type="button" href="index.html"  style="border:transparent;">bye</a>
                                                      </div>
                                                  </div>
                                              </div>
                                         </div>
                                    <!-- modal end -->
              </div>
              </div>
            </div>
          </div>
    </section>
      <script src="js/jquery.js"></script>
    <!--<script src="js/jquery-1.8.3.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/chart-master/Chart.js"></script>
    <script src="js/respond.min.js" ></script>
    {{-- <script src="js/count.js"></script> --}}
  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!-- script for this page only-->
    <script src="js/all-chartjs.js"></script>

    <script type="text/javascript">
          $('.spin-icon').click(function () {
            $(".theme-config-box").toggleClass("show");
        });
  </script>

  <script type="text/javascript">
    function countUp(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp({{ $users }});

function countUp2(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count2'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp2({{ $customers }});

function countUp3(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count3'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp3(328);

function countUp4(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count4'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp4(10328);
  </script>
  </body>

</html>