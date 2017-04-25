<?php
$meses_vendido = array();

$meses_cobrado = array();

$meses_leidos = array();

for ($i = 1; $i <= 12; $i++) { //incializo el array, esto es por si hay meses sin valores, la consulta no va a dar esos meses.
    $meses_cobrado[$i] = 0;
    $meses_vendido[$i] = 0;
    $meses_leidos[$i] = 0;
    $meses[$i] = 0;
}

foreach ($enviados_mes as $obj) { //cargo el array de vendido por mes
    $meses_vendido[$obj->mes] = $obj->monto;
}

foreach ($error_mes as $obj) { //cargo el array de cobrado por mes
    $meses_cobrado[$obj->mes] = $obj->monto;
}

foreach ($leidos_mes as $obj) { //cargo el array de cobrado por mes
    $meses_leidos[$obj->mes] = $obj->monto;
}

$servicios_array = array();

foreach ($servicios_mes as $obj) {

    if (!isset($servicios_array[$obj->nombre])) {

        $servicios_array[$obj->nombre] = $meses;
    }

    $servicios_array[$obj->nombre][$obj->mes] = $obj->cantidad;
}
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>

<script src="<?php echo base_url() ?>js/pie-chart.js"></script>
<style>
    #map {
        height: 100%;
    }
    #capaMapa {
        background-color:white;
        width:100%;
        height:400px;

    }
</style>

<div class="row-one">
    <div class="col-md-4 widget">
        <div class="stats-left ">
            <h5><?= ucfirst($mes); ?></h5>
            <h4>Enviados</h4>
        </div>
        <div class="stats-right">
            <label><?= $enviados ?></label>
        </div>
        <div class="clearfix"> </div>	
    </div>
    <div class="col-md-4 widget states-mdl">
        <div class="stats-left">
            <h5><?= ucfirst($mes); ?></h5>
            <h4>Leidos</h4>
        </div>
        <div class="stats-right">
            <label><?= $leidos ?></label>
        </div>
        <div class="clearfix"> </div>	
    </div>
    <div class="col-md-4 widget states-last">
        <div class="stats-left">
            <h5><?= ucfirst($mes); ?></h5>
            <h4>Error/Rebotados</h4>
        </div>
        <div class="stats-right">
            <label><?= $error ?></label>
        </div>
        <div class="clearfix"> </div>	
    </div>
    <div class="clearfix"> </div>

    <!--<div class="col-md-4 widget states-last">
        <div id="demo-pie-1" class="pie-title-center" data-percent="25">
            <span class="pie-value">25%</span>
            <canvas height="100" width="100"></canvas>
            </div>
        <div class="clearfix"> </div>	
    </div>-->


