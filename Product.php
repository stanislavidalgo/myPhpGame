
<?php
// Ruslanas ryt papasakos.
class Product
{
    private $name;
    private $price;
    private $sku;
    private $description;
    private $shortDescription;
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }
    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }
    /**
     * @param mixed $sku
     */
    public function setSku($sku): void
    {
        $this->sku = $sku;
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }
    /**
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }
    /**
     * @param mixed $shortDescription
     */
    public function setShortDescription($shortDescription): void
    {
        $this->shortDescription = $shortDescription;
    }
    public function getPriceWithTax()
    {
        return $this->getPrice() * 1.21;
    }
    public function isSalable()
    {
        return true;
    }

    public function save()
    {
        // saves object to DB
    }




    
}
