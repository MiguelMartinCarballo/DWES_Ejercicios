<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01 - Miguel Martín</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <!-- Se genera la tabla  -->
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Teléfono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- Se introducen los datos de diferentes formas usando php -->
                <td>Miguel</td>
                <td><?php echo "Martín" ?></td>
                <td><?php print "20" ?></td>
                <td><?php echo '111222333' ?></td>
                <td><?php print 'miguel' . "@gmail.com" ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>