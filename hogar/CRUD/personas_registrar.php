<?php require_once("header.php"); 
require_once("../funciones.php");
require_once("../Datos/tipopersonaDatos.php");

$objTipoDatos= new TipoDatos();
$tipos=$objTipoDatos->getTipos();


?>
<div id="page-wrapper">

 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Usuarios
                <small>Registrar</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <form role="form" method="POST" action="personas_grabar.php">
                <input hidden="YES" name="accion" value="crear">
                <fieldset class="form-group">
                    <label for="nom_per">Nombre:</label>
                    <input class="form-control" placeholder="Escriba su Nombre:" required="required" name="nom_per" id="nom_per">
                </fieldset>
                <fieldset class="form-group">
                    <label for="ape_per">Apellido:</label>
                    <input class="form-control" placeholder="Escriba su Apellido:" required="required" name="ape_per" id="ape_per">
                </fieldset>
                <fieldset class="form-group">
                    <label for="fec_nac_per">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" required="required" name="fec_nac_per" id="fec_nac_per">
                </fieldset>
                <fieldset class="form-group">
                    <label for="email_per">Correo Electrónico:</label>
                    <input type="email" class="form-control" placeholder="Escriba su Correo Electrónico:" required="required" name="email_per" id="email_per" maxlength="50">
                </fieldset>
                <fieldset class="form-group">
                    <label for="tel_per">Número de Celular:</label>
                    <input class="form-control" placeholder="Escriba su Número de Celular" required="required" name="tel_per" id="tel_per" maxlength="15">
                </fieldset>
                <fieldset class="form-group">
                    <label for="log_per">Usuario:</label>
                    <input class="form-control" placeholder="Cree un usuario para acceder al sistema" required="required" name="log_per" id="log_per" maxlength="100">
                </fieldset>
                <fieldset class="form-group">
                    <label for="pass_per">Contraseña:</label>
                    <input type="password" class="form-control" placeholder="Cree una contraseña para acceder al sistema" required="required" name="pass_per" id="pass_per" maxlength="100">
                </fieldset>

                <fieldset class="form-group">
                        <label>Tipo de Usuario</label>
                        <select class="form-control" name="tipo_per">
                            <?php
                                foreach($tipos as $tipo){
                                    echo "<option value='$tipo->id_tipo_per'>$tipo->nom_tipo_per</option>";
                                } 
                             ?>
                        </select>
                </fieldset>

                <button type="submit" class="btn btn-secondary">Crear Usuario</button>
                <button type="reset" class="btn btn-secondary">Limpiar</button>
            </form>
            <br>
            <br>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>

<?php require_once("footer.php"); ?>