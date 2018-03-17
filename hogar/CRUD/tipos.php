<?php  
require_once("header.php");
require_once("../funciones.php");
require_once("../Datos/tipopersonaDatos.php");
$objTipoDatos = new TipoDatos();
$tipos=$objTipoDatos->getTipos();


?> 
              <div id="page-wrapper">
               <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Tipo de usuarios
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class=""></i>  <a href="tipos_registrar.php">Registrar un nuevo usuario</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Usuarios</h2>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Tipo de usuario</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($tipos as $tipo) {
                                    echo "<tr>";
                                        echo "<td>$tipo->id_tipo_per</td>";
                                        echo "<td>$tipo->nom_tipo_per</td>";
                                        
                                        echo "<td><a href='tipos_editar.php?xid_tipo_per=$tipo->id_tipo_per'>Editar</a> <a href='tipos_grabar.php?xid_tipo_per=$tipo->id_tipo_per'>Eliminar</a></td>";
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
            <?php  
require_once("footer.php");
?> 