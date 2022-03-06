<?php
class CreditCard
{
    
    private $cardNumber;
    private string $cardType;
    private $cardExpiration;
    private  $cvv;

    
    function __construct(array $_creditCardData)
    {
        $requiredKeys = ["cardNumber", "cardType", "cardExpiration", "cvv"];

        foreach ($requiredKeys as $key) {
            if (!key_exists($key, $_creditCardData)) {
                var_dump("Chiave mancante $key");
            }
        }
        $this->setCardNumber($_creditCardData["cardNumber"]);
        $this->setCardType($_creditCardData["cardType"]);
        $this->setCardExpiration($_creditCardData["cardExpiration"]);
        $this->setCvv($_creditCardData["cvv"]);
    }

    /**
     * Get the value of cardNumber
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */
    public function setCardNumber($cardNumber)
    {
        if(strlen($cardNumber)===16){
            $this->cardNumber = $cardNumber;
            return $this;
        }else{
            "non è valida";
        }   
    }

    /**
     * Get the value of cardType
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Set the value of cardType
     *
     * @return  self
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;

        return $this;
    }

    /**
     * Get the value of cardExpiration
     */
    public function getCardExpiration()
    {
        return $this->cardExpiration;
    }

    /**
     * Set the value of cardExpiration
     *
     * @return  self
     */
    public function setCardExpiration($cardExpiration)
    {
        // dichiaro variabile scadenza che è la data presa da cardExpiration
       $expire=date_create($cardExpiration);
       if(date_format($expire,"Y-m-d") >= date("Y-m-d")){
           $this->cardExpiration=$cardExpiration;
           return $this;
       }else{
           return "Carta non valida";
       }
    }

    /**
     * Get the value of cvv
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */
    public function setCvv($cvv)
    {
        if (is_numeric($cvv) && strlen($cvv) === 3) {
            $this->cvv = $cvv;
            return $this;
        } else {
            return "CVV non valido";
        }
    }
}