</div>
<div class="charts">

    <div class="col-md-5 charts-grids widget" style="width: 49%;">
        <!--<h4 class="title">Ventas vs Cobros</h4>-->
        <div id="bar" height="300" width="400"> </div>
    </div>

    <div class="col-md-5 charts-grids widget states-mdl" style="width: 49%;margin-right: 0">

        <div id="line" height="300" width="400"> </div>
    </div>

    <div class="clearfix"> </div>

    <div class="col-md-3 charts-grids widget charts" style="width: 32%;">

        <div id="rebote" style="float:left;height:200px;width:100%;"> </div>

    </div>
    <div class="col-md-3 charts-grids widget charts" style="width: 32%;margin-left: 2%">

        <div id="clicks" style="float:left;height:200px;width:100%;"> </div>

    </div>

    <div class="col-md-5 charts-grids widget charts" style="width: 32%;margin-left: 2%">

        <div id="lecturas" style="float:left;height:200px;width:100%;"> </div>

    </div>

    <div class="clearfix"> </div>

    <div class="col-md-5 charts-grids widget charts" style="width: 32%;">

        <div id="envios" style="float:left;height:200px;width:100%;"> </div>
    </div>

    <div class="col-md-5 charts-grids widget charts" style="width: 32%;margin-left: 2%">

        <div id="lecturas_unicas" style="float:left;height:200px;width:100%;"> </div>
    </div>
    
    <div class="col-md-5 charts-grids widget charts" style="width: 32%;margin-left: 2%">

        <div id="suscriptores" style="float:left;height:200px;width:100%;"> </div>
    </div>

    <div class="clearfix"> </div>

    <script>

        $(function () {

            $('#bar').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Enviados vs Leidos vs Rebotados'
                },
                xAxis: {
                    categories: [
                        'En',
                        'Feb',
                        'Mar',
                        'Abr',
                        'May',
                        'Jun',
                        'Jul',
                        'Ago',
                        'Sep',
                        'Oct',
                        'Nov',
                        'Dic'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: ''
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y}</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                credits: {
                    enabled: false
                },
                exporting: {
                    enabled: false
                },
                series: [{
                        name: 'Enviados',
                        data: [<?php echo implode(",", $meses_vendido); ?>]

                    }, {
                        name: 'Leidos',
                        data: [<?php echo implode(",", $meses_leidos); ?>]

                    }, {
                        name: 'Error',
                        data: [<?php echo implode(",", $meses_cobrado); ?>]

                    }]
            });

            //graficos servicios
            $('#line').highcharts({
            chart: {
            type: 'areaspline'
            },
                    title: {
                    text: 'Comportamientos grupos(lecturas)'
                    },
                    legend: {
                    layout: 'vertical',
                            align: 'left',
                            verticalAlign: 'top',
                            x: 150,
                            y: 100,
                            floating: true,
                            borderWidth: 1,
                            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
                    },
                    xAxis: {
                    categories: [
                            'En',
                            'Feb',
                            'Mar',
                            'Abr',
                            'May',
                            'Jun',
                            'Jul',
                            'Ago',
                            'Sep',
                            'Oct',
                            'Nov',
                            'Dic'
                    ]
                    },
                    yAxis: {
                    title: {
                    text: 'Cantidad'
                    }
                    },
                    tooltip: {
                    shared: true,
                            valueSuffix: ' unidades'
                    },
                    credits: {
                    enabled: false
                    },
                    exporting: {
                    enabled: false
                    },
                    plotOptions: {
                    areaspline: {
                    fillOpacity: 0.5
                    }
                    },
                    series: [
<?php foreach ($servicios_array as $key => $obj): ?>
                        {
                        name: '<?= $key ?>',
                                data: [<?= implode(",", $obj) ?>]
                        },
<?php endforeach; ?>
                    ]
            });
                    var gaugeOptions = {
                        chart: {
                            type: 'solidgauge'
                        },
                        title: null,
                        pane: {
                            center: ['50%', '85%'],
                            size: '140%',
                            startAngle: -90,
                            endAngle: 90,
                            background: {
                                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                                innerRadius: '60%',
                                outerRadius: '100%',
                                shape: 'arc'
                            }
                        },
                        tooltip: {
                            enabled: false
                        },
                        // the value axis
                        yAxis: {
                            stops: [
                                [0.1, '#55BF3B'], // green
                                [0.5, '#DDDF0D'], // yellow
                                [0.9, '#DF5353'] // red
                            ],
                            lineWidth: 0,
                            minorTickInterval: null,
                            tickAmount: 2,
                            title: {
                                y: -70
                            },
                            labels: {
                                y: 16
                            }
                        },
                        plotOptions: {
                            solidgauge: {
                                dataLabels: {
                                    y: 5,
                                    borderWidth: 0,
                                    useHTML: true
                                }
                            }
                        }
                    };

            $('#rebote').highcharts(Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: 100,
                    title: {
                        text: '% Rebote'
                    }
                },
                credits: {
                    enabled: false
                },
                exporting: {
                    enabled: false
                },
                series: [{
                        name: '% Rebote',
                        data: [<?= $rebote ?>],
                        dataLabels: {
                            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                                    '<span style="font-size:12px;color:silver">%</span></div>'
                        },
                        tooltip: {
                            valueSuffix: ' %'
                        }
                    }]

            }));
            $('#clicks').highcharts(Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: 100,
                    title: {
                        text: '% Clicks'
                    }
                },
                credits: {
                    enabled: false
                },
                exporting: {
                    enabled: false
                },
                series: [{
                        name: '% Clicks',
                        data: [<?= $clicks ?>],
                        dataLabels: {
                            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                                    '<span style="font-size:12px;color:silver">%</span></div>'
                        },
                        tooltip: {
                            valueSuffix: ' %'
                        }
                    }]
            }));

            $('#lecturas').highcharts(Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: 100,
                    title: {
                        text: '% Lecturas'
                    }
                },
                credits: {
                    enabled: false
                },
                exporting: {
                    enabled: false
                },
                series: [{
                        name: '% Lecturas',
                        data: [<?= $lecturas ?>],
                        dataLabels: {
                            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                                    '<span style="font-size:12px;color:silver">%</span></div>'
                        },
                        tooltip: {
                            valueSuffix: ' %'
                        }
                    }]
            }));
            $('#lecturas_unicas').highcharts(Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: 100,
                    title: {
                        text: '% Lecturas unicas'
                    }
                },
                credits: {
                    enabled: false
                },
                exporting: {
                    enabled: false
                },
                series: [{
                        name: '% Lecturas unicas',
                        data: [<?= $lecturas_unicas ?>],
                        dataLabels: {
                            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                                    '<span style="font-size:12px;color:silver">%</span></div>'
                        },
                        tooltip: {
                            valueSuffix: ' %'
                        }
                    }]
            }));
            $('#envios').highcharts(Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: 100,
                    title: {
                        text: '% Enviados'
                    }
                },
                credits: {
                    enabled: false
                },
                exporting: {
                    enabled: false
                },
                series: [{
                        name: '% Enviados',
                        data: [<?= $enviadosp ?>],
                        dataLabels: {
                            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                                    '<span style="font-size:12px;color:silver">%</span></div>'
                        },
                        tooltip: {
                            valueSuffix: ' %'
                        }
                    }]

            }));
            
             $('#suscriptores').highcharts(Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: <?=$plan?>,
                    title: {
                        text: 'Suscriptores'
                    }
                },
                credits: {
                    enabled: false
                },
                exporting: {
                    enabled: false
                },
                series: [{
                        name: 'Suscriptores',
                        data: [<?= $total_suscriptores ?>],
                        dataLabels: {
                            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                                    '<span style="font-size:12px;color:silver"></span></div>'
                        },
                        tooltip: {
                            valueSuffix: ''
                        }
                    }]

            }));
        });
    </script>

