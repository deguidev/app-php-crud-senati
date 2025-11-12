<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Básico 🍀</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1>PHP Básico</h1>
    <hr>
    <section>
        <h2>Variables</h2>

        <?php
        $nombre = "Diego Lipa 😁 <br>"; //PHP
        //String nombre = "Diego Lipa"; //JAVA
        //nombre = 'Diego Lipa' //Pyton
        echo "Nombre:   " . $nombre;

        $edad = 30;
        echo "Edad: " . $edad . "<br>";

        $profesor = true;
        echo "Es profesor?: " . $profesor . "<br>";

        $talla = 1.70;
        echo "Edad: " . $talla . "<br>"
        ?>

        <h2>Constantes</h2>
        <?php
        define("PI", 3.141516);
        echo "Valor de PI: " . PI . "<br>";
        ?>
    </section>
    <hr>
    <section>
        <h2 style="color: red;">Operadores</h2>
        <h3>Operadores Lógicos</h3>
        <h3>Operadores de Asignación</h3>
        <h3>Operadores Aritméticos</h3>
        <h3>Operadores Incremento y Decremento</h3>
    </section>
    <hr>
    <section>
        <h2 class="" style="color: red;">Control de flujo</h2>
        <h3>IF - ELSE</h3>
        <?php
        date_default_timezone_set("America/Lima");
        $hora_actual = date('H:i');
        $hora_limite = "10:59";
        echo strtotime("09:15:00"). "<br>";
        echo strtotime("20:00:00"). "<br>";

        if ($hora_actual > $hora_limite) {
            echo "Salida...." . "<br>";
        } else {
            echo "En clases...." . "<br>";
        }
        ?>

        <h3>IF ELSEIF ELSE</h3>
        <H3>SWITCH</H3>
        <h2 style="color: red;">BUCLES</h2>
        <h3>FOR</h3>
        <h3>WHILE</h3>
        <h3>FOR-EACH</h3>
    </section>
    <hr>
    <section>
        <h2 style="color: red;">Funciones</h2>
        <h3>Funciones con Paramtros</h3>
        <h3>Funciones con retorno</h3>
    </section>

    <section>
        <h2 style="color: red;">Arreglos</h2>
        <h3>Arreglo Indexado</h3>
        <h3>Arreglo Asociativos</h3>
    </section>
</body>

</html>