<?php  
require_once("header.php");
require_once("../funciones.php");
require_once("../Datos/tipopersonaDatos.php");
$xid_tipo_per=leerParam("xid_tipo_per","")*1;
$objTipoDatos = new TipoDatos();
$tipo=$objTipoDatos->getTipoById($xid_tipo_per);


?> 
              <div id="page-wrapper">
                     <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Tipos                              <small>Editar</small>
                            </h1>
                    
                        </div>
                    </div>
                    <!-- /.row -->
                       <div class="row">
                    <div class="col-lg-12s">

                        <form role="form" method="post" action="tipos_grabar.php">
                            <input hidden="YES" name="accion" value="editar">
                            <input hidden="YES" name="xid_tipo_per" value="<?php echo $tipo->id_tipo_per;?>">
                            <fieldset class="form-group">
                                <label for="nom_area">Categoría:</label>
                                <input name="nom_tipo_per" id="nom_tipo_per" class="form-control" required="required" placeholder="Escriba el nombre del area" value="<?php echo $tipo->nom_tipo_per;?>">
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