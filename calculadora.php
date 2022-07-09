<?php
/*
 * Este es nuestro archivo de clase, en el tendremos la clase principal, y las funciones que realizan los calculos que necesitamos.
 *
 */
 
class Calculadora {
    public $an1=0;
	public $an2=0;
	
    public function __construct($n1,$n2){
        $this->an1 = $n1;
        $this->an2 = $n2;
        }
    
    public function sumar(){
        $res = $this->an1 + $this->an2;
        return $res;
        }
    
    public function restar(){
        $res = $this->an1 - $this->an2;
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
	public function potencia(){
        $res = pow($this->an1,$this->an2);
        return $res;
        }
    }
  
  /* Creo que este archivo no necesita mucha explicacion :D */
  
  ?>
