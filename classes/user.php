<?php 
require_once __DIR__ . '/creditCard.php';
class User {
    private string $firstName;
    private string $lastName;
    private string $email;
    private bool $registered=false;
    // carrello lo imposto pubblico così posso usarlo nell'index
    private $cart = [];
    private $creditCard;
    private int $discount=0;


    function __construct(array $_userData)
    {
        $requiredKeys=["firstName","lastName","email","registered","cart"];
        foreach($requiredKeys as $key){
            if(!key_exists($key,$_userData)){
                var_dump("Chiave mancante $key");
            }
        }
        $this->setFirstName($_userData["firstName"]);
        $this->setLastName($_userData["lastName"]);
        $this->setEmail($_userData["email"]);
        $this->setRegistered($_userData["registered"]);
        $this->cart = $_userData["cart"];
        $this->creditCard = new CreditCard($_userData);
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of registered
     */ 
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Set the value of registered
     
     * @return  self
     */ 
    public function setRegistered($registered)
    {
        $this->registered = $registered;
        // quando setta registraziobe esegue pure funzione discount
        $this->Discount();
        return $this;
    }

    // funzione per pushare nuovo prodotto al carrello
    public function pushCart($product){
        array_push($this->cart,$product);
    }

    // funzione per sconto
    public function Discount(){
        // se è registrato ritorna il 20% di sconto altrimenti niente
        if($this->registered){
            return $this->discount = 20;
        } else{
            return $this->discount=0;
        }
    }
}