</div>
<div class="row">

    <div class="col-md-4 stats-info widget">
        <div class="stats-title">
            <h4 class="title">Progreso ultimos envios</h4>
        </div>
        <div class="stats-body">
            <ul class="list-unstyled">

                <?php foreach ($envios_stats as $obj): ?>

                    <?php
                    $color = '';
                    if ($obj->perce > 0 && $obj->perce <= 20) {
                        $color = "red";
                    }
                    if ($obj->perce > 20 && $obj->perce <= 40) {
                        $color = "orange";
                    }
                    if ($obj->perce > 40 && $obj->perce <= 60) {
                        $color = "yellow";
                    }
                    if ($obj->perce > 60 && $obj->perce <= 100) {
                        $color = "green";
                    }
                    ?>

                    <li><?= $obj->titulo ?><span class="pull-right"><?= number_format($obj->perce, 2, '.', '') ?>%</span>  
                        <div class="progress progress-striped active progress-right">
                            <div class="bar <?= $color ?>" style="width:<?= number_format($obj->perce, 2, '.', '') ?>%;"></div> 
                        </div>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
    <div class="col-md-8 map widget-shadow stats-info stats-last">
        <h4 class="title">Mapa lecturas </h4>

        <div id="capaMapa"><div id="map"></div></div>

    </div>
    
    <!--<div class="col-md-8 stats-info stats-last widget-shadow">
        <table class="table stats-table ">
            <thead>
                <tr>
                    <th>USUARIO</th>
                    <th>MODULO</th>
                    <th>ACCION</th>
                    <th>FECHA</th>
                    <th>REGISTRO</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($logs as $log): ?>

        <?php
        switch ($log->accion) {
            case "INSERT":
                $color_a = "success";
                break;
            case "UPDATE":
                $color_a = "warning";
                break;
            case "DELETE":
                $color_a = "danger";
                break;
            case "LOGIN":
                $color_a = "info";
                break;
            case "LOGOUT":
                $color_a = "info";
                break;
            default:
                break;
        }
        ?>

                        <tr>
                            <th scope="row"><?= $log->usuario ?></th>
                            <td><?= $log->tabla ?></td>
                            <td><span class="label label-<?= $color_a ?>"><?= $log->accion ?></span></td>
                            <td><?= $log->fecha_insert ?></td>
                            <td><h5><?= $log->id_registro ?></h5></td>
                        </tr>

    <?php endforeach; ?>

            </tbody>
        </table>
    </div>-->
    
    <div class="clearfix"> </div>
