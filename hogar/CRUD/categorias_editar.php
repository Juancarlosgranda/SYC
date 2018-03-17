<?php  
require_once("header.php");
require_once("../funciones.php");
require_once("../Datos/categoriaDatos.php");
$xid_cat=leerParam("xid_cat","")*1;
$objCategoriaDatos = new CategoriaDatos();
$categoria=$objCategoriaDatos->getCategoriaById($xid_cat);


?> 
              <div id="page-wrapper">
                     <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Categorias                              <small>Editar</small>
                            </h1>
                    
                        </div>
                    </div>
                    <!-- /.row -->
                       <div class="row">
                    <div class="col-lg-12s">

                        <form role="form" method="post" action="categorias_grabar.php">
                            <input hidden="YES" name="accion" value="editar">
                            <input hidden="YES" name="xid_cat" value="<?php echo $categoria->id_cat;?>">
                            <fieldset class="form-group">
                                <label for="nom_area">Categoría:</label>
                                <input name="nom_cat" id="nom_cat" class="form-control" required="required" placeholder="Escriba el nombre del area" value="<?php echo $categoria->nom_cat;?>">
                            </fieldset>
                            <button type="submit" class="btn btn-secondary">Enviar</button>
                        </form>

                    </div>
                </div>
                <!-- /.row -->

                </div>
                <!-- /.container-fluid -->
                                </div>

            <?php  
require_once("footer.php");
?> 