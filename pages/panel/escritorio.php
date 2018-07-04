<?php

    // Variables globales
    include_once 'modelos/panel/pagina_globales.php';
    
    //Definición de Variables locales
    //global $id;
    
    //Inicialización de Variables locales
    //$id = '';
    
    // Asignar el valor que viene en el request a variables
    //if (!$id) { $id  = isset_or('id', '0'); };
    
    // Asignación de valores de forma y comportamiento de la pagina
    $plbreadcrumb = "<li>Escritorio</li>";
    $pltitulo = "<i class='fa fa-tachometer fa-fw'></i> Panel de Administración";
    $pldescripcion = "Bienvenido al sistema: ".$ap_nombre_lg;
    $setpagejq = "";
    $condicion = "";
    
    //Programacion de Funcionalidad para mostrar datos de la pagina
    $habitadap = 30;
    $statusp = 5;
    $alquiladap = 65;
    // Traer de la Base de Datos
    
?>

<?php include_once 'modelos/panel/pagina_titulo.php'; ?>

<!-- MODAL FORM-->
<!-- /MODAL FORM-->
						
<!-- CONTENIDO DE PAGINA -->

<div class="row">
    <!-- MINI ESTADISTICAS -->
    <div class="col-md-6">
        <div class="quick-pie panel panel-default solid blue">
            <div class="panel-body">
                <div class="col-md-4 text-center">
                    <div id="dash_pie_1" class="piechart" data-percent="<?php echo $habitadap; ?>"  tabindex="#A8BC7B" >
                        <span class="percent"><?php echo $habitadap; ?></span>%
                    <canvas width="110" height="110"></canvas></div>
                    <a href="panel.php?p=administracion/casas_list.php&habitada=1" class="title">Esc. Almacenadas <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="col-md-4 text-center">
                    <div id="dash_pie_2" class="piechart" data-percent="<?php echo $statusp; ?>" tabindex="#F0AD4E">
                        <span class="percent"><?php echo $statusp; ?></span>%
                    <canvas width="110" height="110"></canvas></div>
                    <a href="panel.php?p=administracion/casas_list.php&status=2" class="title">Esc. en Corrección <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="col-md-4 text-center">
                    <div id="dash_pie_3" class="piechart" data-percent="<?php echo $alquiladap; ?>" tabindex="#D9534F">
                        <span class="percent"><?php echo $alquiladap; ?></span>%
                    <canvas width="110" height="110"></canvas></div>
                    <a href="panel.php?p=administracion/casas_list.php&alquilada=1" class="title">Esc. en Proceso <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
<!--    </div> -->
    <!-- /MINI ESTADISTICAS -->
    
    <!-- grafico barra -->
<!--    <div class="col-md-6"> -->
        <div class="box border inverse">
                <div class="box-title">
                        <h4><i class="fa fa-adjust"></i>Escrituras elaboradas durante el mes</h4>
                        <div class="tools hidden-xs">
                                
                        </div>
                </div>
                <div class="box-body">
                       <!-- <h5>Default Pie with legend</h5> -->
                        <div id="placeholder" class="chart"></div>
                </div>
        </div>
    </div>
    <!-- /grafico barra -->
    
    <!-- CALENDAR -->
    <div class="col-md-6">
        <div class="box border inverse">
            <div class="box-title">
                <h4><i class="fa fa-calendar"></i>Calendario de Actividades</h4>
                <div class="tools">
                    <a href="#box-config" data-toggle="modal" class="config">
                        <i class="fa fa-cog"></i>
                    </a>
                </div>
            </div>
            <div class="box-body">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
    <!-- /CALENDAR -->
        
    <!-- BOX WITH TOOLBOX-->
    <?php   
        
   // $sql1 = "SELECT * FROM ig_ordenes_trabajo where month(fecha_trabajo) = month(curdate()) ".$condicion."
    //       ORDER BY fecha_trabajo, hora_trabajo";
    
    //	echo "<br>[SQL] ".$sql1. " [Fin SQL]";
    
  //  $resp1 = mysql_query($sql1);
