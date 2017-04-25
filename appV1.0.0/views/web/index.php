<!-- begin:header --> 
<div id="header" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

        <?php
        $i = 0;
        $active = '';
        foreach ($banners as $banner):
            if ($i == 0)
                $active = 'active';

            $component_link = parse_url($banner->link);
            ?>

        <div class="item <?php echo $active; ?>" style="background-image: url(<?= base_url() . str_replace('_thumb', '', $banner->file); ?>);">
                <div class="carousel-caption hidden-xs">
                    <h3><?php echo $banner->titulo; ?></h3>
                    <p><?php echo nl2br($banner->descripcion); ?></p>
                    <!--<div class="features">
                        <span class="status">For Sales</span>
                        <span><i class="fa fa-hdd-o"></i> 3 Bed</span>
                        <span><i class="fa fa-male"></i> 2 Bath</span>
                        <span><i class="fa fa-car"></i> 1 Garages</span>
                        <span><i class="fa fa-home"></i> 3,000 m<sup>2</sup></span>
                    </div>
                    -->
                    <br><br>
                    <div class="property-btn">
                        <a href="<?php echo (isset($component_link['scheme'])) ? $banner->link : 'http://' . $banner->link; ?>" class="btn btn-warning btn-lg">VER MAS</a>
                    </div>
                </div>
            </div>

            <?php
            $i = 1;
            $active = '';
        endforeach;
        ?>

    </div>
    <a class="left carousel-control" href="#header" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#header" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<!-- end:header -->