</div>

    <div class="row calender widget-shadow">
        <h4 class="title">Calendario de envios realizados</h4>
        <div class="cal1">

        </div>
    </div>
    <div class="clearfix"> </div>

    <!-- Bootstrap modal -->
    <div class="modal fade" id="modal_form" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Descripcion eventos</h3>
                </div>
                <div class="modal-body form">

                    <div class="form-body" id="table_eventos">

                    </div>

                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End Bootstrap modal -->

    <script>

        var map, heatmap;

        function initMap() {
            /* Data points defined as an array of LatLng objects */
            var heatmapData = [
<?php foreach ($latitudes as $lat): ?>
                new google.maps.LatLng(<?= $lat->locacion ?>),
<?php endforeach; ?>
            ];
                    var sanFrancisco = new google.maps.LatLng(-38.416097, -63.616672);

            map = new google.maps.Map(document.getElementById('map'), {
                center: sanFrancisco,
                zoom: 4,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var heatmap = new google.maps.visualization.HeatmapLayer({
                data: heatmapData
            });
            heatmap.setMap(map);
        }
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }
        function showPosition(position) {
            x.innerHTML = "Latitude: " + position.coords.latitude +
                    "<br>Longitude: " + position.coords.longitude;
        }

        var calendars = {};

        $(document).ready(function () {

            var thisMonth = moment().format('YYYY-MM');

            var eventArray = [

<?php foreach ($envios as $envio): ?>

                {startDate: '<?= $envio->fecha_insert ?>', endDate: '<?= $envio->fecha_insert ?>', title: '<?= $envio->titulo ?>', asunto: '<?= $envio->asunto ?>', fecha_ultimoenvio: '<?= $envio->fecha_ultimoenvio ?>' },
<?php endforeach; ?>
            //{startDate: thisMonth + '-23', endDate: thisMonth + '-26', title: 'Another Multi-Day Event'}
            ];
                    calendars.clndr1 = $('.cal1').clndr({
                events: eventArray,
                clickEvents: {
                    click: function (target) {
                        console.log(target);
                        if ($(target.element).hasClass('inactive')) {
                            console.log('not a valid datepicker date.');
                        } else {
                            console.log('VALID datepicker date.');
                        }
                        show_event(target);
                        //show_event(target.events[0].startDate + ' - ' + target.events[0].title + ' - ' + target.events[0].asunto + ' - ' + target.events[0].fecha_ultimoenvio);
                    },
                    nextMonth: function () {
                        console.log('next month.');
                    },
                    previousMonth: function () {
                        console.log('previous month.');
                    },
                    onMonthChange: function () {
                        console.log('month changed.');
                    },
                    nextYear: function () {
                        console.log('next year.');
                    },
                    previousYear: function () {
                        console.log('previous year.');
                    },
                    onYearChange: function () {
                        console.log('year changed.');
                    }
                },
                multiDayEvents: {
                    startDate: 'startDate',
                    endDate: 'endDate'
                },
                showAdjacentMonths: true,
                adjacentDaysChangeMonth: false
            });

        });

        function show_event(e)
        {
            var c = e.events.length;

            var html;

            if (c > 0) {

                html = '<table class="table table-striped table-bordered" cellspacing="0" width="100%"><tr><td>Fecha</td><td>Titulo</td><td>Ultimo envio</td></tr>';

                for (i = 0; i < c; i++) {

                    html += '<tr><td>' + e.events[i].startDate + '</td><td>' + e.events[i].title + '</td><td>' + e.events[i].fecha_ultimoenvio + '</td></tr>';

                }

                html += '</table>';
            } else {
                html = '<h3>No se realizaron envios en este dia</h3>';
            }
            $('#table_eventos').html(html);

            $('#modal_form').modal('show'); // show bootstrap modal
        }

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

        });
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArevSna_ym_KjwuRKTfEy0ugiUbJxlNrM&signed_in=true&libraries=visualization&callback=initMap">
    </script>
