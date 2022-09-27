<?php
require_once("models/resort_model.php");
require_once("util/resort_util.php");



class resort_controller{
    public static function Mostrar(){
   
      $persona[] = new resort_model(1,"Juan Perez",10,"Masculino");

      
     $persona[] = new resort_model(2,"Luz Gonzalez",18,"Femenino");

       
      $persona[] = new resort_model(3,"Ana Perez",23,"Femenino");

     
      $persona[] = new resort_model(4,"Sasha Rodriguez",26,"Femenino");

    
      $persona[] = new resort_model(5,"Josting Ramos",42,"Masculino");

     
      $persona[] = new resort_model(6,"Pedro Pazcal",27,"Masculino");

      
      $persona[] = new resort_model(7,"Nathan Drake",24,"Masculino");

      $persona[] = new resort_model(8,"Alexandra Daddario",22,"Femenino");


      $persona[] = new resort_model(9,"Camila Mendez",19,"Femenino");

      
      $persona[] = new resort_model(10,"Ellie Morgan",12,"Femenino");

        return $persona;
    }
}
?>



