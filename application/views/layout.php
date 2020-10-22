<?php $this->load->view('header');
if (!$isi)
$isi='';
?>
<body class="nav-md">
<div class="page-wrapper" id="page-wrapper">
        <aside id="page-aside" class=" page-aside aside-fixed">
            <div class="sidenav darkNav"> 
            <a href="index.html" class="app-logo d-flex flex flex-row align-items-center overflow-hidden justify-content-center">
                <span class="logo-text d-inline-flex"><span class='font700 d-inline-block mr-1'>Admin Giriwangi Village</span></span>
                </a>
                <div class="flex">
                    <div class="aside-content slim-scroll">
                        <ul class="metisMenu" id="metisMenu">
                            <li class="nav-title">Menu<span class="nav-thumbnail">MN</span></li>
                            <li><i class="icon-Home nav-thumbnail"></i>
                                    <a href="<?php echo('Home')?>">
                                        <span class="nav-text">
                                            Home 
                                        </span>
                                    </a>
                            </li><!--Menu-item-->
                            <li><i class="icon-Add nav-thumbnail"></i>
                                    <a href="<?php echo('Berita')?>">
                                        <span class="nav-text">
                                            Berita
                                        </span>
                                    </a>
                            </li><!--Menu-item-->
							<li><i class="icon-Add nav-thumbnail"></i>
                                    <a href="<?php echo('Survey')?>">
                                        <span class="nav-text">
                                            Survey
                                        </span>
                                    </a>
                            </li><!--Menu-item-->
                            <li><i class="icon-Add nav-thumbnail"></i>
                                    <a href="<?php echo('Buyer')?>">
                                        <span class="nav-text">
                                            Buyer
                                        </span>
                                    </a>
                            </li><!--Menu-item-->
                        </ul>
                    </div>
                    <!-- aside content end-->
                </div>
                <!-- aside hidden scroll end-->
                <div class="aside-footer p-3 pl-25">
                    <div class="">
                        App Version - 1.0
                    </div>
                </div>
                <!-- aside footer end-->
            </div>
            <!-- sidenav end-->
        </aside>
        <!-- page-aside end-->
        <div class="page-wrapper" id="page-wrapper"> 
            <main class="content">
                <header class="navbar page-header whiteHeader navbar-expand-lg">
                    <ul class="nav flex-row mr-auto">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link sidenav-btn h-lg-down">
                                <span class="navbar-toggler-icon"></span>
                            </a>
                            <a class="nav-link sidenav-btn h-lg-up" href="#page-aside"  data-toggle="dropdown" data-target="#page-aside">
                                <span class="navbar-toggler-icon"></span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav flex-row order-lg-2 ml-auto nav-icons">
                         <li class="nav-item dropdown user-dropdown align-items-center">
                            <a class="nav-link" href="#" id="dropdown-user" role="button" data-toggle="dropdown">
                                <span class="user-states states-online">
                                    <img src="assets/images/avatar.png" width="35" alt="" class=" img-fluid rounded-circle">
                                </span>
                                <span class="ml-2 h-lg-down dropdown-toggle">
                                <?php echo $this->session->userdata('fname'); ?>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                                <div class="text-center p-3 pt-0 b-b mb-5">
                                    <span class="mb-0 d-block font300 text-title fs-1x"><span class="font700"><?php echo $this->session->userdata('fname'); ?></span></span>
                                    <span class="fs12 mb-0 text-muted">Administrator</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="icon-Key"></i>Change password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo('logout')?>"><i class="icon-Power"></i> logout</a>
                            </div>
                        </li>
                        <li class="h-lg-up nav-item">
                            <a href="#" class=" nav-link collapsed" data-toggle="collapse" data-target="#navbarToggler" aria-expanded="false">
                                <i class="icon-Magnifi-Glass2"></i>
                            </a>
                        </li>
                    </ul>
                </header>
                <div class="page-subheader mb-30">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb no-padding bg-trans mb-0">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-Home mr-2 fs14"></i></a></li>
                                        <li class="breadcrumb-item">Dashboard</li>
                                        <li class="breadcrumb-item active">Default </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div><!-- page-sub-Header end-->
                <div class="page-content d-flex flex">
                <div style="width:100%">
                  <?php
                  if($isi || $isi!=''){
                  $this->load->view($isi);
                  }
                  else
                  {
                  $this->load->view('Home/home');
                  }
                  ?>
                  </div>
                </div> <!-- page-content end -->
                <footer class="content-footer bg-light b-t">
                    <div class="d-flex flex align-items-center pl-15 pr-15">
                        <div class="d-flex flex p-3 mr-auto justify-content-end">
                            <div class="text-muted">© Copyright 2020.</div>
                        </div>
                    </div>
                </footer><!-- footer end-->
            </main>  
        </div>
    </div>
    
    <script type="text/javascript" src="assets/Content/js/appUi-custom.js"></script> 
        <script src="assets/Content/js/sweetalert2.min.js"></script>    
        <!-- <script type="text/javascript" src="assets/Content/lib/chartjs/dist/chart.min.js"></script>-->
        <script type="text/javascript" src="assets/Content/lib/peity/jquery.peity.min.js"></script>
        <!--<script src="assets/Content/lib/chartist/chartist.min.js"></script>
        <script src="assets/Content/lib/chartist/chartist-tooltip.js"></script>
        
		    <script type="text/javascript" src="assets/Content/js/dashboard.custom.js"></script> 
        -->
        <!-- jvectormap -->
        <script src="assets/Content/lib/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/Content/lib/vector-map/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript">

