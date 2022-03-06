<?php
require_once __DIR__ . "/product.php";
class Accessories extends Product{
    // tipo di accessorio
    protected string $acessoriesType;
    // costruttore
    function __construct(array $_productData)
    {
        $requiredKeys = ["accessoriesType"];
        foreach($requiredKeys as $key){
            if(!key_exists($key,$_productData)){
                var_dump("Mancano chiavi $key");
            }
        }
        parent::__construct($_productData);
        $this->setAccessoriesType($_productData);
    }
   

    /**
     * Get the value of aType
     */ 
    public function getAType()
    {
        return $this->aType;
    }

    /**
     * Set the value of aType
     *
     * @return  self
     */ 
    public function setAccessoriesType($accessoriesType)
    {
        $this->accessoriesType = $accessoriesType;

        return $this;
    }
}