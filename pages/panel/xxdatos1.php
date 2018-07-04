<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    global $setpagejq; $ajaxpath;
    global $productos; $verb; $row;
    
    $ajaxpath = "../";
    include_once("../../libs/basicas/config.php");
    
    $conectar = conectar();

    $sql1='select producto, sum(valor) as valor, concat(year(fecha),"-",month(fecha)) as mes from v_ingresos group by mes, producto order by mes, producto ';
    
    $result = mysql_query($sql1) or die("SQL Error 1: " . mysql_error());
    
    $verb = $_SERVER["REQUEST_METHOD"];
    
    // handle a GET 
    if ($verb == "GET") {
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            $productos[] = array(
                'producto' => $row['producto'],
                'valor' =>$row['valor'],
                'mes' =>$row['mes'],
            );
        }
    
        header("Content-type: application/json");
            echo json_encode($productos);
    }
    
?>     

<?php
/*

    $(function() {
            var json = (function () {
            var json = null;
            $.ajax({
                'async': false,
                'global': false,
                'url': 'http://localhost/prototipo/pages/panel/datos1.php',
                'dataType': "json",
                'success': function (data) {
                    json = data;
                }
            });
            return json;
        })
    ();
    
    Morris.Area({
        element: 'morris-area-chart1',
        padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        fillOpacity:.7,
        data:json,
        lineColors:['#ED5D5D','#D6D23A','#32D2C9','#30D2C0'],
        xkey: 'mes',
        ykeys:['producto','valor',],
        labels: ['Producto','Total'],
        pointSize: 0,
        lineWidth: 0,
        hideHover: 'auto'
    });

 */
?>