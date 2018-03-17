<?php 
require_once("header.php");
require_once("../funciones.php");
require_once("../Datos/publicacionDatos.php");
$objPubliDatos= new PublicacionDatos();
$publicaciones=$objPubliDatos->getPublicaciones();
?>
<div id="page-wrapper">

 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Alumnos
                <small>listado</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="alumnos_registrar.php">Nuevo Alumno</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <h2>Publicaciones</h2>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Fecha de creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       foreach ($publicaciones as $publi=>$fila) {
                            echo "<tr>";
                                echo "<td>$fila->id_publi</td>";
                                echo "<td>$fila->tit_publi</td>";
                                echo "<td>$fila->log_per</td>";
                                echo "<td>$fila->fec_publi</td>";
                                echo "<td><a href='publicaciones_editar.php?xid_publi=$fila->id_publi'></a> <a href='publicaciones_grabar.php?xid_publi=$fila->id_publi'></a></td>";
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

<?php require_once("footer.php"); ?>