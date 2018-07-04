<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <img class="img-circle" src="../upload/<?php echo $_SESSION['usuario_foto']; ?>" alt="" height="23" width="23"/><!--<i class="fa fa-user fa-fw"></i>-->  <i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-user">
        <li><a href="index.php?p=usuarios/perfil.php"><i class="fa fa-user fa-fw"></i> <?php echo "<strong>". utf8_encode($_SESSION['usuario_nombre'])."</strong>"; ?> (<?php echo "<strong>". $_SESSION['usuario_login']."</strong>"; ?>)</a></li>
        <li><a href="index.php?p=usuarios/cambiar_passw.php"><i class="fa fa-gear fa-fw"></i> Cambiar Contraseña</a></li>
        <li class="divider"></li>
        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
        </li>
    </ul>
    <!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->