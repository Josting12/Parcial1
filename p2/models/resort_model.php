<?php

Class resort_model {
    private $id;
    private $nombre;
    private $edad;
    private $sexo;
   
  

    public function __construct($id,$nombre,$edad,$sexo){
        $this->id=$id;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->sexo = $sexo;
      
    }
    public function setid($id){
        $this->id= $id;
    }
    public function setnombre($nombre){
        $this->tituloc= $nombre;
    }

    public function setedad($edad){
        $this->edad = $edad;
    }

    public function setsexo($sexo){
        $this->edad = $sexo;
    }

   
    public function getid(){
        return $this->id;
    }


    public function getnombre(){
        return $this->nombre;
    }

    public function getedad(){
        return $this->edad;
    }

    public function getsexo(){
        return $this->sexo;
    }

 
    


}


?>