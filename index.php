<?php
/*
 * Renato Soto M.
 * Ejemplo de POO - Clase en PHP
 * Calculadora Basica
 */
?>
<!DOCTYPE HTML>
<html lang="es">
    <!-- Esta parte contiene solo datos relacionados al HTML de la pagina, 
         datos tales como, Titulo, descripción, autor, metas de informacion 
         que puedan ser necesarios para mejorar las busquedas, etc. -->
    <head>
        <title>Mi Calculadora</title>
        <meta charset="utf-8">
        <meta name="description" content="Mi Primera Calculadora en PHP">
        <meta name="author" content="www.Dieoxin.cl">
        <link rel="stylesheet" href="style.css?v=1.0">
    </head>
    <!-- Aqui comienza el cuerpo del HTML -->
    <body>
        <h1>Mi Primera Calculiadora :D</h1>
        <!-- Aqui comienza nuestro formulario :D -->
        <form name="form" method="post" action="controlador.php">
            <div class="box">
                <label> Valor 1 </label><input type="number" id="n1" name="n1" />
            </div>
            <div class="box">
                <label> Valor 1 </label><input type="number" id="n2" name="n2" />
            </div>
            <div class="box">
                <label> Seleccione Operacion </label>
                <select name="op" id="op">
                    <option value="+">Sumar</option>
                    <option value="-">Restar</option>
                    <option value="/">Dividir</option>
                    <option value="*">Multiplicar</option>
					<option value="p">Potencia</option>
                </select>
            </div>
            <div class="box">
                <!-- Este sera el boton que se encarga de enviar las variables desde el index al controlador.php -->
                <button type="submit" id="calcular" name="calcular">Calcular</button>
            </div>
        </form>
    </body>
</html>
