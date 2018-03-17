<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logearse</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Porfavor registrate</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="registrarDatos.php" method="post">
                            <input hidden="YES" name="accion" value="crear">
                            <input hidden="YES" name="tipo_per" value="2">
                        
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
                            <div class="col-md-6">
                            <button type="submit" class="btn btn-lg btn-success btn-block">Registrarme</button>
                            </div>
                            <div class="col-md-6">
                            <button type="reset" class="btn btn-lg btn-success btn-block">Limpiar</button>
                            </div>

                        </form>
                    
                    </div>
                      <div class="panel-body">
                             <a class="btn btn-block btn-social btn-facebook">       
                                <i class="fa fa-facebook"></i>  Inicia sesión con Facebook</a><br>
                                <a class="btn btn-block btn-social btn-google-plus">                    <i class="fa fa-google-plus"></i>  Inicia sesión con Google</a>
                     </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
