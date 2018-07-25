<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Gestión de Datos de Veteranos Militares</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <div class="jumbotron panel-green">
                    <h1>Bienvenido!</h1>
                    <p>A continuación encontrá una serie de formularios y listados que le permitirán administrar la información de AVEMILGUA.</p>
                    <p><a href="index.php?p=usuarios/veteranos_busc.php" class="btn btn-primary btn-lg" role="button">Búsqueda Personalizada</a></p>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-4">
                  <h2><i class="fas fa-user-plus"></i> Nuevo Veterano</h2>
                   <p>Por medio de esta opción puede agregar directamente un veterano, si posee los permisos necesarios. </p>
                   <?php if ($_SESSION['usuario_nivel'] <= 2 OR $_SESSION['usuario_nivel'] == 4) { ?>
                   <p><a class="btn" href="index.php?p=usuarios/av_usuarios_edit.php#">Ir al formulario &raquo;</a></p>
                   <?php }; ?>
                </div>
                <div class="col-lg-4">
                  <h2><i class="fas fa-search"></i> Buscar Veteranos</h2>
                   <p>Ingrese a esta opción para generar listados de beneficiarios utilizando un formulario de búsquedas con varios criterios. </p>

                   <p><a class="btn" href="index.php?p=usuarios/veteranos_busc.php">Ir al formulario &raquo;</a></p>
               
                </div>
                <div class="col-lg-4">
                  <h2><i class="fas fa-users"></i> Usuarios</h2>
                  <p>Administre los permisos de usuarios existentes o cree nuevos usuarios.</p>
                  <?php if ($_SESSION['usuario_nivel'] <= 2) { ?>
                  <p><a class="btn" href="index.php?p=usuarios/usuarios_list.php">Ir al listado &raquo;</a></p>
                  <?php }; ?>
                </div>
            </div>
        </div>
        <hr>
        <!-- /.row -->
        
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'panel/i_foot.php'; ?>