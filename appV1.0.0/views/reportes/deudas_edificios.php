<h2><?= strtoupper($controller); ?>/CAJA POR EDIFICIO</h2>

<button class="btn btn-danger" onclick="document.location='<?php echo site_url('reportes/descargar/3') ?>'"><i class="glyphicon glyphicon-download"></i>EXPORTAR</button>
<br>

<table id="table" class="table table-striped table-bordered" cellspacing="0" style="font-size: 13px">
    <thead>
        <tr>
            <th>Edificio</th>
            <th>Presupuesto</th>
            <th>Total a pagar</th>
            <th>Total Cuotas</th>
            <th>Cuota</th>
            <th>Pagado</th>
            <th>Ultimo pago</th>
            <th>Deuda</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    </tbody>

    <tfoot>
        <tr>
            <th>Edificio</th>
            <th>Presupuesto</th>
            <th>Total a pagar</th>
            <th>Total Cuotas</th>
            <th>Cuota</th>
            <th>Pagado</th>
            <th>Ultimo pago</th>
            <th>Deuda</th>
            <th>Acciones</th>
        </tr>
    </tfoot>
</table>


<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title2">Vencimientos</h3>

            </div>
            <div class="modal-body form">
                
                <table id="items" class="table table-striped table-bordered" cellspacing="0" style="width:100%;">
                    <thead>
                        <tr>
                            <th style="width: 300px">Fecha</th>
                            <th>Monto</th>
                            <th>Cuota</th>
                            <th>Pagado</th>
                            <th>Debe</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<script type="text/javascript">

    var save_method; //for save method string
    var table;

    $(document).ready(function () {
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
                "url": "<?php echo site_url($controller . '/deudas_por_edificio') ?>",
                "type": "POST"
            },
            /*"aoColumnDefs": [
             { "bSortable": true, "aTargets": [ 0, 1,2,3,4,5 ] }
             ]*/
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    //"targets": [1,2,3,4,5,6,7,8,9,10,11,12,13,14], //last column
                    "orderable": false, //set not orderable
                },
            ],
        });
    });
    
    function get_vencimientos(idedificio, idventa) {

        if (typeof table_items !== "undefined") {
            table_items.destroy();
        }
        table_items = $('#items').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "bFilter": false,
            "paging": false,
            "ordering": false,
            "info": false,
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
                "url": "<?php echo site_url('reportes/get_vencimientos_edificio') ?>/" + idventa+"/"+idedificio,
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
    
        $('#modal_form').modal('show'); // show bootstrap modal
    }

</script>
