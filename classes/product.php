<?php
class Product
{
    protected int $id;
    protected string $name;
    protected string $description;
    protected float $price;
    // dichiaro funzione costruttore
    // che verrà eseguita una volta eseguita un istanza
    function __construct(array $_productData)
    {
        // controllo se le chiavi sono state inserite correttamente
        $requiredKeys = ["id", "name", "description", "price"];
        foreach ($requiredKeys as $key) {
            if (!key_exists($key, $_productData)) {
                var_dump("CHIAVE NON TROVATA $key");
            }
        }
        $this->setId($_productData["id"]);
        $this->setName($_productData["name"]);
        $this->setDescription($_productData["description"]);
        $this->setPrice($_productData["price"]);
    }
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}