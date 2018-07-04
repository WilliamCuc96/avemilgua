<?php
   //  Autentificator
   //  Gestion de Usuarios PHP+Mysql+sesiones
   //  by Pedro Noves V. (Cluster)
   //  clus@hotpop.com
   // -----------------------------------------
   
   // Cargamos variables
   require ("../libs/basicas/config.php");
   // le damos un nobre a la sesion (por si quisieramos identificarla)
   session_name($usuarios_sesion);
   // iniciamos sesiones
   session_start();
   // destruimos la session de usuarios.
   session_destroy();
   
   //header ("Location:  login.php?error_login=7");
?>