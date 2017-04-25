
<div class="page-header" style="background-image: url(<?= base_url(); ?>web/img/slide01.jpg);">
    <div class="container page-header-content">
        <div class="row">
            <div class="col-sm-7">
                <h2 class="header-title">Contacto</h2>
            </div>

            <div class="col-sm-5">
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Inicio</a></li>
                    <li class="active">Contacto</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- begin:content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="map"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-sm-12 col-md-offset-1">
                <div class="contact-info">
                    <div class="col-sm-3">
                        <div class="contact-box">
                            <i class="fa fa-map-marker"></i>
                            <h4>Dirección</h4>
                            <address>
                                Republica Oriental del Urugual 325, Moron, Buenos Aires
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contact-box">
                            <i class="fa fa-phone"></i>
                            <h4>Teléfonos</h4>
                            <address>
                                (011) 4483-2526<br>
                                15 3547-4637
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contact-box">
                            <i class="fa fa-envelope"></i>
                            <h4>Email</h4>
                            <address>
                                info@slinardipropiedades.com<br>
                                consultas@slinardipropiedades.com
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contact-box">
                            <i class="fa fa-clock-o"></i>
                            <h4>Horario Atencion</h4>
                            <address>
                                Lunes a Viernes de 14hs a 19hs y Sabado de 9hs a 13hs
                            </address>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- break -->

        <div class="row">
            <div class="col-md-10 col-sm-12 col-md-offset-1">
                <div class="row">
                    <?php echo form_open('web/send_contacto'); ?>
                    <div class="contact-form">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre">Nombre *</label>
                                <input id="nombre" name="nombre" type="text" class="form-control input-lg" placeholder="Nombre : " required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input id="email" name="email" type="email" class="form-control input-lg" placeholder="Email : " required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input id="telefono" name="telefono" type="text" class="form-control input-lg" placeholder="Teléfono : ">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="mensaje">Mensaje *</label>
                                <textarea id="mensaje" name="mensaje" class="form-control input-lg" rows="7" placeholder="Mensajes :" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-block btn-success" value="Enviar">
                            </div>
                        </div>
                    </div>   
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <!-- break -->
    </div>
</div>
<!-- end:content -->