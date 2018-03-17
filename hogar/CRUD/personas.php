<?php 
require_once("header.php");
require_once("../funciones.php");
require_once("../Datos/personaDatos.php");
$objperDatos = new PersonaDatos();
$personas=$objperDatos->getPersonas();
?>
<div id="page-wrapper">
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Personas
                <small>listado</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="personas_registrar.php">Nuevo Usuario</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <h2>Usuarios</h2>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombres y Apellidos</th>
                            <th>E-mail</th>
                            <th>Login</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       foreach ($personas as $persona) {
                            echo "<tr>";
                                echo "<td>$persona->id_per</td>";
                                echo "<td>$persona->nom_per $persona->ape_per</td>";
                                echo "<td>$persona->email_per</td>";
                                echo "<td>$persona->log_per</td>";
                                echo "<td><a href='personas_editar.php?xid_per=$persona->id_per'>Editar</a><a href='personas_grabar.php?xid_per=$persona->id_per'>Eliminar</a></td>";
                            echo "</tr>";
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
    
</div>
<?php require_once("/footer.php"); ?>