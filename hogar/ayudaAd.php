<?php  
require_once("header.php");
require_once('vendor/autoload.php');

if(array_key_exists('email',$_POST)){
    $from=new SendGrid\Email("Sell your crafts",$_POST['email']);
    $asunto=$_POST["asunto"];
    $to=new SendGrid\Email("Ayuda","juan.granda@tecsup.edu.pe");
    $contenido=new SendGrid\Content("text/plain", $_POST["mensaje"]);
    $mail= new SendGrid\Mail($from,$asunto,$to,$contenido);
    $apiKey="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";
    $sg=new \SendGrid($apiKey);
    $response=$sg->client->mail()->send()->post($mail);
    if($response->statusCode()==202)
        echo "<div class='alert'>se envió correctamente</div>";
    else
        echo "Verifique los datos";
}
?> 
    <div id="page-wrapper">
       <div class="container-fluid" >
        <div class="row jumbotron" >
                    <div class="row">
                    <div class="col-lg-12 jumbotron">
                        <center><h1 class="page-header">Contactanos</h1></center>
                    </div>
        </div>
                    <div class="col-lg-6">

                        <form method="post" role="form">

                            <fieldset class="form-group">
                                <label for="xnom">Nombres:</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Escriba su nombre" value="<?php echo $_SESSION['nom_per']." ".$_SESSION['ape_per'];?>">
                            </fieldset>

                            <div class="form-group">
                                <label>Correo: </label>
                                <input type="email"class="form-control" id="email" name="email" placeholder="Escriba su email">
                            </div>
                            <fieldset class="form-group">
                                <label>Teléfono:</label>
                                <input type="text"class="form-control" name="phone" id="phone" placeholder="teléfono o celular" value="<?php echo " ".$_SESSION['tel_per'];?>">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="xmot">Motivo del mensaje:</label>
                                <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Motivo del mensaje">
                            </fieldset>

                            <fieldset class="form-group">
                                <label>Mensaje</label>
                                <textarea class="form-control" rows="3" id="mensaje" name="mensaje" placeholder="Minimo 20 carácteres"></textarea>
                            </fieldset>
                            <button type="submit" class="btn btn-secondary">Enviar</button>
                            <button type="reset" class="btn btn-secondary">Resetear</button>

                        </form>

                    </div>
                    <div class="col-lg-6">
                        <h2>¿Deseas una página web?</h2>

                        <form role="form">

                            <fieldset disabled>

                                <div class="form-group">
                                    <label>Ponte en contacto con nosotros a través de este formulario. <br>

                                        Si tienes dudas o consultas de algún tutorial en nuestro canal puedes unirte a nuestro grupo en Facebook: Diseño y desarrollo web con HTML, CSS, Javascript y PHP allí entre todos los miembros podemos ayudarte.</label>
                                </div>

                                    <img class="img-thumbnail" src="img/acerca.jpg" alt="">

                            </fieldset>

                        </form>
                        <br />

                        <h3>Gracias por su sugerencia</h3>

                    </div>
                </div>
                </div>
        </div>
<?php  
require_once("footer.php");
?> 
