
    <?php  
require_once("header.php");
require_once("funciones.php");
require_once("Datos/publicacionDatos.php");
require_once("Datos/comentarioDatos.php");
$conexion=new Mongo();
$db=$conexion->SYC;
$xid_publi=leerParam("xid_publi","");
$xid_per=($_SESSION["id_per"])*1;
$objPublicacionDatos = new PublicacionDatos();
$objComentarioDatos = new ComentarioDatos();
$publi=$objPublicacionDatos->getPublicacionById($xid_publi);
$comentarios=$objComentarioDatos->getComentariosBypubli($xid_publi);
$id_coment=$objComentarioDatos->obtenerId();
?> 
        <div id="page-wrapper">
         <div class="container-fluid">
    <br>
        <div class="row">

         <?php  
                    
                        
                        echo "<div class='col-md-12'>
                            <div class='thumbnail'>
                            <img class='img-responsive' src='$publi->img_publi' alt=''>
                            <div class='caption-full'>
                                <h4 class='pull-right'>$publi->mon_publi $publi->pre_publi $publi->tra_publi </h4>
                                <h4><a href='#'>$publi->tit_publi</a>
                                </h4>
                                        <p>$publi->desc_publi</p>
                            <br>
                            
    
                            </div>
                            </div>
                            
                        </div>

            </div>";
                    
                    
                    ?>
                    <h1>Comentarios:</h1>
            <div class='well'>
                   <form method="post" role="form">
                   <input hidden="YES" name="accion" id="accion" value="crear">
                   <input hidden="YES" name="id" id="id" value="<?php echo $id_coment; ?>">
                   <input hidden="YES" name="id_publi" id="id_publi" value="<?php echo $xid_publi; ?>">
                   <input hidden="YES" name="id_per" id="id_per" value="<?php echo $xid_per; ?>">
                    <fieldset class="form-group">
                        <label for="comentario">Comentario sobre la publicación:</label><br/>
                             <textarea class="form-control" name="comentario" id="comentario"rows="3" ></textarea><br/>
                            </fieldset>
                            <div class='text-right'>
                                <button type="submit" class='btn btn-success' onclick="javascript:EnviarDatos();">Comentar</button>
                            </div>
                            <div id="mensaje"></div>
                            <br>
                        
                    </form>
                            
                            <?php  
                                foreach($comentarios as $comentario){
                                     $id=$comentario->id_usu*1;
                                    $id_per_coment=$comentario->id_usu*1;
                                     $persona=$db->persona->find(array('_id' =>$id));
                                    foreach($persona as $value){
                                        $nombres=$value['nom_per']." ".$value['ape_per'];
                                        }
                                    echo" <hr>
                                         <div class='row'>
                                    <div class='col-md-12'>
                                    <h5>$nombres</h5>";
                                    if ($id_per_coment==$xid_per){
                                        echo"<span class='pull-right'>$comentario->fec_coment</span>
                                    <p>$comentario->comentario</p>
                                     <a class='pull-right' href='' onclick='javascript:EliminarDatos($comentario->id_coment);'><i class='glyphicon glyphicon-remove-sign'></i>  Eliminar</a>
                                        </div>
                                    </div>
                                        <hr>";
                                    }
                                    else{
                                        echo  "<span class='pull-right'>$comentario->fec_coment</span>
                                        <p>$comentario->comentario</p>
                                                </div>
                                            </div>
                                        <hr>";}
                                }
                                
                                ?>
                </div>
          
    </div>
    </div>
    
    <script type="text/javascript">
    function EnviarDatos(){
        var id= document.getElementById('id').value;
        var id_publi=document.getElementById('id_publi').value;
        var id_per=document.getElementById('id_per').value;
        var comentario= document.getElementById('comentario').value;
        var accion= document.getElementById('accion').value;
        
        
        $.ajax({
            type:'POST',
            url:'comentar_grabar.php',
            data:('comentario='+comentario+'&id='+id+'&id_publi='+id_publi+'&id_per='+id_per+'&accion='+accion),
        })
        
    }
        function EliminarDatos(id){
            var id_coment = id;
            var accion="";
           $.ajax({
            type:'POST',
            url:'comentar_grabar.php',
            data:('id='+id_coment+'&accion='+accion),
        })
            
        }
</script>
    
<?php  
require_once("footer.php");
?> 