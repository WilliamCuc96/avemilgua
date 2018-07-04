<?php 
//echo "-db";
    global $sql_host; $sql_usuario; $sql_pass; $sql_db; $link; $prefijo_path;
    function conectar(){
        include($prefijo_path.'config.php'); 

            if (!($link = mysql_connect($sql_host, $sql_usuario, $sql_pass))) {
                    die(header ("Location:  login.php?error_login=0"));
                    exit();
            }

            if (!mysql_select_db($sql_db, $link)) {
                    die(header ("Location:  login.php?error_login=10"));
                    exit();
            }

            return $link;
    } 
?>