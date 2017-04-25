<h2><?= strtoupper($controller); ?>/PROXIMOS COBROS</h2>

<button class="btn btn-danger" onclick="document.location = '<?php echo site_url('reportes/descargar/4') ?>'"><i class="glyphicon glyphicon-download"></i>EXPORTAR</button>
<br>

<br>
<table border="0" cellpadding="5" cellspacing="5" style="margin-bottom: -5%;margin-left: -10px">
    <tbody><tr>
            <td>Fecha inicio:</td>
            <td>
                <div id="datetimepicker0" class="input-append date">
                   
                    <input data-format="yyyy-MM-dd" type="text" name="fecha_inicio" id="fecha_inicio"  value="" class="form-control" style="width: 120px;float:left"></input>
                    <span class="add-on" style="float:right;">
                        <i data-time-icon="icon-time" data-date-icon="icon-calendar" class="fa fa-calendar"></i>
                    </span>
                </div>
            </td>
      
            <td>Fecha fin:</td>
            <td>
                <div id="datetimepicker1" class="input-append date">
                    
                    <input data-format="yyyy-MM-dd" type="text" name="fecha_fin" id="fecha_fin" value="" class="form-control" style="width: 120px;float:left"></input>
                    <span class="add-on" style="float:right;">
                        <i data-time-icon="icon-time" data-date-icon="icon-calendar" class="fa fa-calendar"></i>
                    </span>
                </div>
            </td>
            <td> <button type="button" id="btnSave" onclick="table.draw();" class="btn btn-primary">Filtrar</button></td>
        </tr>
    </tbody>
</table>
<table id="table" class="table table-striped table-bordered" cellspacing="0" style="width:100%;margin-left: -35px;">
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Fecha</th>
            <th>Monto</th>
            <th>Ejecutivo</th>
        </tr>
    </thead>
    <tbody>
    </tbody>

    <tfoot>
        <tr>
            <th>Cliente</th>
            <th>Fecha</th>
            <th>Monto</th>
            <th>Ejecutivo</th>
        </tr>
    </tfoot>
</table>

<script type="text/javascript">

    var save_method; //for save method string
    var table;

    $(document).ready(function () {

        /* Custom filtering function which will search data in column four between two values */
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = parseInt( $('#fecha_inicio').val(), 10 );
                var max = parseInt( $('#fecha_fin').val(), 10 );
                var age = parseFloat( data[0] ) || 0; // use data for the age column

                if ( ( isNaN( min ) && isNaN( max ) ) ||
                     ( isNaN( min ) && age <= max ) ||
                     ( min <= age   && isNaN( max ) ) ||
                     ( min <= age   && age <= max ) )
                {
                    return true;
                }
                return false;
            }
        );
        
        table = $('#table').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "bPaginate": false,
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado )",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url($controller . '/a_cobrar') ?>",
                "type": "POST",
                "data": function ( d ) {
                    d.fechaInicio = $("#fecha_inicio").val();
                    d.fechaFin = $("#fecha_fin").val();
                    // d.custom = $('#myInput').val();
                    // etc
                }
            },
            /*"aoColumnDefs": [
             { "bSortable": true, "aTargets": [ 0, 1,2,3,4,5 ] }
             ]*/
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //last column
                    "orderable": false, //set not orderable
                },
            ],
        });
        $('#datetimepicker0').datetimepicker();
        $('#datetimepicker1').datetimepicker();
    });

</script>