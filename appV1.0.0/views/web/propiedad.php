<div class="page-header" style="background-image: url(<?php echo base_url() ?>web/img/slide01.jpg);">
    <div class="container page-header-content">
        <div class="row">
            <div class="col-sm-7">
                <h2 class="header-title"><?php echo $propiedad->tipo_propiedad; ?> en <?php echo $propiedad->tipo_operacion; ?></h2>
                <i class="property-location"><?php echo $propiedad->direccion; ?>, <?php echo $propiedad->localidad; ?></i>
                <h3 class="property-price">

                    <?php
                    if ($propiedad->mostrar_monto == 0) {
                        echo $propiedad->simbolo_moneda;
                        echo $propiedad->monto_operacion;
                    } else {
                        echo 'CONSULTE';
                    }
                    ?><small></small></h3>
            </div>

        </div>
    </div>
</div>
<!-- begin:content -->
<div class="content">
    <div class="container">
        <div class="row">
            <!-- begin:article -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12 single-post">

                        <div class="row">
                            <div class="col-md-12">

                                <?php //$images = explode(',', $propiedad->images);  ?>

                                <div class="slider carousel slide" data-ride="carousel">

                                    <ol class="carousel-indicators">

                                        <li data-target=".slider" data-slide-to="0" class="active">
                                            <!--<img src="<?php echo base_url() . $propiedad->file ?>" alt="Sergio Linardi Propiedades">-->
                                        </li>

                                        <?php $i = 1; ?>

                                        <?php foreach ($images as $image): ?>

                                            <?php if (!empty($image)): ?>

                                                <li data-target=".slider" data-slide-to="<?php echo $i; ?>">

                                                                <!-- <img src="<?php echo base_url() . $image->file ?>" alt="Sergio Linardi Propiedades">-->

                                                </li>
                                            <?php endif; ?>

                                            <?php $i++; ?>

                                        <?php endforeach; ?>

                                    </ol>

                                    <div class="carousel-inner">

                                        <div class="item active">
                                            <img src="<?php echo base_url() . $propiedad->file ?>" alt="Sergio Linardi Propiedades">
                                        </div>

                                        <?php $i = 1; ?>

                                        <?php foreach ($images as $image): ?>

                                            <?php if (!empty($image)): ?>

                                                <div class="item ">

                                                    <img src="<?php echo base_url() . $image->file ?>" alt="Sergio Linardi Propiedades" style="max-height:630px;">

                                                </div>

                                            <?php endif; ?>

                                            <?php $i++; ?>

                                        <?php endforeach; ?>

                                        <a class="carousel-control-prev" href=".slider" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href=".slider" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>

                                    </div>

                                </div>
                                <div class="property-features-single">
                                    <span class="status"><?php echo $propiedad->tipo_operacion; ?></span>
                                    <span><i class="fa fa-hdd-o"></i> <?php echo $propiedad->dormitorios; ?> Dormitorios</span>
                                    <span><i class="fa fa-male"></i> <?php echo $propiedad->banios; ?> Ba&ntilde;os</span>
                                    <span><i class="fa fa-home"></i> <?php echo $propiedad->superficie_lote; ?></span>
                                    <span><i class="fa fa-cog"></i> Codigo <?php echo $propiedad->codigo; ?></span>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="heading-title">
                                            <h3 class="text-left">Caracteristicas</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">  	
                                    <div class="col-md-4 col-sm-4">
                                        <ul class="list-unstyled list-featured">
                                            <li><strong>Precio:</strong> <?php
                                                if ($propiedad->mostrar_monto == 0) {
                                                    echo $propiedad->simbolo_moneda;
                                                    echo $propiedad->monto_operacion;
                                                } else {
                                                    echo 'CONSULTE';
                                                }
                                                ?></li>
                                            <li><strong>Ambientes:</strong> <?php echo $propiedad->ambientes ?></li>
                                            <li><strong>Codigo:</strong> <?php echo $propiedad->codigo ?></li>
                                            <li><strong>Dormitorios:</strong> <?php echo $propiedad->dormitorios; ?></li>
                                            <!--<li><strong>Fecha:</strong> <?php echo $propiedad->fecha_insert ?></li>-->
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <ul class="list-unstyled list-featured">
                                            <li><strong>Superficie total:</strong> <?php echo $propiedad->superficie_lote; ?></li>
                                            <li><strong>Superficie construida:</strong> <?php echo $propiedad->superficie_construida; ?></li>
                                            <li><strong>Superficie descubierta:</strong> <?php echo $propiedad->superficie_descubierta; ?></li>
                                            <li><strong>Antigüedad:</strong> <?php echo $propiedad->antiguedad; ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <ul class="list-unstyled list-featured">

                                            <li><strong>Baños:</strong> <?php echo $propiedad->banios; ?></li>
                                            <li><strong>Patio:</strong> <?php echo ($propiedad->patio == 0) ? 'SI' : 'NO'; ?></li>
                                            <li><strong>Zona/Barrio:</strong> <?php echo $propiedad->zona_barrio_id; ?></li>
                                            <li><strong>Descripcion zona:</strong> <?php echo $propiedad->descripcion_zona; ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <ul class="list-unstyled list-featured">

                                            <li><strong>N&deg; Pisos:</strong> <?php echo $propiedad->nro_pisos; ?></li>
                                            <li><strong>Piso:</strong> <?php echo $propiedad->piso; ?></li>
                                            <li><strong>Ubicacion en planta:</strong> <?php echo $propiedad->ubicacion_en_planta; ?></li>
                                            <li><strong>Orientacion:</strong> <?php echo $propiedad->orientacion; ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <ul class="list-unstyled list-featured">

                                            <li><strong>Deptos por piso:</strong> <?php echo $propiedad->deptos_por_piso; ?></li>
                                            <li><strong>Calidad:</strong> <?php echo $propiedad->calidad; ?></li>
                                            <li><strong>Estado:</strong> <?php echo $propiedad->estado; ?></li>
                                            <li><strong>Luminosidad:</strong> <?php echo $propiedad->luminosidad; ?></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                        <ul class="list-unstyled list-featured">
                                            <li><strong>Patio:</strong> <?php echo ($propiedad->patio == 0) ? 'SI' : 'NO'; ?></li>
                                            <li><strong>Garage:</strong> <?php echo ($propiedad->garage == 0) ? 'SI' : 'NO'; ?></li>
                                            <li><strong>Terraza:</strong> <?php echo ($propiedad->terraza == 0) ? 'SI' : 'NO'; ?></li>
                                            <li><strong>Lavadero:</strong> <?php echo ($propiedad->lavadero == 0) ? 'SI' : 'NO'; ?></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                        <ul class="list-unstyled list-featured">
                                            <li><strong>Cocina:</strong> <?php echo ($propiedad->cocina == 0) ? 'SI' : 'NO'; ?></li>
                                            <li><strong>Piscina:</strong> <?php echo ($propiedad->piscina == 0) ? 'SI' : 'NO'; ?></li>
                                            <li><strong>Living:</strong> <?php echo ($propiedad->living == 0) ? 'SI' : 'NO'; ?></li>
                                            <li><strong>Comedor:</strong> <?php echo ($propiedad->comedor == 0) ? 'SI' : 'NO'; ?></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                        <ul class="list-unstyled list-featured">
                                            <li><strong>Agua:</strong> <?php echo ($propiedad->agua == 0) ? 'SI' : 'NO'; ?></li>
                                            <li><strong>Gas:</strong> <?php echo ($propiedad->gas == 0) ? 'SI' : 'NO'; ?></li>
                                            <li><strong>Luz:</strong> <?php echo ($propiedad->luz == 0) ? 'SI' : 'NO'; ?></li>
                                            <li><strong>Cloacas:</strong> <?php echo ($propiedad->cloacas == 0) ? 'SI' : 'NO'; ?></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                        <ul class="list-unstyled list-featured">
                                            <li><strong>Telefono:</strong> <?php echo ($propiedad->telefono == 0) ? 'SI' : 'NO'; ?></li>
                                            <li><strong>Quincho:</strong> <?php echo ($propiedad->quincho == 0) ? 'SI' : 'NO'; ?></li>
                                            <li><strong>Jardin:</strong> <?php echo ($propiedad->jardin == 0) ? 'SI' : 'NO'; ?></li>
                                            <li><strong>Fondo libre:</strong> <?php echo ($propiedad->fondo_libre == 0) ? 'SI' : 'NO'; ?></li>
                                        </ul>
                                    </div>

                                </div>

                                <!--<div class="row">
                                    <div class="col-md-12">
                                        <div class="heading-title">
                                            <h3 class="text-left">Property Overview</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <ul class="list-unstyled list-featured">
                                            <li><i class="fa fa-check"></i>Attic</li>
                                            <li><i class="fa fa-check"></i>Wine Cellar</li>
                                            <li><i class="fa fa-times"></i>Pound</li>
                                            <li><i class="fa fa-check"></i>Pool</li>
                                            <li><i class="fa fa-times"></i>Fenced Yard</li>
                                            <li><i class="fa fa-check"></i>Deck</li>
                                            <li><i class="fa fa-check"></i>Concierge</li>
                                            <li><i class="fa fa-times"></i>Storage</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <ul class="list-unstyled list-featured">
                                            <li><i class="fa fa-check"></i>Gas Heat</li>
                                            <li><i class="fa fa-times"></i>Basketball Court</li>
                                            <li><i class="fa fa-check"></i>Fireplace</li>
                                            <li><i class="fa fa-times"></i>Back Yard</li>
                                            <li><i class="fa fa-times"></i>Sprinkles</li>
                                            <li><i class="fa fa-check"></i>Balcony</li>
                                            <li><i class="fa fa-times"></i>Doomrman</li>
                                            <li><i class="fa fa-times"></i>Recreation</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <ul class="list-unstyled list-featured">
                                            <li><i class="fa fa-times"></i>Ocean View</li>
                                            <li><i class="fa fa-check"></i>Gym</li>
                                            <li><i class="fa fa-times"></i>Lake View</li>
                                            <li><i class="fa fa-check"></i>Front Yard</li>
                                            <li><i class="fa fa-times"></i>Washer and Dryer</li>
                                            <li><i class="fa fa-check"></i>Laundry</li>
                                            <li><i class="fa fa-check"></i>Private Space</li>
                                            <li><i class="fa fa-check"></i>Roof Deck</li>
                                        </ul>
                                    </div>                          
                                </div>-->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="heading-title">
                                            <h3 class="text-left">Descripcion</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p><?php echo nl2br($propiedad->descripcion); ?></p>
                                        <div id="map-property"></div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <!-- break -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading-title">
                                    <h3 class="text-left">Consultar por esta propiedad</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="team-container">

                                    <div class="team-description">

                                        <p><i class="fa fa-home"></i> Rep. Oriental del Urugual 325, Moron, Pcia. Bs. As.<br>
                                            <i class="fa fa-mobile"></i> Telefono : (011) 4483-2526<br>
                                            <i class="fa fa-mobile"></i> Cel. :  15 3547-4637<br>
                                        </p>
                                        <p>Somos una empresa joven motivada por el optimismo y la confianza en el futuro del país. Abocados completamente a satisfacer las necesidades de nuestros clientes, asesorando y acompañándolos durante todo el proceso de búsqueda y post venta. Nos ocupamos personalmente de cada Cliente en forma dedicada, práctica con dinamismo y flexibilidad. Contamos con la colaboración de profesionales de primer nivel en las áreas contable, jurídica, técnica y notarial.</p>
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <!--<a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-youtube"></i></a>
                                            <a href="#"><i class="fa fa-skype"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>-->
                                        </div>                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <?php echo form_open('web/contacto_propiedad', array('class' => 'agent-contact-form')); ?>
                                <!--<form class="agent-contact-form">-->
                                <input type="hidden" id="propiedad_id" name="propiedad_id" value="<?php echo $propiedad->id ?>">
                                <input type="hidden" id="cogio_propiedad" name="cogio_propiedad" value="<?php echo $propiedad->codigo ?>">
                                <div class="form-group">
                                    <label for="nombre">Nombre *</label>
                                    <input id="nombre" name="nombre" type="text" class="form-control input-lg" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input id="email" name="email" type="email" class="form-control input-lg" placeholder=" " required="">
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Telefono</label>
                                    <input id="telefono" name="telefono"  type="text" class="form-control input-lg" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label for="mensaje">Mensaje *</label>
                                    <textarea id="mensaje" name="mensaje"  class="form-control input-lg" rows="4" placeholder="" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Enviar consulta" class="btn btn-block btn-success">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end:article -->

            <!-- begin:sidebar -->
            <div class="col-md-3 sidebar">
                <div class="widget">
                    <div class="widget-header">
                        <h3>Filtro</h3>
                    </div>    
                    <div class="row">
                        <?php echo form_open('web/propiedades', array('id' => 'filtro')); ?>
                        <input type="hidden" id="page" name="page" value="<?php echo (isset($page) && (!empty($page))) ? $page : 0 ?>">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="localidad_id">Localidad</label>
                                <?php echo form_dropdown('localidad_id', $localidades, (isset($filters['localidad_id']) && (!empty($filters['localidad_id']))) ? $filters['localidad_id'] : 0, 'class="form-control"'); ?>
                            </div>
                            <div class="form-group">
                                <label for="tipo_operaciones_id">Tipo operacion</label>
                                <?php echo form_dropdown('tipo_operaciones_id', $tipo_operaciones, (isset($filters['tipo_operacion_id']) && (!empty($filters['tipo_operacion_id']))) ? $filters['tipo_operacion_id'] : 0, 'class="form-control"'); ?>
                            </div>
                            <div class="form-group">
                                <label for="tipo_propiedades_id">Tipo propiedad</label>
                                <?php echo form_dropdown('tipo_propiedades_id', $tipo_propiedades, (isset($filters['tipo_propiedad_id']) && (!empty($filters['tipo_propiedad_id']))) ? $filters['tipo_propiedad_id'] : 0, 'class="form-control"'); ?>
                            </div>
                            <div class="form-group">
                                <label for="moneda_operacion_id">Moneda</label>
                                <?php echo form_dropdown('moneda_operacion_id', $monedas, (isset($filters['moneda_operacion_id']) && (!empty($filters['moneda_operacion_id']))) ? $filters['moneda_operacion_id'] : 0, 'class="form-control"'); ?>
                            </div>
                            <div class="form-group">
                                <label for="precio_min">Precio minimo</label>
                                <input name="precio_min" placeholder="" class="form-control" type="number" value="<?php echo (isset($filters['precio_min']) && (!empty($filters['precio_min']))) ? $filters['precio_min'] : 0 ?>">
                            </div>
                            <div class="form-group">
                                <label for="precio_max">Precio Max</label>
                                <input name="precio_max" placeholder="" class="form-control" type="number" value="<?php echo (isset($filters['precio_max']) && (!empty($filters['precio_max']))) ? $filters['precio_max'] : 0 ?>">
                            </div>

                            <div class="form-group">
                                <label for="dormitorios">Dormitorios</label>
                                <input name="dormitorios" placeholder="dormitorios" class="form-control" type="number" value="<?php echo (isset($filters['dormitorios']) && (!empty($filters['dormitorios']))) ? $filters['dormitorios'] : 0 ?>">
                            </div>
                            <div class="form-group">
                                <label for="apto_banco">Apto Banco</label>
                                <select id="apto_banco" class="form-control">
                                    <option value=""></option>
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="submit">&nbsp;</label>
                                <a href="#" class="btn btn-success btn-block" onclick="$('#page').val(0);$('#filtro').submit();">Filtrar</a>
                                <!--<input id="submit" type="submit" name="submit" value="Filtrar" class="btn btn-success btn-block">-->
                            </div>
                        </div>
                        <!-- break -->
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <!-- break -->

                <div class="widget-sidebar">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#popular" data-toggle="tab" title="Propiedades destacadas"><i class="fa fa-star-o"></i></a></li>
                        <li class=""><a href="#recent" data-toggle="tab" title="Propiedades mas recientes"><i class="fa fa-clock-o"></i></a></li>
                    </ul>

                    <div id="myTabContent" class="widget tab-content">
                        <!-- begin:popular-post -->
                        <div class="tab-pane fade active in" id="popular">

                            <?php foreach ($propiedades_destacadas as $destacada): ?>

                                <div class="post-container">
                                    <div class="post-img" style="background: url(<?= base_url() . $destacada->file; ?>);"><h3><?php echo $destacada->tipo_operacion; ?></h3></div>
                                    <div class="post-content">
                                        <div class="heading-title">
                                            <h2><a href="<?php echo site_url('web/propiedad/' . $destacada->id); ?>">
                                                    <?php echo $destacada->direccion; ?> - 
                                                    <span><?php if ($destacada->mostrar_monto == 0): ?>
                                                            <?php echo $destacada->simbolo_moneda ?><?php echo $destacada->monto_operacion ?>
                                                        <?php else: ?>CONSULTE<?php endif; ?></span></a>
                                            </h2>
                                        </div>
                                        <div class="post-meta">

                                            <span><i class="fa fa-home"></i><?php echo $destacada->superficie_lote ?> / </span>
                                            <span><i class="fa fa-hdd-o"></i><?php echo $destacada->dormitorios; ?> Dor. / </span>
                                            <span><i class="fa fa-male"></i><?php echo $destacada->banios; ?> Baños / </span>

                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </div>
                        <!-- end:popular-post -->

                        <!-- begin:recent-post -->
                        <div class="tab-pane fade" id="recent">

                            <?php foreach ($last_propiedades as $last): ?>

                                <div class="post-container">
                                    <div class="post-img" style="background: url(<?= base_url() . $last->file; ?>);"><h3><?php echo $last->tipo_operacion; ?></h3></div>
                                    <div class="post-content">
                                        <div class="heading-title">
                                            <h2><a href="<?php echo site_url('web/propiedad/' . $last->id); ?>">
                                                    <?php echo $last->direccion; ?> - 
                                                    <span><?php if ($last->mostrar_monto == 0): ?>
                                                            <?php echo $last->simbolo_moneda ?><?php echo $last->monto_operacion ?>
                                                        <?php else: ?>CONSULTE<?php endif; ?></span></a>
                                            </h2>
                                        </div>
                                        <div class="post-meta">
                                            <span><i class="fa fa-home"></i><?php echo $last->superficie_lote ?> / </span>
                                            <span><i class="fa fa-hdd-o"></i><?php echo $last->dormitorios; ?> Dor. / </span>
                                            <span><i class="fa fa-male"></i><?php echo $last->banios; ?> Baños / </span>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </div>
                        <!-- end:recent-post -->
                    </div>

                    <!-- break 
                    <div class="widget">
                        <div class="widget-header">
                            <h3>La Empresa</h3>
                        </div>    
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                    </div>
                    <!-- break -->

                    <div class="widget">
                        <div class="widget-header">
                            <h3>Seguinos</h3>
                        </div>    
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook" style="width: 150px"> slinardipropiedades</i></a>
                            <!--<a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-flickr"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>-->
                        </div>
                    </div>
                    <!-- break -->

                </div>
                <!-- end:sidebar -->

            </div>
        </div>
    </div>
    <!-- end:content -->

    <style>

        .carousel-control-next, .carousel-control-prev {
            -moz-box-align: center;
            -moz-box-pack: center;
            align-items: center;
            bottom: 0;
            color: #fff;
            display: flex;
            justify-content: center;
            opacity: 0.5;
            position: absolute;
            text-align: center;
            top: 0;
            width: 15%;
        }
        .carousel-control-next:focus, .carousel-control-next:hover, .carousel-control-prev:focus, .carousel-control-prev:hover {
            color: #fff;
            opacity: 0.9;
            outline: 0 none;
            text-decoration: none;
        }
        .carousel-control-prev {
            left: 0;
        }
        .carousel-control-next {
            right: 0;
        }
        .carousel-control-next-icon, .carousel-control-prev-icon {
            background: transparent none no-repeat scroll center center / 100% 100%;
            display: inline-block;
            height: 20px;
            width: 20px;
        }
        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'%23fff\' viewBox=\'0 0 8 8\'%3E%3Cpath d=\'M4 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z\'/%3E%3C/svg%3E");
        }
        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'%23fff\' viewBox=\'0 0 8 8\'%3E%3Cpath d=\'M1.5 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z\'/%3E%3C/svg%3E");
        }



    </style>