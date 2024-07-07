<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>SIGPAR</title>
</head>
<body>
    <div class="main">
        <div class="login">
            <form method="post" action="../controlador/controlador.php">
                <center>
                <h1><i>Registrarse</i></h1>
                
                <div class="input-box">
                    <i class='bx bx-child' style="margin-left: -35px; margin-top: 11px"></i>
                    <input type="text" name="nombre" placeholder="NOMBRE">
                </div>
    
                <div class="input-box">
                    <i class='bx bxs-universal-access' style="margin-left: -35px; margin-top: 11px"></i>
                    <input type="text" name="apellido" placeholder="APELLIDO">
                </div>

                <div class="input-box">
                    <i class='bx bxs-id-card' style="margin-left: -35px; margin-top: 11px"></i>
                    <input type="text" name="cedula" placeholder="CEDULA">
                </div>

                <div class="input-box">
                    <i class='bx bxs-user' style="margin-left: -35px; margin-top: 11px"></i>
                    <input type="text" name="usuario" placeholder="USUARIO">
                </div>

                <div class="input-box">
                    <i class='bx bxs-lock-alt' style="margin-left: -35px; margin-top: 11px"></i>
                    <input type="text" name="contraseña" placeholder="CONTRASEÑA">
                </div>
                <button name="btnRegistrar" type="submit" class="boton" style="margin-top: 25px; font-size: 22px">Aceptar</button>
                <button name="btncancelar" type="submit" class="boton" style="margin-left: 12px; font-size: 22px"><a href="log-in.php" style="color: gray">Cancelar</a></button>
                </center>
            </form>
        </div>
    </div>
</body>
</html>