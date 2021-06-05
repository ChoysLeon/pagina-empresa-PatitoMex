<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases////v5.6.3/css/all.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <form class="formulario" method="POST" action="validar-login.php">

        <h1>Iniciar Sesión</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-envelope-open-text icon"></i>
                <input type="text" name="Correo" placeholder="Correo electronico">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-lock icon"></i>
                <input type="text" name="Contraseña" placeholder="Contraseña">
            </div>
            <input type="submit" value="Iniciar sesión" class="boton-registro" >
            <p>Al dar clic en Iniciar Sesión, aceptas nuestra politica de uso, politica de privacidad y condiciones de servicio</p>
            <p>¿Aún no tienes cuenta? <a class="Link" >Comunicate con el Administrador</a>
            </p>
        </div>
    </form>
</body>