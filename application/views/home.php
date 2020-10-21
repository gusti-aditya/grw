<?php $this->load->view('header');?>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gelato Giorgio!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><a href="#" style="color:#6baeb8;">John Doe</a></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home</span></a>
                  </li>
                  <li><a><i class="fa fa-glass"></i> Gelato Master Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form_advanced.html">Gelato Product</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Gelato Home Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">Add/Edit Home Page Content</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
             <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
         
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gelato - 2017
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
	 <!-- Flot -->
   <script src="assets/vendors/Flot/jquery.flot.js"></script>
    <script src="assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/Flot/jquery.flot.resize.js"></script>
	<!-- -->
	
    <!-- Flot plugins -->
	
    <script src="assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="assets/vendors/flot.curvedlines/curvedLines.js"></script>

	<!--	-->
    <!-- DateJS -->
    <script src="assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="assets/vendors/moment/min/moment.min.js"></script>
    <script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>	
  </body>