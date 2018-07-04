<?php

    //Definición de Variables locales
    //global $id;
    
    //Inicialización de Variables locales
    //$id = '';
    
    // Asignar el valor que viene en el request a variables
    //if (!$id) { $id  = isset_or('id', '0'); };
    
    // Asignación de valores de forma y comportamiento de la pagina
        
    //Programacion de Funcionalidad para mostrar datos de la pagina
    
?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-question-circle"></i> Preguntas Frecuentes</h1>
            </div>
            <!-- /.col-lg-12 -->
            <!-- CONTENIDO DE PAGINA -->
            <div class="col-lg-12">
                <!-- NAV -->
                <div id="list-toggle" class="col-md-3">
                    <div class="list-group">
                        <a href="#tab1" data-toggle="tab" class="list-group-item active"><i class="fa fa-suitcase"></i> ¿Que es <?php echo $ap_nombre_ct; ?>?</a>
                        <a href="#tab2" data-toggle="tab" class="list-group-item"><i class="fa fa-tags"></i> Fases de Implentación</a>
                    </div>
                </div>
                <!-- /NAV -->
                <!-- CONTENT -->
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1_1">1. Cómo surgió la idea? </a> </h3>
                                    </div>
                                    <div id="collapse1_1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Nulla malesuada varius pharetra. Ut sollicitudin, eros eget pharetra sagittis, est sapien suscipit nulla, ut malesuada mi purus eu sem. Donec justo mi, pulvinar sit amet fermentum in, efficitur ut augue. Sed et lacinia purus, ac molestie nibh. Curabitur rutrum justo sed egestas lobortis. Maecenas vitae libero at nibh mollis posuere ut vel nunc. Sed aliquet nisi lobortis, scelerisque felis eu, suscipit nisl. Quisque vel sem egestas, aliquet urna vel, ornare risus. Donec ullamcorper libero sollicitudin, auctor nulla in, scelerisque enim.</p>
                                            <p>Pellentesque tincidunt justo nec ex posuere, sed condimentum urna tempor. Ut venenatis ac libero nec dapibus. Morbi malesuada, elit efficitur sagittis rhoncus, sapien lorem tristique mauris, in tincidunt dui velit sed dui. Etiam vitae diam interdum, aliquet tellus a, varius libero. Donec eleifend justo maximus purus tincidunt fringilla vitae ut mauris. Aenean ut finibus augue. Suspendisse hendrerit lectus ex, eu ultricies diam faucibus a. Quisque sed ligula at metus lobortis fringilla quis sit amet metus. Donec a nisi nec tellus iaculis convallis at eget mauris. Proin odio ligula, tempus ut scelerisque eget, auctor sit amet sem. Maecenas non consequat turpis, vel semper mi. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1_2">2. Cómo está desarrollado? </a> </h3>
                                    </div>
                                    <div id="collapse1_2" class="panel-collapse collapse">
                                        <div class="panel-body"> 
                                            <p>Nuestro sistema ha sido desarrollado en una plataforma flexible, lo que significa que es posible adaptarnos a sus necesidades, a diferencia de otros sistemas que ya vienen configurados y estructurados para cierta funcionalidad o bien sus parámetros son limitados, <?php echo $ap_nombre_ct; ?> se adapta a la necesidad y requerimiento real de cada cliente, entendiendo que aunque todos los procesos administrativos reúnen características similares, siempre estará presente la alternativa de encontrar algo diferente, por esta razón la parametrización del software <?php echo $ap_nombre_ct; ?> está en función de las necesidades de los clientes y no precisamente a un funcionamiento 100% estándar.</p>
                                            <p>El sistema está creado en un ambiente Web, lo que le permite acceso desde cualquier equipo que no se encuentre instalado de manera permanente (laptop, Tablet, teléfono inteligente u otro equipo similar); pudiendo habilitarse el uso para distintos usuarios con sus perfiles y permisos correspondientes teniendo disponible la opción de consulta para ver su estado de cuenta por ejemplo o bien hacer el requerimiento de un servicio. Estos son sólo algunos de los beneficios que la herramienta ofrece.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1_3">3. Cual es el objetivo de <?php echo $ap_nombre_ct; ?>? </a> </h3>
                                    </div>
                                    <div id="collapse1_3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>El objetivo que pretendemos con el desarrollo de este software es contribuir al ordenamiento y facilidad de la administración de su información. Sea éste administrado por Usted, personal auxiliar o bien por alguna empresa externa. El sistema ha sido desarrollado pensando no solamente en su comodidad y acceso práctico, pero también en su funcionalidad y eficiencia.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                            <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1_4">4. Cuales son mis beneficios al usar <?php echo $ap_nombre_ct; ?>? </a> </h3>
                                    </div>
                                    <div id="collapse1_4" class="panel-collapse collapse">
                                        <div class="panel-body"> 
                                            <p>Dentro de otros beneficios que ofrece este software se encuentran:</p>
                                            <ol>	
                                                <li>Llevar control sobre los servicios con los que cuenta el condominio.</li>
                                                <li>Verificar Pagos de servicios y cuotas de viviendas u oficinas.</li>
                                                <li>Efectuar el control de reservas del área social (si el condominio cuenta con esta opción)</li>
                                                <li>Llevar el control de ingreso de visitantes al condominio.</li>
                                                <li>Emitir recibos de pago, tanto por alquiler, como por los servicios prestados.</li>
                                                <li>Generar estados de cuenta.</li>
                                                <li>Administrar el requerimiento de tarjetas electrónicas para ingreso al condominio (si el mismo cuenta con este sistema)</li>
                                                <li>Hacer el enlace con el banco en donde se depositen los ingresos percibidos, pudiendo asociar los pagos en el banco a la casa u oficina correspondiente de forma automatizada.</li>
                                                <li>Identificar que viviendas se encuentran disponibles en el complejo.</li>
                                                <li>Si existen casos especiales, como convenios de pago, podrá saberlo a través de la herramienta</li>
                                                <li>Emitir cualquier reporte contable tales como Cuentas por Cobrar, Saldos de Cuentas o cualquier otro movimiento originado por vivienda u oficina.</li>
                                                <li>Generación de notas de corte mensual en menos de un minuto con capacidad de envió por e-mail en forma masiva o la generación en formato PDF para impresión.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1_5">5. Cúal es el impacto en la administración de un residencial al usar <?php echo $ap_nombre_ct; ?>? </a> </h3>
                                    </div>
                                    <div id="collapse1_5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Como se puede apreciar, se trata de una herramienta bastante funcional, versátil y fácil de operar, sobre todo, lo más importante que ofrece el software es la optimización de recurso tiempo, por ejemplo, un cierre de mes que normalmente consume un tiempo de tres días (en un condominio de 700 casas) con el uso de esta aplicación se ha reducido el tiempo menor a 20 minutos. Esta es una ventaja que le permite al administrador del condominio brindar un servicio mucho más personalizado y un acercamiento al condómino que le permita efectuar labores de supervisión.</p>
                                            <p>Otra de las ventajas con que cuenta este sistema, es que permite almacenar toda información histórica, de tal manera que cualquier vecino pueda hacer cualquier consulta al respecto.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2_1">Fase I: Implementación </a> </h3>
                                    </div>
                                    <div id="collapse2_1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>
                                                Dentro de esta primera fase se contempla la parametrización e implementación de la herramienta considerando de quince días a un mes para su total instalación. En este tiempo se llevará a cabo el levantamiento de datos, consistente en la recopilación y análisis de la información con la que ya cuenta el condominio en su actual sistema, así como la migración de datos a la nueva base de datos y a la parametrización de todas las variables de gestión. Este proceso se llevará a cabo con la asesoría de uno de nuestros técnicos, quien brindará todo el soporte posible para que todo se desarrolle de la mejor manera.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2_2">Fase II: Pruebas </a> </h3>
                                    </div>
                                    <div id="collapse2_2" class="panel-collapse collapse">
                                        <div class="panel-body"> 
                                            <p>Esta es la fase de pruebas, se estima poder emitir notas de cobro utilizando nuestro sistema, sin embargo con el objetivo de comprobar el funcionamiento de nuestro sistema al 100%, se recomienda hacer todo el proceso de cierre utilizando el sistema actual del condominio en paralelo al nuestro con el objeto de detectar áreas de mejora, previo a su utilización de forma definitiva.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2_3">Fase III: Puesta en Marcha </a> </h3>
                                    </div>
                                    <div id="collapse2_3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Efectuadas las pruebas y verificado el funcionamiento de la herramienta, se tendrá un mes de funcionamiento con acompañamiento de soporte a pedido, esperando que todo funcione adecuadamente, durante todo el proceso de implementación y prueba, insayd.com ofrece el respaldo técnico y personal necesario de manera de garantizar óptimos resultados.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2_4">Soporte y Mantenimiento: </a> </h3>
                                    </div>
                                    <div id="collapse2_4" class="panel-collapse collapse">
                                        <div class="panel-body"> 
                                            <p>Posterior a la implementación del servicio se ofrece el servicio de Soporte y Mantenimiento por medio del cual la aplicación se beneficia de todo cambio o mejora en beneficio de su funcionamiento así como la implementación de características adicionales que el proyecto requiera.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.col-lg-12 -->
            <!-- /CONTENIDO DE PAGINA -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'panel/i_foot.php'; ?>