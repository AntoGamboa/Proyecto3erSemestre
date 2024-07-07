
<?php require_once('../controlador/controlador.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container row ">
        <table class="table col-8">
            <thead>
                <tr>
                    <th scope="col">identificador</th>
                    <th scope="col">nombre de usuarios</th>
                    <th scope="col">nombre </th>
                    <th scope="col">apellido</th>
                    <th scope="col">cedula</th>
                    <th scope="col">rol</th>
                    <th scope="col">password</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usermodel->SelectAll() as $usuario): ?>
                <tr>
                    <th><?php echo $usuario->id_user ?></th>
                    <td><?php echo $usuario->nom_usuario  ?></td>
                    <td><?php echo $usuario->nombre  ?></td>
                    <td><?php echo $usuario->apellido  ?></td>
                    <td><?php echo $usuario->cedula ?></td>
                    <td><?php echo $usuario->nom_rol ?></td>
                    <td><?php echo $usuario->contraseña ?></td>
                </tr>
                <?php endforeach?>

            </tbody>
        </table>
    </div>


</body>

</html>