?>  
    <div class="col-md-12">
        <div class="box border inverse">
            <div class="box-title">
                <h4><i class="fa fa-tags"></i>Indice de Escrituras en Proceso</h4>
                <div class="tools">
                    <a href="#box-config" data-toggle="modal" class="config">
                        <button class="btn btn-xs btn-danger"> <i class="fa fa-print"></i> Imprimir </button>
                    </a>
                    <a href="javascript:;" class="collapse">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="box-body">
                <div class="tab-pane" id="feed">
                    <div class="scroller" data-height="150px" data-always-visible="1" data-rail-visible="1">
                        
        <?php /*
            $icono = "";
            
                while($row=mysql_fetch_assoc($resp1)){
                    if ($row['estatus']==1) {
                        $icono = '<i class="pull-left roundicon fa fa-arrow-right btn btn-info"></i>';
                    } elseif ($row['estatus']==2) {
                        $icono = '<i class="pull-left roundicon fa fa-check btn btn-success"></i>';
                    } else {
                        $icono = '<i class="pull-left roundicon fa fa-question btn btn-danger"></i>';
                    };
                    print '<div class="feed-activity clearfix">
                            <div>
                                '.$icono.'
                                <a class="user" href="#"> '.$row['codigo'].'-'.$row['institucion'].'-'.$row['condominio'].' </a>
                                '.utf8_encode($row['responsable']).'
                                <br>
                                <a href="#">Ver Orden de Trabajo</a>
                            </div>
                            <div class="time">
                                <i class="fa fa-calendar-o"></i> '.$row['fecha_trabajo'].'  <i class="fa fa-clock-o"></i> '.$row['hora_trabajo'].'
                            </div>
                        </div>';
                };
         * 
         */
        ?>
                        
                        <table class="table table-striped table-bordered table-hover">
                             <thead>
                                    <tr>
                                       <th><i class="fa fa-user"></i> Client</th>
                                       <th class="hidden-xs"><i class="fa fa-quote-left"></i> Sales Item</th>
                                       <th><i class="fa fa-dollar"></i> Amount</th>
                                       <th><i class="fa fa-bars"></i> Status</th>
                                    </tr>
                             </thead>
                             <tbody>
                                    <tr>
                                       <td><a href="#">Fortune 500</a></td>
                                       <td class="hidden-xs">Gold Level Virtual Server</td>
                                       <td>$ 2310.23</td>
                                       <td><span class="label label-success label-sm">Paid</span></td>
                                    </tr>
                                    <tr>
                                       <td><a href="#">Cisco Inc.</a></td>
                                       <td class="hidden-xs">Platinum Level Virtual Server</td>
                                       <td>$ 5502.67</td>
                                       <td><span class="label label-warning label-sm">Pending</span></td>
                                    </tr>
                                    <tr>
                                       <td><a href="#">VMWare Ltd.</a></td>
                                       <td class="hidden-xs">Hardware Switch</td>
                                       <td>$ 3472.54</td>
                                       <td><span class="label label-success label-sm">Paid</span></td>
                                    </tr>
                                    <tr>
                                       <td><a href="#">Wall-Mart Stores</a></td>
                                       <td class="hidden-xs">Branding &amp; Marketing</td>
                                       <td>$ 6653.25</td>
                                       <td><span class="label label-success label-sm">Paid</span></td>
                                    </tr>
                                    <tr>
                                       <td><a href="#">Exxon Mobil</a></td>
                                       <td class="hidden-xs">UX and UI Services</td>
                                       <td>$ 45645.45</td>
                                       <td><span class="label label-danger label-sm">Overdue</span></td>
                                    </tr>
                                    <tr>
                                       <td><a href="#">General Electric</a></td>
                                       <td class="hidden-xs">Web Designing</td>
                                       <td>$ 3432.11</td>
                                       <td><span class="label label-warning label-sm">Pending</span></td>
                                    </tr>
                             </tbody>
                    </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /BOX WITH TOOLBOX-->
