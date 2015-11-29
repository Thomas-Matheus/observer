<?php

namespace App\Products;

/**
 * @author Thomas Matheus <thomas@voxtecnologia.com.br>
 */
class XBoxOne implements ProductsInterface
{

    /**
     * @var string
     */
    private $productName = 'XBoxOne';

    /**
     * @var string
     */
    private $defaultPrice = '2000';

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
