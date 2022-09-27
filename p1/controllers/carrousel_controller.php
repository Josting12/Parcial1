<?php
require_once("models/carrousel_model.php");
require_once("util/carrousel_util.php");

    class carrousel_controller{
        public static function Mostrar(){
            
          $carousel[]= new carrousel_model(1,"Imagen 1","Honda Civic Type R","Imagenes//Honda1.jpg","Precio  Desde USD 300.00 hasta USD 46,900.00");
          $carousel[]= new carrousel_model(2,"Imagen 2","Audi R8","Imagenes//Audi2.jpg"," Precio Desde los 168.500.00 USD Hasta 225,050.00");
          $carousel[]= new carrousel_model(3,"Imagen 3","Mercedes AMG-Gt 63","Imagenes//Mercedes3.jpeg","Precio de 230,000.00 Dolares.");
          $carousel[]= new carrousel_model(4,"Imagen 4","BMW M2","Imagenes//M2.jpg","Precio De 70,000.00 Dolares.");
          $carousel[]= new carrousel_model(5,"Imagen 5","Nissan Gtr","Imagenes//Gtr.jpg","Precio Entre 108,000.00 y los 126,000.00 Dolares.");
            return $carousel;
        }


    }

?>