</div>

<!-- /CONTENIDO DE PAGINA -->

<?php include_once 'modelos/panel/pagina_pie.php'; ?>

<!-- Inicia Area Scripts Locales -->
   
<script type="text/javascript">

    // Desplegar Calendario
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        lang: 'es',
        // Calendarios de Google

        eventSources: [
            // source with no options
            <?php 
                if ($_SESSION['usuario_calendario1']) {  
                    echo ' {
                        url: "'.$_SESSION['usuario_calendario1'].'",
                        color: "#519cb4"
                    }, ';
                };
                if ($_SESSION['usuario_calendario2']) {             
                    echo ' {
                        url: "'.$_SESSION['usuario_calendario2'].'",
                        color: "#96ae60"
                    }, ';
                };
            ?>
            {
                url: "http://localhost/inmobiges/modelos/administracion/events.php"
            },
            // Calendario de dias festivos guatemala
            {
                url: "https://www.google.com/calendar/feeds/es.gt%23holiday%40group.v.calendar.google.com/public/basic",
                color: "#757575"
            }
        ],

        buttonText: {
            today:    'Hoy',
            month:    'mes',
            week:     'semana',
            day:      'día'
        },
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        dragOpacity: {
            month: .2,
            'default': .5
        },
        dayClick: function() {
            alert('Esta opción aún no está disponible!');
        }

    });
</script>

<script>
$(function() {

    $('#dash_pie_1').easyPieChart({
        //your options goes here
        easing: 'easeOutBounce',
        onStep: function(from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
        },
        barColor: "green",
        lineWidth: 12
    });
    $('#dash_pie_2').easyPieChart({
        //your options goes here
        easing: 'easeOutBounce',
        onStep: function(from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
        },
        barColor: "red",
        lineWidth: 12
    });
    $('#dash_pie_3').easyPieChart({
        //your options goes here
        easing: 'easeOutBounce',
        onStep: function(from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
        },
        barColor: "#70AFC4",
        lineWidth: 12
    });
    //.piechart
});
</script>

<script>
// Grafico de barras  
$(function() {
<?php 
    $sql2 = "SELECT  
               (select p.nombre from productos p where p.id = ep.tipo) as ntipo,
               sum(ep.cantidad * ep.precio) as gastado
      FROM exp_pedido ep
      WHERE 1=1 ".$condicion."
    GROUP BY ntipo";
?>

    var data = [ 
<?php        
    $resp1 = mysql_query($sql2);
    $myString = '';
    if ($resp1) { // Error en la ejecución del query
        while($row1=mysql_fetch_assoc($resp1)){
            $myString = $myString . '["'.$row1['ntipo'].'", '.$row1['gastado'].'],';        
        };
        mysql_free_result($resp1);
        $myString = substr($myString, 0, -1);
    }; 
    echo $myString;
?>        
        // /*
        ["Apertura S.A.", 10], 
        ["Divorcios", 8], 
        ["Convenios", 8],
        ["Paternidad", 1],
        ["Testamentos", 2],
        ["Anulados", 5]
        // */
    ];

    $.plot("#placeholder", [ data ], {
            series: {
                    bars: {
                            show: true,
                            fill: true,
                            barWidth: 0.7,
                            lineWidth: 2,
                            align: "center"
                    }
            },
            lines: {
                    show: true,
                    lineWidth: 0.5
            },
            points: {
                    show: true,
                    lineWidth: 0.5,
                    fill: true
            },
            colors: ["#D9534F"],
            xaxis: {
                    mode: "categories",
                    tickLength: 0
            }
            
    });
    

});
// fin de Grafico de barras  
</script>
<!-- Finaliza Area Scripts Locales -->
<?php
//echo $sql2;
?>
