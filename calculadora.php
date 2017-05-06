<?php
/*
 * Este es nuestro archivo de clase, en el tendremos la clase principal, y las funciones que realizan los calculos que necesitamos.
 *
 */
 
class Calculadora{
    
    public function calculadora($n1,$n2){
        $this->n1=$n1;
        $this->n2=$n2;
        }
    
    public function sumar(){
        $res = $this->n1 + $this->n2;
        return $res;
        }
    
    public function restar(){
        $res = $this->n1 - $this->n2;
        return $res;
        }
    
    public function multiplicar(){
        $res = $this->n1 * $this->n2;
        return $res;
        }
    
    public function dividir(){
        $res = $this->n1 / $this->n2;
        return $res;
        }
    }
  
  /* Creo que este archivo no necesita mucha explicacion :D */
  
  ?>
