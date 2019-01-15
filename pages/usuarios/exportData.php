<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

//     if(isset($_POST["Export"])){
		 
//         header('Content-Type: text/csv; charset=utf-8');  
//         header('Content-Disposition: attachment; filename=data.csv');  
//         $output = fopen("php://output", "w");  
//         fputcsv($output, array('Nombre', 'Telefono', 'Correo'));  
//         $query = "SELECT nombre, telefono, correo from av_datos_personales";  
//         $result = mysqli_query($con, $query);  
//         while($row = mysqli_fetch_assoc($result))  
//         {  
//              fputcsv($output, $row);  
//         }  
//         fclose($output);  
//    }
// Database Connection
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "avemilgua";
  
//  $conn = mysqli_connect($servername, $username, $password, $dbname);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
  
// if(isset($_GET['export'])){
// if($_GET['export'] == 'true'){
// $query = mysqli_query($conn, 'SELECT nombre, telefono, correo from av_datos_personales'); // Get data from Database from demo table
  
  
//     $delimiter = ",";
//     $filename = "significant_" . date('Ymd') . ".csv"; // Create file name
      
//     //create a file pointer
//     $f = fopen('php://memory', 'w'); 
      
//     //set column headers
//     $fields = array('Nombre', 'Telefono', 'Correo');
//     fputcsv($f, $fields, $delimiter);
      
//     //output each row of the data, format line as csv and write to file pointer
//     while($row = $query->fetch_assoc()){
         
//         $lineData = array($row['nombre'], $row['telefono'], $row['correo']);
//         fputcsv($f, $lineData, $delimiter);
//     }
      
//     //move back to beginning of file
//     fseek($f, 0);
      
//     //set headers to download file rather than displayed
//     header('Content-Type: text/csv');
//     header('Content-Disposition: attachment; filename="' . $filename . '";');
      
//     //output all remaining data on a file pointer
//     fpassthru($f);
  
//  }
// }

//export.php  
$connect = mysqli_connect("localhost", "root", "root", "avemilgua");
$output = '';
if(isset($_POST["export"])){

     $query = "SELECT nombre, telefono, correo FROM av_datos_personales";
     $result = mysqli_query($connect, $query);
     if(mysqli_num_rows($result) > 0)
          
     {
     $output .= '
     <table class="table" bordered="1">  
          <tr>  
               <th scope="col" class="rounded">Nombre</th>
               <th scope="col" class="rounded">Telefono</th>
               <th scope="col" class="rounded">Correo</th>
          </tr>
     ';
     while($row = mysqli_fetch_array($result)){
          $output .= '
          <tr>  
               <td>'.$row["nombre"].'</td>  
               <td>'.$row["telefono"].'</td>  
               <td>'.$row["correo"].'</td>
          </tr>
          ';
     }
     $output .= '</table>';
     header('Content-Type: application/csv');
     header('Content-Disposition: attachment; filename=download.csv');
     echo $output;
     }
}

?>
