<?php  
require_once("header.php");
require_once("../funciones.php");
require_once("../Datos/categoriaDatos.php");
$objcateDatos = new CategoriaDatos();
$categorias=$objcateDatos->getCategorias();


?> 
              <div id="page-wrapper">
               <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Categorías
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class=""></i>  <a href="categorias_registrar.php">Registrar una nueva categoría</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Categorías</h2>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Categoría</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($categorias as $categoria) {
                                    echo "<tr>";
                                        echo "<td>$categoria->id_cat</td>";
                                        echo "<td>$categoria->nom_cat</td>";
                                        
                                        echo "<td><a href='categorias_editar.php?xid_cat=$categoria->id_cat'><i class='glyphicon glyphicon-edit'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                <a href='categorias_grabar.php?xid_cat=$categoria->id_cat'><i class='glyphicon glyphicon-remove-sign'></i></a></td>";
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