<?php  
require_once("header.php");
require_once("funciones.php");
require_once("Datos/publicacionDatos.php");
require_once("Datos/comentarioDatos.php");
$objComentarioDatos = new ComentarioDatos();
$objPublicacionDatos = new PublicacionDatos();

$Publicaciones=$objPublicacionDatos->getPublicaciones();
?> 
        <div id="page-wrapper">
         <div class="container-fluid">

        <div class="row">
                <br>
            <br><br>
            <div class="col-md-12">
                <?php  
                foreach($Publicaciones as $publi){
                    $resul=$objComentarioDatos->sizeComentario($publi->id_publi);
                    echo"
                    <div class='col-sm-4 col-sm-6'>
                    <center><a href='eliminar_publi.php?xid_publi=$publi->id_publi'><i class='glyphicon glyphicon-remove-sign'></i>  Eliminar</a></center>

                        <div class='thumbnail team'>
                            <img src='$publi->img_publi'>
                            <div class='caption'>
                                <h4 class='pull-right'>$publi->mon_publi $publi->pre_publi </h4>
                                <h4><a href='info_publicacion.php?xid_publi=$publi->id_publi'>$publi->tit_publi</a>
                                </h4>
                                <p>$publi->desc_publi</p>
                            </div>
                                <p class='pull-right'$resul comentarios</p>
                                <p>
                                <br>
                        </div>
                    </div>";
                }
                ?>

            </div>

        </div>
    </div>
    </div>
<?php  
require_once("footer.php");
?> 