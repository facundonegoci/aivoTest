<body>

    <!-- begin:topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="topbar-nav topbar-left">
                        <li class="disabled"><a href="https://www.facebook.com/slinardipropiedades/"><i class="fa fa-envelope"></i> info@slinardipropiedades.com</a></li>
                        <li class="disabled"><a href="https://www.facebook.com/slinardipropiedades/"><i class="fa fa-phone"></i> 4483-2526 - 15 3547-4637</a></li>
                         <li class="disabled"><a href="https://www.facebook.com/slinardipropiedades/"><i class="fa fa-clock-o"></i>Lunes a Viernes de 14hs a 19hs y Sabado de 9hs a 13hs </a></li>
                    </ul>
                    <!--<ul class="topbar-nav topbar-right">
                        <li><a href="#modal-login" class="login" data-toggle="modal" data-target="#modal-login"><i class="fa fa-user"></i>Log in</a></li>
                        <li><a href="#modal-signin" class="signin" data-toggle="modal" data-target="#modal-signin"><i class="fa fa-pencil"></i>Sign in</a></li>
                    </ul>
                    -->
                </div>
            </div>
        </div>
    </div>
    <!-- end:topbar -->

    <!-- begin:navbar -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('web/index'); ?>" id="logo_h"><img id="img_logo_h" src="<?=  base_url(); ?>web/images/slp.png" alt="Sergio Linardi Propiedades"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-top">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php echo ($opcion=='index')? 'active':''; ?>"><a href="<?php echo site_url('web/index'); ?>">Inicio</a></li>
            
                    <li class="<?php echo (($opcion=='propiedades')||($opcion=='propiedad'))? 'active':''; ?>">
                        <a href="<?php echo site_url('web/propiedades'); ?>">Propiedades</a>
                       
                    </li>
                    <li class="<?php echo ($opcion=='about')? 'active':''; ?>">
                        <a href="<?php echo site_url('web/about'); ?>" >Quienes Somos</a>
                        
                    </li>
                     <li class="<?php echo ($opcion=='servicios')? 'active':''; ?>">
                        <a href="<?php echo site_url('web/servicios'); ?>">Servicios</a>
                        
                    </li>
                    <li class="<?php echo ($opcion=='contacto')? 'active':''; ?>">
                        <a href="<?php echo site_url('web/contacto'); ?>" >Contacto </a>
                       
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <!-- end:navbar -->