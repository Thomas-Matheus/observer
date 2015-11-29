<?php

namespace App\Subject;
use App\Products\ProductsInterface;

/**
 * @author Thomas Matheus <thomas@voxtecnologia.com.br>
 */
class ProductSubject implements \SplSubject
{
    /**
     * @var array
     */
    private $observers;

    /**
     * @var object
     */
    private $promotions;

    /**
     *
     */
    function __construct()
    {
        $this->observers = array();
    }

    /**
     * @param \SplObserver $observer
     * @return void
     */
    public function attach(\SplObserver $observer)
    {
        $idObserver = spl_object_hash($observer);
        $this->observers[$idObserver] = $observer;
    }

    /**
     * @param \SplObserver $observer
     * @return void
     */
    public function detach(\SplObserver $observer)
    {
        $idObserver = spl_object_hash($observer);
        unset($this->observers[$idObserver]);
    }

    /**
     * @param ProductsInterface $product
     * @return void
     */
    public function promotion(ProductsInterface $product)
    {
        if ($product->defaultPrice() > $product->newPrice()) {
            $this->promotions = $product;
            $this->notify();
        }
    }

    /**
     * @return object
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * @return void
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

}
