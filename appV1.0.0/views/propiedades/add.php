<style>
    .form-horizontal .control-label{ text-align: left;}
    .col-md-1{ padding: 0px;}
</style>    
<!-- Bootstrap modal -->
<div class="modalx fadex" id="modal_form" role="dialogx">
    <div class="modal-dialogx">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title">Formulario <?= $controller ?></h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <input type="hidden" value="" name="file" id="file"/>
                    <div class="form-body">

                        <div class="form-group">

                            <label class="control-label col-md-1">N&deg; Ficha <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <input name="codigo" placeholder="codigo" class="form-control" type="text" required="">
                            </div>

                            <label class="control-label col-md-1">Fecha</label>
                            <div class="col-md-2">
                                <input name="fecha_tasacion" placeholder="fecha" class="form-control" type="text" required="">
                            </div>

                            <label class="control-label col-md-1">Tipo operacion <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <?php echo form_dropdown('tipo_operacion_id', $tipo_operaciones, '', 'class="form-control"'); ?>
                            </div>

                            <label class="control-label col-md-1">Monto operacion <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <input name="monto_operacion" placeholder="monto_operacion" class="form-control" type="text" required="">
                            </div>

                        </div>

                        <div class="form-group">

                            <label class="control-label col-md-1">Propietario </label>
                            <div class="col-md-2">
                                <input name="propietario" placeholder="propietario" class="form-control" type="text" required="">
                            </div>

                            <label class="control-label col-md-1">Email </label>
                            <div class="col-md-2">
                                <input name="propietario_email" placeholder="Email propietario" class="form-control" type="text" required="">
                            </div>

                            <label class="control-label col-md-1">Telefonos </label>
                            <div class="col-md-2">
                                <input name="propietarios_telefonos" placeholder="Telefonos propietario" class="form-control" type="text" required="">
                            </div>

                            <label class="control-label col-md-1">Moneda operacion <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <?php echo form_dropdown('moneda_operacion_id', $monedas, '', 'class="form-control"'); ?>
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="control-label col-md-1">Apto banco</label>
                            <div class="col-md-2">
                                <select name="apto_banco" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Expensas</label>
                            <div class="col-md-2">
                                <select name="expensas" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Monto expensas</label>
                            <div class="col-md-2">
                                <input name="monto_expensas" placeholder="monto_expensas" class="form-control" type="text" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-1">Localidad <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <?php echo form_dropdown('localidad_id', $localidades, '', 'class="form-control"'); ?>
                            </div>

                            <label class="control-label col-md-1">Direccion <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <input name="direccion" placeholder="direccion" class="form-control" type="text" required="">
                            </div>

                            <label class="control-label col-md-1">Piso</label>
                            <div class="col-md-2">
                                <input name="piso" placeholder="piso" class="form-control" type="text" >
                            </div>

                            <label class="control-label col-md-1">DEPTO</label>
                            <div class="col-md-2">
                                <input name="depto" placeholder="depto" class="form-control" type="text" >
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1">Entre calles <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <input name="entre_calles" placeholder="Entre calles" class="form-control" type="text" required="">
                            </div>

                            <label class="control-label col-md-1">Partido</label>
                            <div class="col-md-2">
                                <input name="partido" placeholder="Partido" class="form-control" type="text" >
                            </div>

                            <label class="control-label col-md-1">Tipo Inmueble <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <?php echo form_dropdown('tipo_propiedad_id', $tipo_propiedades, '', 'class="form-control"'); ?>
                            </div>

                            <label class="control-label col-md-1">Calidad inmueble <span style="color:red;">*</span></label>
                            <div class="col-md-2">

                                <?php echo form_dropdown('calidad_id', $calidades, '', 'class="form-control"'); ?>
                            </div>

                        </div>

                        <div class="form-group">

                            <label class="control-label col-md-1">Cant. ambientes <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <input name="ambientes" placeholder="Cantidad ambientes" class="form-control" type="number" required="">
                            </div>

                            <label class="control-label col-md-1">Antiguedad <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <input name="antiguedad" placeholder="antiguedad" class="form-control" type="number" required="">
                            </div>

                            <label class="control-label col-md-1">N&deg; pisos/Plantas</label>
                            <div class="col-md-2">
                                <input name="nro_pisos" placeholder="nro_pisos" class="form-control" type="number" required="">
                            </div>

                            <label class="control-label col-md-1">Dormitorios <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <input name="dormitorios" placeholder="dormitorios" class="form-control" type="number" required="">
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="control-label col-md-1">Ba&ntilde;os <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <input name="banios" placeholder="banios" class="form-control" type="number required="">
                            </div>

                            <label class="control-label col-md-1">Living</label>
                            <div class="col-md-2">
                                <select name="living" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Comedor</label>
                            <div class="col-md-2">
                                <select name="comedor" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Cocina</label>
                            <div class="col-md-2">
                                <select name="cocina" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-1">Patio</label>
                            <div class="col-md-2">
                                <select name="patio" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Garage</label>
                            <div class="col-md-2">
                                <select name="garage" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Terraza</label>
                            <div class="col-md-2">
                                <select name="terraza" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Lavadero</label>
                            <div class="col-md-2">
                                <select name="lavadero" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="control-label col-md-1">Piscina</label>
                            <div class="col-md-2">
                                <select name="piscina" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Jardin</label>
                            <div class="col-md-2">
                                <select name="jardin" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Fondo Libre</label>
                            <div class="col-md-2">
                                <select name="fondo_libre" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Quincho</label>
                            <div class="col-md-2">
                                <select name="quincho" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">

                            <label class="control-label col-md-1">Gas</label>
                            <div class="col-md-2">
                                <select name="gas" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Luz</label>
                            <div class="col-md-2">
                                <select name="luz" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Cloacas</label>
                            <div class="col-md-2">
                                <select name="cloacas" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Telefono</label>
                            <div class="col-md-2">
                                <select name="telefono" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            
                            <label class="control-label col-md-1">Agua</label>
                            <div class="col-md-2">
                                <select name="agua" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>
                            
                            <label class="control-label col-md-1">Sup. Total</label>
                            <div class="col-md-2">
                                <input name="superficie_lote" placeholder="superficie_lote" class="form-control" type="text" required="">
                            </div>

                            <label class="control-label col-md-1">Sup. construida</label>
                            <div class="col-md-2">
                                <input name="superficie_construida" placeholder="superficie_construida" class="form-control" type="text" required="">
                            </div>

                            <label class="control-label col-md-1">Sup. descubierta</label>
                            <div class="col-md-2">
                                <input name="superficie_descubierta" placeholder="superficie_descubierta" class="form-control" type="text" required="">
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="control-label col-md-1">Ubicación inmueble</label>
                            <div class="col-md-2">
                                <input name="ubicacion_en_planta" placeholder="Ubicación inmueble" class="form-control" type="text">
                            </div>

                            <label class="control-label col-md-1">Deptos por piso</label>
                            <div class="col-md-2">
                                <input name="deptos_por_piso" placeholder="deptos_por_piso" class="form-control" type="number" required="">
                            </div>

                            <label class="control-label col-md-1">Orientación</label>
                            <div class="col-md-2">
                                <input name="orientacion" placeholder="orientacion" class="form-control" type="text" required="">
                            </div>


                            <label class="control-label col-md-1">Estado propiedad <span style="color:red;">*</span> </label>
                            <div class="col-md-2">

                                <?php echo form_dropdown('estado_id', $estados_propiedades, '', 'class="form-control"'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-1">Orden <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <input name="orden" class="form-control" type="number">
                            </div>

                            <label class="control-label col-md-1">Mostrar <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <select name="mostrar" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Destacada <span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <select name="destacada" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>

                            <label class="control-label col-md-1">Mostrar monto<span style="color:red;">*</span></label>
                            <div class="col-md-2">
                                <select name="mostrar_monto" class="form-control">
                                    <option value="0">Si</option>
                                    <option value="1">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-1">Descripcion <span style="color:red;">*</span></label>
                            <div class="col-md-10">
                                <textarea name="descripcion" placeholder="descripcion" class="form-control" required=""></textarea>
                            </div>
                        </div>

                    </div>
                </form>

                <form action="<?= site_url("upload_file/upload_image") ?>" method="post" enctype="multipart/form-data" id="MyUploadForm">
                    <input type="hidden" value="840" name="width" id="width"/>
                    <input type="hidden" value="650" name="height" id="height"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Imagen <span style="color:red;">*</span></label>
                            <div class="col-md-4">
                                <input name="FileInput" class="form-control" id="FileInput" type="file" maxlength="45" required="required" onchange="$('#MyUploadForm').submit()">
                            </div>
                            <input type="submit"  id="submit-btn" value="Subir"  style="float: left"/>
                            <img src="<?php echo base_url(); ?>images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
                            <div id="progressbox"  style="float: left"><div id="progressbar"></div ><div id="statustxt">0%</div></div>
                            <div id="output" style="float: right;"></div>
                        </div>
                    </div> 
                </form>

                <div class="alert alert-danger" id="errores" style="display:none;"></div>

            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<script type="text/javascript">

    var save_method = '<?= $accion ?>'; //for save method string
    var table;


    $(document).ready(function () {
        if (save_method == 'update') {
            edit_obj(<?php echo $id_propiedad; ?>);
        }
    });


    function add_obj()
    {
        save_method = 'add';

    }

    function edit_obj(id)
    {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url($controller . '/ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function (data)
            {
                $('[name="id"]').val(data.id);
                $('[name="tipo_propiedad_id"]').val(data.tipo_propiedad_id);
                $('[name="tipo_operacion_id"]').val(data.tipo_operacion_id);
                $('[name="monto_operacion"]').val(data.monto_operacion);
                $('[name="localidad_id"]').val(data.localidad_id);
                $('[name="dormitorios"]').val(data.dormitorios);
                $('[name="patio"]').val(data.patio);
                $('[name="banios"]').val(data.banios);
                $('[name="antiguedad"]').val(data.antiguedad);
                $('[name="garage"]').val(data.garage);
                $('[name="apto_banco"]').val(data.apto_banco);
                $('[name="estado_id"]').val(data.estado_id);
                $('[name="superficie_lote"]').val(data.superficie_lote);

                $('[name="tamanio_lote"]').val(data.tamanio_lote);
                $('[name="nro_pisos"]').val(data.nro_pisos);
                $('[name="orientacion"]').val(data.orientacion);
                $('[name="deptos_por_piso"]').val(data.deptos_por_piso);
                $('[name="superficie_construida"]').val(data.superficie_construida);
                $('[name="ascensores_priv"]').val(data.ascensores_priv);

                $('[name="ascensores_serv"]').val(data.ascensores_serv);

                $('[name="luminosidad"]').val(data.luminosidad);

                $('[name="ubicacion_en_planta"]').val(data.ubicacion_en_planta);

                $('[name="piso"]').val(data.piso);

                $('[name="ambientes"]').val(data.ambientes);

                $('[name="patio"]').val(data.patio);
                $('[name="direccion"]').val(data.direccion);
                $('[name="zona_barrio_id"]').val(data.zona_barrio_id);
                $('[name="descripcion_zona"]').val(data.descripcion_zona);
                $('[name="descripcion"]').val(data.descripcion);
                $('[name="codigo"]').val(data.codigo);
                $('[name="moneda_operacion_id"]').val(data.moneda_operacion_id);
                $('[name="expensas"]').val(data.expensas);
                $('[name="monto_expensas"]').val(data.monto_expensas);
                $('[name="calidad_id"]').val(data.calidad_id);
                $('[name="orden"]').val(data.orden);
                $('[name="mostrar"]').val(data.mostrar);
                $('[name="destacada"]').val(data.destacada);
                $('[name="mostrar_monto"]').val(data.mostrar_monto);

                $('[name="piscina"]').val(data.piscina);
                $('[name="jardin"]').val(data.jardin);
                $('[name="living"]').val(data.living);
                $('[name="comedor"]').val(data.comedor);
                $('[name="cocina"]').val(data.cocina);
                $('[name="superficie_construida"]').val(data.superficie_construida);
                $('[name="luz"]').val(data.luz);
                $('[name="gas"]').val(data.gas);
                $('[name="telefono"]').val(data.telefono);
                $('[name="cloacas"]').val(data.cloacas);
                $('[name="lavadero"]').val(data.lavadero);
                $('[name="terraza"]').val(data.terraza);
                $('[name="agua"]').val(data.agua);
                $('[name="entre_calles"]').val(data.entre_calles);
                $('[name="partido"]').val(data.partido);
                $('[name="depto"]').val(data.depto);
                $('[name="propietario"]').val(data.propietario);
                $('[name="propietario_email"]').val(data.propietario_email);
                $('[name="propietario_telefonos"]').val(data.propietario_telefonos);
                $('[name="fecha_tasacion"]').val(data.fecha_tasacion);

                //$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Editar'); // Set title to Bootstrap modal title

                $("#output").html("<img style='width:80px;' src='" + base_url + data.file + "'>");

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function save()
    {
        var url;
        if (save_method == 'add')
        {
            url = "<?php echo site_url($controller . '/ajax_add') ?>";
        } else
        {
            url = "<?php echo site_url($controller . '/ajax_update') ?>";
        }

        // ajax adding data to database
        $.ajax({
            url: url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function (data)
            {
                if (data.status == false) {
                    $('#errores').show();
                    $('#errores').html('');
                    $('#errores').html(data.errores);

                } else {
                    $('#errores').hide();
                    $('#modal_form').modal('hide');
                    document.location = "<?php echo site_url($controller) ?>";
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error al guardar');
            }
        });
    }


</script>