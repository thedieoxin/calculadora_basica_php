<?php
/*
 * Este archivo es el que recibe la información enviada desde el index, (osea desde el formulario)
 * dentro de este archivo tambien deberemos incluir una llamada al archivo que contienen la clase principal
 * y las subclases que realizan las operaciones (funciones)
 *
 */

require_once('calculadora.php'); // Llamamos al archivo de la clase (Clase y Subclases)

$n1 = $_POST['n1']; // Rescatamos las variables, aqui la primera
$n2 = $_POST['n2']; // Aqui la segunda
$op = $_POST['op']; // Aqui el tipo de operacion a realizar (Suma, resta, multiplicacion, division)

$calc = new calculadora($n1,$n2); // Realizamos el llamado a la clase para usar sus funciones.

// Este switch es para ver que hacemos segun la operacion.
switch ($op){
    case "+":
        $resp = $calc->sumar(); // Si es suma llamamos a la subclave o al metodo sumar 
    break;

    case "-":
        $resp = $calc->restar(); // llamamos al metodo restar
    break;

    case "/":
        $resp = $calc->dividir(); // llamamos al metodo dividir
    break;

    case "*":
        $resp = $calc->multiplicar(); // llamamos al metodo multiplicar
    break;
    }
?>
<!-- Esta parte la hice en HTML solo para que se viera mas bonito y entendieran como funciona :D -->
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Mi Calculiadora :D</title>
        <meta charset="utf-8">
        <meta name="description" content="Mi Primera Calculadora en PHP">
        <meta name="author" content="www.Dieoxin.cl">
        <link rel="stylesheet" href="style.css?v=1.0">
    </head>
    <body>
        <div class="container">
            <h1>Mi Primera Calculiadora :D</h1>
            <div class="box">
                <!-- Aqui llamamos al resultado obtenido de la operacion. -->
                <label>Resultado : </label><input type="number" class="nomod" value="<?php echo $resp; ?>" />
            </div>
        </div>
    </body>
</html>