<!-- begin:search -->
<div class="the-search">
    <div class="container">
        <div class="row">
            <?php echo form_open('web/propiedades'); ?>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="form-group">
                    <label for="localidad_id">Localidad</label>
                    <?php echo form_dropdown('localidad_id', $localidades, '', 'class="form-control"'); ?>

                </div>
                <div class="form-group">
                    <label for="moneda_operacion_id">Moneda</label>
                    <?php echo form_dropdown('moneda_operacion_id', $monedas, (isset($filters['moneda_operacion_id']) && (!empty($filters['moneda_operacion_id']))) ? $filters['moneda_operacion_id'] : 0, 'class="form-control"'); ?>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="form-group">
                    <label for="tipo_operaciones_id">Tipo operacion</label>
                    <?php echo form_dropdown('tipo_operaciones_id', $tipo_operaciones, '', 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <label for="precio_min">Precio minimo</label>
                    <input name="precio_min" placeholder="" class="form-control" type="number">
                </div>

            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="form-group">
                    <label for="tipo_propiedades_id">Tipo propiedad</label>
                    <?php echo form_dropdown('tipo_propiedades_id', $tipo_propiedades, '', 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <label for="precio_max">Precio Max</label>
                    <input name="precio_max" placeholder="" class="form-control" type="number">
                </div>

            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-3 col-xs-6">

                <div class="form-group">
                    <label for="apto_banco">Apto Banco</label>
                    <select id="apto_banco" class="form-control">
                        <option value=""></option>
                        <option value="0">Si</option>
                        <option value="1">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dormitorios">Dormitorios</label>
                    <input name="dormitorios" placeholder="dormitorios" class="form-control" type="number">
                </div>
                <div class="form-group">
                    <label for="submit">&nbsp;</label>
                    <input id="submit" type="submit" name="submit" value="Buscar" class="btn btn-success btn-block">
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- end:search -->

<!-- begin:content -->
<div class="content">
    
    <div class="container">

        <!-- begin:last-property -->
        <div class="row">
            
            <div class="col-md-12">
                
                <div class="heading-title">
                
                    <h1>Propiedades destacadas</h1>
                
                </div>
            
            </div>
        
        </div>
        
        <div class="row equal container-property ">

            <?php foreach ($propiedades as $propiedad): ?>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="property-container" style="height:100%;">
                        <div class="property-image" style="height:268px; overflow: hidden">
                            <img src="<?= base_url() . $propiedad->file; ?>" alt="<?php echo $propiedad->direccion ?> - Sergio Linardi Propiedades" style="max-height: 305px">
                            <div style="background-color: #fe9900;color: #fff; display: inline-block;left: 0;   padding: 0 10px;    position: absolute; top: 0;"><h5 style="color: #fff;  font-weight: 400;"><?php echo $propiedad->tipo_propiedad; ?></h5></div>
                            <div class="property-status">
                                <h5><?php echo $propiedad->tipo_operacion ?></h5>
                            </div>
                        </div>
                        <div class="property-features">
                            <span><i class="fa fa-home"></i> <?php echo $propiedad->superficie_lote ?></span>
                            <span><i class="fa fa-hdd-o"></i> <?php echo $propiedad->dormitorios; ?> Dor.</span>
                            <span><i class="fa fa-male"></i> <?php echo $propiedad->banios; ?> Baños</span>
                            <?php //(isset($propiedad->garage)&&($propiedad->garage >0))?'<span><i class="fa fa-car"></i>'.$propiedad->garage.' Garages</span>':'' ?>
                            <?php (isset($propiedad->piso) && ($propiedad->piso > 0)) ? '<span><i class="fa fa-building-o"></i> ' . $propiedad->piso . '</span>' : '' ?>
                        </div>
                        <div class="property-content">
                            <h3 style="height: 24px">
                                <a href="<?php echo site_url('web/propiedad/' . $propiedad->id); ?>"><?php echo $propiedad->direccion; ?></a> 
                                <a href="#" style="float:right;"></a> 

                            </h3>
                            <small><i><?php echo $propiedad->localidad; ?></i></small>
                            <div style="max-height: 50px; height: 50px;overflow: hidden"><p ><?php echo nl2br(substr($propiedad->descripcion, 0, 60)); ?>...</p></div>
                            <div class="property-price">
                                <h2>
                                    <?php if ($propiedad->mostrar_monto == 0): ?>
                                        <?php echo $propiedad->simbolo_moneda ?><?php echo $propiedad->monto_operacion ?> <small></small>
                                    <?php else: ?>CONSULTE<?php endif; ?>
                                    <a class="btn btn-success" href="<?php echo site_url('web/propiedad/' . $propiedad->id); ?>" style="float:right;">
                                        Ver mas
                                    </a>

                                </h2>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- break -->

            <?php endforeach; ?>

        </div>

        <!-- begin:pagination 
        <div class="row"> 
            <div class="col-md-12">
                <div class="text-center">
                    <ul class="pagination">
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end:pagination -->

        <!-- end:last-property -->

        <!-- begin:featured-property -->
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title">
                    <h2>Ultimas Propiedades.</h2>
                </div>
            </div>
        </div>
        <div class="row container-property equal">

            <?php foreach ($propiedades as $propiedad): ?>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="property-container">
                        <div class="property-content-list">
                            <div class="property-image-list" >
                                <img src="<?= base_url() . $propiedad->file; ?>" alt="<?php echo $propiedad->direccion ?> - Sergio Linardi Propiedades" style="height: 305px">
                                <div class="property-status">
                                    <h5><?php echo $propiedad->tipo_operacion ?></h5>
                                </div>
                                <div class="property-price">
                                    <h5><?php echo $propiedad->tipo_propiedad; ?></h5>
                                </div>
                            </div>
                            <div class="property-text">
                                <h3><a href="#"><?php echo $propiedad->direccion; ?> </a> <small><?php echo $propiedad->localidad; ?></small></h3>
                                <p><?php echo nl2br(substr(strtolower($propiedad->descripcion), 0, 60)); ?>...

                                    <a class="btn btn-success" href="<?php echo site_url('web/propiedad/' . $propiedad->id); ?>" style="float:right;">
                                        Ver mas
                                    </a>
                                </p>

                            </div>
                        </div>
                        <div class="property-features">

                            <span><i class="fa fa-home"></i> <?php echo $propiedad->superficie_lote ?></span>
                            <span><i class="fa fa-hdd-o"></i> <?php echo $propiedad->dormitorios; ?> Dor.</span>
                            <span><i class="fa fa-male"></i> <?php echo $propiedad->banios; ?> Baños</span>
                            <?php (isset($propiedad->piso) && ($propiedad->piso > 0)) ? '<span><i class="fa fa-building-o"></i> ' . $propiedad->piso . '</span>' : '' ?>
                        </div>
                    </div>
                </div>
                <!-- break -->
            <?php endforeach; ?>    

        </div>

        <!-- begin:pagination -
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <ul class="pagination">
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end:pagination -->

        <!-- end:featured-property -->

    </div>
</div>
<!-- end:content -->

<!-- begin:service -->
<div id="featured" style="background-image: url(<?= base_url(); ?>web/img/img_01.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-4 col-xs-12">
                <div class="featured-container">
                    <div class="featured-icon">
                        <a href="<?php echo site_url('web/servicios/'); ?>"><i class="fa fa-star"></i></a>
                    </div>
                    <div class="featured-content">
                        <h3>Venta</h3>
                        <p>Publicamos su propiedad en los principales diarios inmobiliarios y en el diario de mayor tirada de nuestra ciudad...</p>
                        <a href="<?php echo site_url('web/servicios/'); ?>">Ver mas <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-5 col-sm-4 col-xs-12">
                <div class="featured-container">
                    <div class="featured-icon">
                        <a href="<?php echo site_url('web/servicios/'); ?>"><i class="fa fa-star"></i></a>
                    </div>
                    <div class="featured-content">
                        <h3>Alquiler</h3>
                        <p>Analizamos a los futuros locatarios, solicitando en el Registro de la Propiedad Inmueble los informes de dominios correspondientes a las garantías ofrecidas...</p>
                        <a href="<?php echo site_url('web/servicios/'); ?>">Ver mas <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class="col-md-5 col-sm-4 col-xs-12">
                <div class="featured-container">
                    <div class="featured-icon">
                        <a href="<?php echo site_url('web/servicios/'); ?>"><i class="fa fa-star"></i></a>
                    </div>
                    <div class="featured-content">
                        <h3>Tasaciones</h3>
                        <p>Tasamos su propiedad a su valor real de mercado. Contamos con herramientas tecnológicas que nos ayudan en nuestro trabajo...</p>
                        <a href="<?php echo site_url('web/servicios/'); ?>">Ver mas <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- break -->
            
            <div class="col-md-5 col-sm-4 col-xs-12">
                <div class="featured-container">
                    <div class="featured-icon">
                        <a href="<?php echo site_url('web/servicios/'); ?>"><i class="fa fa-star"></i></a>
                    </div>
                    <div class="featured-content">
                        <h3>Administracion alquileres</h3>
                        <p>Servicios de administración del alquiler de propiedades, sea residencial, industrial o comercial...</p>
                        <a href="<?php echo site_url('web/servicios/'); ?>">Ver mas <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- break -->
            
        </div>
    </div>  
</div>
<!-- end:service -->
