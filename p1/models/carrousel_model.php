
<?php

Class carrousel_model {
    private $id;
    private $tituloc;
    private $descrip;
    private $vinculo;
    private $text;
  

    public function __construct($id,$tituloc,$descrip,$vinculo,$text){
        $this->id=$id;
        $this->tituloc = $tituloc;
        $this->descrip = $descrip;
        $this->vinculo = $vinculo;
        $this->text = $text;
     
    }
    public function setid($id){
        $this->id= $id;
    }
    public function settituloc($tituloc){
        $this->tituloc= $tituloc;
    }

    public function setdescrip($descrip){
        $this->descrip = $descrip;
    }

    public function setvinculo($vinculo){
        $this->vinculo = $vinculo;
    }

    public function settext($text){
        $this->text = $text;
    }

   
    public function getid(){
        return $this->id;
    }


    public function gettituloc(){
        return $this->tituloc;
    }

    public function getdescrip(){
        return $this->descrip;
    }

    public function getvinculo(){
        return $this->vinculo;
    }

    public function gettext(){
        return $this->text;
    }

    






}


?>
