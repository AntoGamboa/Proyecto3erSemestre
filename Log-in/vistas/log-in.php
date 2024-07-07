<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vistas/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>SIGPAR</title>
</head>
<body>
    <div class="main">
        <div class="login">
            <form method="post" action="">
                <center>
                <h1><i>Inicio de Sesión</i></h1>
                <?php
                    include("../conexion/conexion_bd.php");
                    include("../controlador/controlador.php");
                ?>
                <div class="input-box">
                    <i class='bx bxs-user' style="margin-left: -35px; margin-top: 11px"></i>
                    <input type="text" name="usuario" placeholder="USUARIO">
                </div>

                <div class="input-box">
                    <i class='bx bxs-lock-alt' style="margin-left: -35px; margin-top: 11px"></i>
                    <input type="password" name="contraseña" id="pass" placeholder="CONTRASEÑA">
                </div>
    
                <button name="btningresar" type="submit" class="boton" style="font-size: 20px; margin-top: 10px">Ingresar</button>
                <button name="btnregistrar" type="submit" class="boton" style="font-size: 20px; margin-left: 15px"><a href="sing-up.php" style="color: gray">Registrarse</a></button>
                </center>
            </form>
        </div>
    </div>
</body>
</html>