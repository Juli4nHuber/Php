<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi primera pagina</title>
</head>
<body>
    <?php
        print "Bienvenidos a mi primera pagina web <br>";
        print "Bienvenidos dijeeee <br>";
		$nombre="Juan";
		$edad = 46;

		print "El nombre del gil este es: $nombre <br>";

        include 'funcion.php';

        mostrarDatos();
    ?>
</body>
</html>