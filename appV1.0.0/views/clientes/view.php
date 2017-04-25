<h2><?= strtoupper($controller); ?></h2>
<?=$otros_acciones;?>
<br />
<br />
<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>CUIT</th>
            <th>Direccion</th>
            <th>Email</th>
            <th>Telefono</th>

            <th style="width:80px;">Acciones</th>
        </tr>
    </thead>
    <tbody>
    </tbody>

    <tfoot>
        <tr>
            <th>Nombre</th>
            <th>CUIT</th>
            <th>Direccion</th>
            <th>Email</th>
            <th>Telefono</th>    
            <th>Acciones</th>
        </tr>
    </tfoot>
</table>


<script type="text/javascript">

    var save_method; //for save method string
    var table;

    $(document).ready(function () {
        table = $('#table').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url($controller . '/ajax_list') ?>",
                "type": "POST"
            },
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [-1], //last column
                    "orderable": false, //set not orderable
                },
            ],
        });
    });

    function add_obj()
    {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Agregar'); // Set Title to Bootstrap modal title
        $("#cliente_id").val('-9999');
        
        load_edificios( $("#cliente_id").val());
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
                $('[name="nombre"]').val(data.nombre);
                $("#nombre").val("");
                $('[name="cuit"]').val(data.cuit);
                $('[name="provincia"]').val(data.provincia);
                $('[name="localidad"]').val(data.localidad);
                $('[name="cp"]').val(data.cp);
                $('[name="direccion"]').val(data.direccion);
                $('[name="email"]').val(data.email);
                $('[name="telefono"]').val(data.telefono);
                $('[name="vendedor_id"]').val(data.vendedor_id);
                $('[name="observaciones"]').val(data.observaciones);

                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Editar'); // Set title to Bootstrap modal title
                $("#cliente_id").val(data.id);
                load_edificios( $("#cliente_id").val());
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function reload_table()
    {
        table.ajax.reload(null, false); //reload datatable ajax
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
                    reload_table();
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error al guardar');
            }
        });
    }

    function save_edificio(){
        
        url = "<?php echo site_url('edificios/ajax_add') ?>";
  
        // ajax adding data to database
        $.ajax({
            url: url,
            type: "POST",
            data: $('#form_edificio').serialize(),
            dataType: "JSON",
            success: function (data)
            {
                if (data.status == false) {
                    $('#errores').show();
                    $('#errores').html('');
                    $('#errores').html(data.errores);
                } else {
                    $('#errores').hide();
                    $('#errores').html('');
                    $('#nombre').val('');
                    load_edificios($("#cliente_id").val());
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error al guardar');
            }
        });
    }
    
    function delete_edificio(edificio_id){
       
        if (confirm('Esta seguro que desea eliminar?'))
        {
            // ajax delete data to database
            $.ajax({
                url: "<?php echo site_url('edificios/ajax_delete') ?>/" + edificio_id,
                type: "POST",
                dataType: "JSON",
                success: function (data)
                {
                    load_edificios($("#cliente_id").val());

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error al eliminar edificio');
                }
            });
        }
    }
    
    function load_edificios(cliente_id){

        // ajax adding data to database
        $.ajax({
            url: "<?php echo site_url('edificios/get_by_cliente') ?>/"+cliente_id,
            type: "POST",
            data: $('#form_edificio').serialize(),
           
            success: function (data)
            {
              $("#listado_edificios").html(data);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error al obtener edificios');
            }
        });
    }
    
    function delete_obj(id)
    {
        if (confirm('Esta seguro que desea eliminar?'))
        {
            // ajax delete data to database
            $.ajax({
                url: "<?php echo site_url($controller . '/ajax_delete') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function (data)
                {
                    $('#modal_form').modal('hide');
                    reload_table();

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error al eliminar');
                }
            });
        }
    }

</script>
<style>
    .modal .modal-dialog { width: 65%; }
</style>
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Formulario <?= $controller ?></h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body" style="padding: 5px">
                        <div class="form-group">
                            <label class="control-labelx col-md-2">Nombre <span style="color:red;">*</span></label>
                            <div class="col-md-4">
                                <input name="nombre" placeholder="Nombre" class="form-control" type="text" maxlength="200">
                            </div>
                        
                            <label class="control-labelx col-md-2">CUIT <span style="color:red;">*</span></label>
                            <div class="col-md-4">
                                <input name="cuit" placeholder="CUIT" class="form-control" type="text" maxlength="12">
                                 
                            </div>
                           
                        </div>

                        <div class="form-group">
                            <label class="control-labelx col-md-2">Provincia</label>
                            <div class="col-md-4">
                                <input name="provincia" placeholder="Provincia" class="form-control" type="text"  maxlength="45">
                            </div>
                        
                            <label class="control-labelx col-md-2">Localidad</label>
                            <div class="col-md-4">
                                <input name="localidad" placeholder="Localidad" class="form-control" type="text"  maxlength="45">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-labelx col-md-2">CP</label>
                            <div class="col-md-4">
                                <input name="cp" placeholder="CP" class="form-control" type="text">
                            </div>
                        
                            <label class="control-labelx col-md-2">Direccion <span style="color:red;">*</span></label>
                            <div class="col-md-4">
                                <input name="direccion" placeholder="Direccion" class="form-control" type="text"  maxlength="150">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-labelx col-md-2">Email</label>
                            <div class="col-md-4">
                                <input name="email" placeholder="Email" class="form-control" type="email"  maxlength="80">
                            </div>
                        
                            <label class="control-labelx col-md-2">Telefono <span style="color:red;">*</span></label>
                            <div class="col-md-4">
                                <input name="telefono" placeholder="Telefono" class="form-control" type="text"  maxlength="45">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-labelx col-md-2 label_left">Ejecutivo <span style="color:red;">*</span></label>
                            <div class="col-md-4" >         
                            <?php echo form_dropdown('vendedor_id', $vendedores, "", 'class="form-control"'); ?>
                            </div>            
                        </div>
                        
                        <div class="form-group">
                            <label class="control-labelx col-md-2">Observaciones</label>
                            <div class="col-md-10">
                                <textarea name="observaciones" placeholder="Observaciones" class="form-control"></textarea>
                            </div>
                        </div>
                        <span style="color:red;">* Campos obligatorios</span>    
                        <div class="alert alert-danger" id="errores" style="display:none;"></div>
                    </div>
                </form>
                
                <form class="form-inline" id="form_edificio" onsubmit="return false;">
                    <div class="form-group" style="padding: 15px">
                      <label for="nombre">Edificio</label>
                      <input type="text" class="form-control" id="nombre" name="nombre">
                      <input type="hidden" class="form-control" id="cliente_id" name="cliente_id">
                    </div>
                    
                    <button class="btn btn-primary" onclick="save_edificio();">Grabar edificio</button>
                  </form>
                  <div id="listado_edificios" style="overflow: auto; height: 400px"></div> 
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->