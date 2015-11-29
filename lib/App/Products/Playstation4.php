<?php

namespace App\Products;

/**
 * @author Thomas Matheus <thomas@voxtecnologia.com.br>
 */
class Playstation4 implements ProductsInterface
{

    /**
     * @var string
     */
    private $productName = 'Playstation 4';

    /**
     * @var string
     */
    private $defaultPrice = '2500';

    /**
     * @var string
     */
    private $newPrice;

    /**
     * @param $newPrice
     */
    public function __construct($newPrice)
    {
        $this->newPrice = $newPrice;
    }

    /**
     * @return string
     */
    public function newPrice()
    {
        return $this->newPrice;
    }

    /**
     * @return string
     */
    public function defaultPrice()
    {
        return $this->defaultPrice;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

}
