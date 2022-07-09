<?php

$n1 = 69;	// Rescatamos las variables, aqui la primera
$n2 = 68;	// Aqui la segunda
$op = '+';	// Aqui el tipo de operacion a realizar 
			// (+=Suma, p=potencia, *=multiplicacion, /=division)

// Creamos la clase claculadora
class Calculadora {
	// instanciamos los valores a usar en la calculadora
    public $an1=0;
	public $an2=0;
	
	//
    public function __construct($n1,$n2){
        $this->an1 = $n1;
        $this->an2 = $n2;
        }
    public function sumar(){
        $res = $this->an1 + $this->an2;
        return $res;
        }
	public function potencia(){
        $res = pow($this->an1,$this->an2);
        return $res;
        }  
    public function multiplicar(){
        $res = $this->an1 * $this->an2;
        return $res;
        }
    
    public function dividir(){
        $res = $this->an1 / $this->an2;
        return $res;
        }
    }

$calc = new Calculadora($n1,$n2); 
// Realizamos el llamado a la clase para usar sus funciones.


// Este switch es para ver que hacemos segun la operacion.
switch ($op){
    case "+":
        $resp = $calc->sumar(); // Si es suma llamamos a la subclave o al metodo sumar 
    break;

    case "/":
        if (($n1==0) or ($n2==0)){
            $resp = "No se puede dividir por 0";
			// Mensaje de error cuando se divide por 0
            }
        else{
            $resp = $calc->dividir(); // llamamos al metodo dividir
            }
    break;

    case "*":
        $resp = $calc->multiplicar(); // llamamos al metodo multiplicar
    break;
	
	case "p":
        $resp = $calc->potencia(); // llamamos al metodo potencia
    break;
    }

echo $resp;