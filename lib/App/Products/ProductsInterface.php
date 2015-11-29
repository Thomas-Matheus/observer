<?php

namespace App\Products;

/**
 * @author Thomas Matheus <thomas@voxtecnologia.com.br>
 */
interface ProductsInterface
{
    public function __construct($newPrice);

    public function newPrice();

    public function defaultPrice();
}