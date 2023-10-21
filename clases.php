<?php
class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function getEdad(){
        return $this->edad;
    }
}

 $persona = new Persona("Gaston", 42);

echo "Datos de la persona: " . $persona->getNombre() . " " . $persona->getEdad() .PHP_EOL;
 

class Calculadora {
    public function sumar($num1, $num2){
        return $num1 + $num2;
    }
    public function restar ($num1, $num2){
        return $num1 - $num2;
    }
    public function dividir ($num1, $num2){
        if($num2 != 0){
            return $num1/$num2;
        }else {
            return "no se puede dividir por 0";
        }
    }
    public function multiplicar ($num1, $num2){
        return $num1 * $num2;
    }
}

 $calc = new Calculadora;
echo $calc->sumar(3,5) . PHP_EOL;
echo $calc->restar(34,23) . PHP_EOL;
echo $calc->dividir(34,0) . PHP_EOL;
echo $calc->dividir(34,2) . PHP_EOL;
echo $calc->multiplicar(3,6) . PHP_EOL;


interface Animal {
    public function comer();
    public function dormir();
 
}

class Perro implements Animal {    
    private $hambre;
    private $sueño;
    private $nombre;

    public function __construct(){
        $this->hambre = true;
        $this->sueño = true;
        $this->nombre = "Paco";
    }
   
    public function comer (){
        if($this->hambre){
            $this->hambre = false;
            echo "el perro esta comiendo". PHP_EOL;
        }
        else {
            echo "No tiene hambre" .PHP_EOL;
        }
    }

    public function dormir(){
        if($this->sueño){
            $this->sueño =false;
            echo "El perro esta durmiendo" .PHP_EOL;
        }
        else{
            echo "No tiene sueño".PHP_EOL;
        }
    }
    public function getHambre(){
        return $this->hambre;
    }
    public function getSueño(){
        return $this->sueño;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function ladrar(){
        echo "guauu  gauuu!!" . PHP_EOL;
    }
}
$perro = new Perro;

echo "El perro se llama " . $perro->getNombre() . PHP_EOL ;
echo $perro->getNombre() . " ";
echo $perro->ladrar(). PHP_EOL ;
$perro->comer();
$perro->comer();
$perro->dormir();
$perro->dormir();

?>

