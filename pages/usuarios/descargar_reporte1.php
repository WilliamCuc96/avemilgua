<?php
include_once("../../libs/PHPExcel.php");

$nombre = "reporte";

    $sql1 = "SELECT a.id,
                    a.nombre,
                    a.departamento_id,
                    a.departamento,
                    (SELECT COUNT(b.beneficiario) FROM av_datos_personales b WHERE b.beneficiario = 1 and b.lugar_nacimiento = a.id) as veterano,
                    (SELECT COUNT(b.beneficiario) FROM av_datos_personales b WHERE b.beneficiario <> 1 and b.lugar_nacimiento = a.id) as otro,
                    (SELECT COUNT(b.beneficiario) FROM av_datos_personales b WHERE b.lugar_nacimiento = a.id) as total
            FROM ap_municipios a";

    $resp1 = mysql_query($sql1);

    
    $data="Departamento,Municipio,Veterano,Otro,Total\n";

    
    // while($row=mysql_fetch_assoc($resp1)){
    //     $data.=$row['departamento'].",";
    //     $data.=$row['nombre'].",";
    //     $data.=$row['veterano'].",";
    //     $data.=$row['otro'].",";
    //     $data.=$row['total']."\n";
    // }
    // //print("///////////////////////////////////////////////////////////////////////////////////////////".$data);
    

    // $archivo_csv = "reporte.csv";
    // $miArchivo = fopen("reporte.csv", "w") or die("No se puede abrir/crear el archivo!");
 
    // fwrite($miArchivo, $data);
    // fclose($miArchivo);
    if (!$resp1) { // Error en la ejecución del query  
    
    

    } elseif (mysql_num_rows($resp1) == 0) { // búsqueda satisfactoria, 0 registros encontrados
        
        
        
    } else {
        print('echo////////////////////////////////////////-------------------'.mysql_num_rows($resp1));
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition:  filename=\"REP-".$nombre.".csv\";");
        print('///////////////////////////////////////////////////////////////////////////////////echo'.$nombre);
    ?>
    <html>
    <body>
      <table id="rounded-corner" summary="Clientes de Campus Tec 1">
            <tfoot>
                <tr>
                    <td colspan="37" align="center" class="rounded-foot-left"><strong>Clientes al  </strong><em><span style="color:green;"><?php echo date( "Y-m-d H:i:s" ) ?></span></em></td>
                    <td class="rounded-foot-right">&nbsp;</td>
                </tr>
            </tfoot>
            <thead>
                <tr>
                    <th scope="col" class="rounded">Departamento</th>
                    <th scope="col" class="rounded">Municipio</th>
                    <th scope="col" class="rounded">Veterano</th>
                    <th scope="col" class="rounded">Otro</th>
                    <th scope="col" class="rounded">Total</th>
            </thead>
            <tbody>
            <?php 
                while($row=mysql_fetch_assoc($resp1)){
                    print "<tr class=''>";
                    print "  <td>".utf8_encode($row['departamento'])."</td>";
                    print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['nombre'])."</td>";
                    print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['veterano'])."</td>";
                    print "  <td class='hidden-xs'>".utf8_encode($row['otro'])."</td>";
                    print "  <td class='hidden-xs'>".utf8_encode($row['total'])."</td>";
                    print "</tr>";
                }
                mysql_free_result($resp1);
        ?>
            
            <tr>
                    
                    <th scope="col" class="rounded"></th>
                    <th scope="col" class="rounded"></th>
                    <th scope="col" class="rounded"></th>
                    <th scope="col" class="rounded"></th>
                    <th scope="col" class="rounded"></th>
                    <th scope="col" class="rounded"></th>
                    <th scope="col" class="rounded"></th>
                    <th scope="col" class="rounded"></th>
                </tr>
            </tbody>
            
        </table>	
    </body>
    </html>
    <?php  }; ?>
