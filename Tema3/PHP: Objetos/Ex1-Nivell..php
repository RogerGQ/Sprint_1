<?php
// Definicion de classe
class Employee {
      // Atributos de la classe
      protected $nombre;
      protected $sueldo;
      // Metodos de la classe
      public function initialize($nom,$sou){
          $this -> nombre = $nom;
          $this -> sueldo = $sou;
      }
      public function printNombre(){
          return $this -> nombre;
      }
      public function printSueldo(){
          return $this -> sueldo;
      }
     
}
$persona = new Employee();
$persona -> initialize ('Juan', rand(0,10000)); 
echo $persona -> printNombre().' - '.$persona -> printSueldo().'<br>';
?>

