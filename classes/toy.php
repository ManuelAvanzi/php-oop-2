<?php
require_once __DIR__ . "/product.php";

class Toy extends Product
{
    
    protected string $material;

    // funzione costruttore
    function __construct(array $_productData)
    {
        $requiredKeys = ["material"];
        foreach ($requiredKeys as $key) {
            if (!key_exists($key, $_productData)) {
                var_dump("chiave mancante $key");
            }
        }
        // invoco costruttore del parent
        parent::__construct($_productData);
        
        $this->setMaterial($_productData["material"]);
    }


    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }
}