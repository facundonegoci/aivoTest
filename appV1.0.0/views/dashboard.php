<!DOCTYPE HTML>
<html>
    <head>
        <title><?= $nombre_sistema ?> | MTKSTUDIO </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo base_url(); ?>images/MTKMAIL.ico" type="image/x-icon" rel="shortcut icon">
        <meta name="keywords" content="" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
        <!-- font CSS -->
        <!-- font-awesome icons -->
        <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons -->
        <!-- js-->
        <!--webfonts-->
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!--//webfonts--> 
        <!--animate-->
        <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/dhtmlxscheduler_flat.css" type="text/css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/clndr.css" type="text/css" />
        <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>" rel="stylesheet">

        <link href="<?php echo base_url('css/bootstrap-datetimepicker.min.css') ?>" rel="stylesheet">

        <script src="<?php echo base_url('js/jquery/jquery-2.1.4.min.js') ?>"></script>
        <script src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>

        <script src="<?php echo base_url(); ?>js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
        <!-- chart -->
        <script src="<?php echo base_url(); ?>js/Chart.js"></script>
        <!-- //chart -->
        <!--Calender-->

        <script src="<?php echo base_url(); ?>js/underscore-min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/moment-2.2.1.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/clndr.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/site.js" type="text/javascript"></script>
        <!--End Calender-->
        <!-- Metis Menu -->
        <script src="<?php echo base_url(); ?>js/metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>js/custom.js"></script>
        <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">

        <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/media/js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/media/js/dataTables.bootstrap.js') ?>"></script>

        <script src="<?php echo base_url('js/js_mtk.js') ?>"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.form.min.js"></script>
        <script src="<?php echo base_url(); ?>js/uploads_images.js" type="text/javascript"></script>
        <!--//Metis Menu -->
    </head> 
    <body class="cbp-spmenu-push">

        <div class="main-content">

            <!--left-fixed -navigation-->
            <div class=" sidebar" role="navigation" style="/*width: 18%*/">
                <div class="navbar-collapse">
                    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1" style="/*width:17.5%;*/background:#5cb85c">
                        <ul class="nav" id="side-menu">
                            <?php echo $Mymenu; ?>
                        </ul>
                        <!-- //sidebar-collapse -->
                    </nav>
                </div>
            </div>
            <!--left-fixed -navigation-->

            <!-- header-starts -->
            <div class="sticky-header header-section ">
                <div class="header-left">
                    <!--toggle button start-->
                    <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                    <!--toggle button end-->
                    <!--logo -->
                    <div class="logo" style="background: #5cb85c">
                        <a href="#">
                            <h1><?= $nombre_sistema ?></h1>
                            <span>MTKSTUDIO</span>
                        </a>
                    </div>
                    <!--//logo-->
                    <!--search-box-->
                    <div class="search-box">
                        <img src="<?= base_url() ?>/images/ring-alt.gif" style="display: none;width: 50px" id="loader2"/> 
                    </div><!--//end-search-box-->
                    <div class="clearfix"> </div>
                </div>
                <div class="header-right">
                    <div class="profile_details_left"><!--notifications of menu start -->
                        <ul class="nofitications-dropdown">
                            
                        <div class="clearfix"> </div>
                    </div>
                    <!--notification menu end -->
                    <div class="profile_details">		
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">	
                                        <span class="prfil-img"><img src="<?= base_url().$imagen_user ?>" alt="" style="width: 50px;height: 50px"> </span> 
                                        <div class="user-name">
                                            <p><?= $usuarioactual ?></p>
                                            <span><?= $rol_usuarioactual ?></span>
                                        </div>
                                        <i class="fa fa-angle-down lnr"></i>
                                        <i class="fa fa-angle-up lnr"></i>
                                        <div class="clearfix"></div>	
                                    </div>	
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <!--<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                                    <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> -->
                                    <li> <a href="<?php echo site_url('verifylogin/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>				
                </div>
                <div class="clearfix"> </div>	
            </div>
            <!-- //header-ends -->
            <div id="page-wrapper" style="/*margin-left: 18%*/">
                <div class="main-page">
                    <?php if ($this->uri->segment(1) == "turnos"): ?> <div class="row-one" style="height: 1200px"> <?php else: ?><div class="row-one"><?php endif; ?>

                            <?php echo $output; ?>

                        </div>
                    </div>
                </div>

                <!--footer-->
                <div class="footer">
                    <p>&copy; <?= date("Y"); ?> <?= $nombre_sistema ?>. </p>
                </div>
                <!--//footer-->
            </div>
            <!-- Classie -->


            <div id="loader" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content"> 
                        <div class="modal-header">
                            <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>-->
                            <h4 class="modal-titlex" id="mySmallModalLabel">Trabajando por favor espere...</h4> 
                        </div> 
                        <div class="modal-body" style="text-align: center"> 

                            <img src="<?= base_url() ?>/images/ring-alt.gif"/> 

                        </div>
                    </div>
                </div>
            </div>
            <script>
                        (function () {
                            var proxied = window.XMLHttpRequest.prototype.send;
                            window.XMLHttpRequest.prototype.send = function () {
                                console.log(arguments);
                                $('#loader2').show();
                                //Here is where you can add any code to process the request. 
                                //If you want to pass the Ajax request object, pass the 'pointer' below
                                var pointer = this
                                var intervalId = window.setInterval(function () {
                                    if (pointer.readyState != 4) {
                                        return;
                                    }
                                    console.log(pointer.responseText);
                                    //Here is where you can add any code to process the response.
                                    //If you want to pass the Ajax request object, pass the 'pointer' below
                                     $('#loader2').hide();
                                    clearInterval(intervalId);

                                }, 1);//I found a delay of 1 to be sufficient, modify it as you need.
                                return proxied.apply(this, [].slice.call(arguments));
                            };


                        })();
            </script>

            <script src="<?php echo base_url(); ?>js/classie.js"></script>
            <script>
                var menuLeft = document.getElementById('cbp-spmenu-s1'),
                        showLeftPush = document.getElementById('showLeftPush'),
                        body = document.body;

                showLeftPush.onclick = function () {
                    classie.toggle(this, 'active');
                    classie.toggle(body, 'cbp-spmenu-push-toright');
                    classie.toggle(menuLeft, 'cbp-spmenu-open');
                    disableOther('showLeftPush');
                };


                function disableOther(button) {
                    if (button !== 'showLeftPush') {
                        classie.toggle(showLeftPush, 'disabled');
                    }
                }
            var base_url = '<?= base_url() ?>';
            var base_url_upload = '<?= $url_images ?>';
            </script>
            <!--scrolling js-->
            <script src="<?php echo base_url(); ?>js/jquery.nicescroll.js"></script>
            <script src="<?php echo base_url(); ?>js/scripts.js"></script>
            <script src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.min.js"></script>
            <!--//scrolling js-->

    </body>
</html>