Dropzone.autoDiscover = false;
        function waitMsg() {
            swal({
                title: 'Please wait!',
                showCancelButton: false, // There won't be any cancel button
                showConfirmButton: false, // There won't be any confirm button
                imageUrl: 'assets/images/loading.gif',
                imageWidth: 100,
                imageHeight: 100,
                imageAlt: 'Loading image',
            });
        }
         
        function successMsg(titleMsg,message) {
            swal({
                    title: titleMsg,
                    text: message,
                    type: 'success',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                })
        }

        function errMsg(title, message) {
            swal({
                title: title,
                text: message,
                type: 'error',
                confirmButtonClass: 'btn btn-confirm mt-2'
            })
        }

        function confirm(title, message) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success mt-2',
                cancelButtonClass: 'btn btn-danger ml-2 mt-2',
                buttonsStyling: false
            }).then(function () {
                swal({
                    title: 'Deleted !',
                    text: "Your file has been deleted",
                    type: 'success',
                    confirmButtonClass: 'btn btn-confirm mt-2'
                }
                )
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === 'cancel') {
                    swal({
                        title: 'Cancelled',
                        text: "Action has been cancelled",
                        type: 'error',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    }
                    )
                }
            })
        }

        $(".allownumericwithdecimal").on("keypress keyup blur",function (event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
            $(this).val($(this).val().replace(/[^0-9\.]/g,''));
                    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                        event.preventDefault();
                    }
        });

        $(".currencyInput").keyup(function(){
            $( this ).val( formatAmount( $( this ).val() ) );
        });

        function formatAmountNoDecimals( number ) {
            var rgx = /(\d+)(\d{3})/;
            while( rgx.test( number ) ) {
                number = number.replace( rgx, '$1' + '.' + '$2' );
            }
            return number;
        }

        function formatAmount( number ) {
            // remove all the characters except the numeric values
            number = number.replace( /[^0-9]/g, '' );

            // set the default value
            if( number.length == 0 ) number = "0.00";
            else if( number.length == 1 ) number = "0.0" + number;
            else if( number.length == 2 ) number = "0." + number;
            else number = number.substring( 0, number.length - 2 ) + '.' + number.substring( number.length - 2, number.length );

            // set the precision
            number = new Number( number );
            number = number.toFixed( 2 );    // only works with the "."

            // change the splitter to ","
            number = number.replace( /\./g, ',' );

            // format the amount
            x = number.split( ',' );
            x1 = x[0];
            x2 = x.length > 1 ? ',' + x[1] : '';

            return formatAmountNoDecimals( x1 ) + x2;
            }
        </script>
  </body>