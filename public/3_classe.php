<?php
  class Etudiant{
    public $nom;
    public $latitude;
    public $longitude;
    
    public function __construct($n,$l,$lon){
       $this->nom=$n;
       $this->latitude=$l;
       $this->longitude=$lon;
    
    }

    public function toJSON(){
      foreach($this as $name=>$value){
         $res[$name]=$value;
      }
      return json_encode($res);
    }

  }
?>
