<?php

   class User {

    public $nome;
    public $mail;
    public $lastName;
    public $status="disabled";

    //costruttore
    function __construct(){
        var_dump("io sono il construttore");
    }
    


    //functions
    public function getFullName(){
        return "ciao da ".$this->nome." ".$this->mail." ";
    }
    public function fetEmail(){
        echo "QUESTA è L'EMAIL : ".$this->mail." ";
    }
    public function modStatus(){
        $this->status="enabled";
    }
    public function showStatus(){
        echo "questo è lo stato ".$this->status;
    }

   }

   $pippo=new User("Pippo","Ruggeri","pippo@email.com");
   $pippo->nome="Pippo";
   $pippo->mail="pippo@email.com";
   $pippo->lastName="ruggeri";
   echo $pippo->getFullName();
   $pippo->fetEmail();
   $pippo->showStatus();
   $pippo->modStatus();
   $pippo->showStatus();

var_dump($pippo);


?>