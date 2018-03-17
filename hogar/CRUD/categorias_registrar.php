    <?php  
require_once("header.php");
require_once("../funciones.php");
?> 
              <div id="page-wrapper">
               <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Categoría          <small>Registrar</small>
                            </h1>
                    
                        </div>
                    </div>
                    <!-- /.row -->
                       <div class="row">
                    <div class="col-lg-12s">

                        <form role="form" method="post" action="categorias_grabar.php">
                            <input hidden="YES" name="accion" value="crear">
                            <fieldset class="form-group">
                                <label for="nom_cat">Nombre de la categoría:</label>
                                <input name="nom_cat" id="nom_cat" class="form-control" required="required" placeholder="Escriba una categoría">
                            </fieldset>
                            <button type="submit" class="btn btn-secondary">Enviar</button>
                            <button type="reset" class="btn btn-secondary">Limpiar</button>
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