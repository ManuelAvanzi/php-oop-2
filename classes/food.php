<?php  
require_once __DIR__ . "/product.php";

class Food extends Product{
    // tipo di cibo
    protected string $type;
    // marca del cibo 
    protected string $brand;
    // data di scadenza
    protected $expiration;

    // funzione costruttore
    function __construct(array $_productData)
    {
        $requiredKeys=["type","brand","expiration"];
        foreach($requiredKeys as $key){
            if(!key_exists($key,$_productData)){
                var_dump("chiave mancante $key");
            }
        }
        // invoco parent
        parent::__construct($_productData);
        $this->setType($_productData["type"]);
        $this->setBrand($_productData["brand"]);
        $this->setExpiration($_productData["expiration"]);
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of expiration
     */ 
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set the value of expiration
     *
     * @return  self
     */ 
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }
}