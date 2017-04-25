<div class="page-header" style="background-image: url(<?= base_url(); ?>web/img/slide01.jpg);">
    <div class="container page-header-content">
        <div class="row">
            <div class="col-sm-7">
                <h2 class="header-title">PROPIEDADES</h2>
            </div>

            <div class="col-sm-5">
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Inicio</a></li>
                    <li class="active">Propiedades</li>
                </ol>
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

                <!-- begin:product -->
                <div class="row container-property equal">
                    
                    <?php if (count($propiedades) > 0): ?>
                    
                        <?php foreach ($propiedades as $propiedad): ?>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="property-container" style="height:100%;">
                                    
                                    <div class="property-image">
                                        
                                        <img src="<?= base_url() . $propiedad->file; ?>" alt="<?php echo $propiedad->direccion ?> - Sergio Linardi Propiedades" style="height: 305px">
                                        <div style="background-color: #fe9900;color: #fff; display: inline-block;left: 0;   padding: 0 10px;    position: absolute; top: 0;"><h5 style="color: #fff;  font-weight: 400;"><?php echo $propiedad->tipo_propiedad; ?></h5></div>
                                        <div class="property-status">
                                            <h5><?php echo $propiedad->tipo_operacion ?></h5>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="property-features">
                                        
                                        <?php if (!empty($propiedad->superficie_lote))  ?><span><i class="fa fa-home"></i><?php echo $propiedad->superficie_lote ?></span>
                                        
                                        <span><i class="fa fa-hdd-o"></i> <?php echo $propiedad->dormitorios; ?> Dor.</span>
                                        
                                        <span><i class="fa fa-male"></i> <?php echo $propiedad->banios; ?> Baños</span>
                                        
                                        <?php //(isset($propiedad->garage)&&($propiedad->garage >0))?'<span><i class="fa fa-car"></i>'.$propiedad->garage.' Garages</span>':'' ?>
                                        
                                        <?php (isset($propiedad->piso) && ($propiedad->piso > 0)) ? '<span><i class="fa fa-building-o"></i> ' . $propiedad->piso . '</span>' : '' ?>
                                    
                                    </div>
                                    
                                    <div class="property-content">
                                        
                                        <h3>
                                            <a href="<?php echo site_url('web/propiedad/' . $propiedad->id); ?>"><?php echo $propiedad->direccion; ?></a> 
                                            <a href="#" style="float:right;"></a> 
                                            <small><?php echo $propiedad->localidad; ?></small>
                                        </h3>
                                        
                                        <p style="height: 75px"><?php echo nl2br(substr($propiedad->descripcion, 0, 60)); ?>...</p>

                                        <div class="property-price">
                                            <h2><?php if ($propiedad->mostrar_monto == 0): ?>
                                                    <?php echo $propiedad->simbolo_moneda ?><?php echo $propiedad->monto_operacion ?> <small></small>
                                                <?php else: ?>CONSULTE<?php endif; ?> <small></small>

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

                    <?php else: ?>     
                        <h1>No se encontraron propiedades</h1>
                    <?php endif; ?>     
                </div>
                <!-- end:product -->

                <!-- begin:pagination -->
                <div class="row text-center">
                    <div class="col-md-12">

                        <?php echo $pagination; ?>

                    </div>
                </div>
                <!-- end:pagination -->
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

                <!--<div class="widget">
                    <div class="widget-header">
                        <h3>Tipo de Propiedad</h3>
                    </div>    
                    <ul class="list-check">
                        <li><a href="#">Casa</a>&nbsp;(23)</li>
                        <li><a href="#">Departamento</a>&nbsp;(43)</li>
                        <li><a href="#">Local</a>&nbsp;(50)</li>
                        <li><a href="#">Terreno</a>&nbsp;(11)</li>
                    </ul>
                </div>-->
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

                                            <?php if ($destacada->superficie_lote != '')  ?><span><i class="fa fa-home"></i><?php echo $destacada->superficie_lote ?> / </span>
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
                                            <?php if ($last->superficie_lote != '')  ?><span><i class="fa fa-home"></i><?php echo $last->superficie_lote ?> / </span>
                                            <span><i class="fa fa-hdd-o"></i><?php echo $last->dormitorios; ?> Dor. / </span>
                                            <span><i class="fa fa-male"></i><?php echo $last->banios; ?> Baños / </span>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </div>
                        <!-- end:recent-post -->

                    </div>
                </div>
                <!-- break 

                <div class="widget">
                    <div class="widget-header">
                        <h3>Nuestra Empresa</h3>
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

                    </div>
                </div>
                <!-- break -->

            </div>
            <!-- end:sidebar -->

        </div>
    </div>
</div>
<!-- end:content -->