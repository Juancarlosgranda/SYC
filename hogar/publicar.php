<?php  
require_once("header2.php");
?> 
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
            <div class="col-lg-12 ">
                <h1 class="page-header">Nueva Publicación</h1>
            </div>
        </div>
        <br>
    <form action="publicar_grabar.php" enctype="multipart/form-data" method="post" name="publicar" id="publicar">
      <input hidden="YES" name="id_per" value="<?php echo $_SESSION["id_per"]; ?>">
      <input hidden="YES" name="accion" value="crear">

       <fieldset class="form-group">
                <label for="id_cate">Categoria:</label>
                <select class="form-control input-lg" name="id_cate" id="id_cate"> 
                 <?php  
                 $conexion=new Mongo();
                 $db=$conexion->SYC;
                 $categorias=$db->categoria->find()->sort(array('nombre' => 1));

                    foreach ($categorias as $key => $value) {
                        $id_cate=$value['_id'];
                        $nom_cate=$value['nombre'];
                        
                     echo"<option value='$id_cate'>$nom_cate</option>";
                        }
                    ?>
                </select><br/>
        </fieldset>
        <fieldset class="form-group">
        <label for="">Imagen del producto:</label><br/>
         <div class="form-group">
                    <input name="imagen" id="file-3" type="file" multiple=false>
                </div>
        <script>
        $("#file-3").fileinput({
		showCaption: false,
		browseClass: "btn btn-primary btn-lg",
		fileType: "any"
	});
        </script>
        </fieldset>
        <fieldset class="form-group">
            <label for="tit_publi">Título:</label>
            <input type="text" name="tit_publi" id="tit_publi" class="form-control input-lg"><br/>
        </fieldset>
        <fieldset class="form-group">
            <label for="desc_publi">Descripción:</label><br/>
            <textarea class="form-control" name="desc_publi" id="desc_publi"rows="3" ></textarea><br/>
            </fieldset>
        <fieldset class="form-group">
            <label for="">Precio: </label><br/> 
             <select name="mon_publi"class="form-control input-lg"> 
              <option value="S/.">Soles</option>
              <option value="$">Dólares</option></select>
        </fieldset>
        <fieldset class="form-group">
              <input class="col-lg-12 form-control input-lg" type="number" min="0" name="pre" id="pre">
              </fieldset>
        <fieldset class="form-group">
              <select name="tra_publi" class="form-control input-lg"> 
              <option value="negociable">Negociable</option>
              <option value="fijo">Precio fijo</option><option value="gratis">Gratis</option></select>
        </fieldset>
        <fieldset class="breadcrumb">
            <label for="">Información de contacto:</label>
            <section><ol class="breadcrumb">
                <table>
                   <h3>Datos del usuario:</h3>
                    <tr>
                        <td>
                            <strong>Nombres: </strong>
                        </td>
                        <td>
                            <?php echo $_SESSION["nom_per"];?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Apellidos: </strong>
                        </td>
                        <td>
                            <?php echo $_SESSION["ape_per"];?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Teléfono: </strong>
                        </td>
                        <td>
                            <?php echo $_SESSION["tel_per"];?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Fecha de publicación: </strong>
                        </td>
                        
                        <td>
                            <?php 
                            $fecha= date ("d/m/Y");
                            echo $fecha; //getdate converted day;?>
                        </td>
                    </tr>
                </table>
            </ol>
            </section>
            </fieldset>
            <input hidden="YES" name="fec_publi" value="<?php echo $fecha; ?>">
            <fieldset class="form-group">
            <input type="submit" class="btn btn-success" value="Publicar"> <br><br>
             <label>Al publicar un anuncio, estás de acuerdo y aceptas los <a href="terminos.php">Terminos y condiciones de SYC</a></label>

         </fieldset>
         
    </form>
</div>
</div>
<?php  
require_once("footer.php");
?> 
