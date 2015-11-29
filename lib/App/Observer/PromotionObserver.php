<?php

namespace App\Observer;

/**
 * @author Thomas Matheus <thomas@voxtecnologia.com.br>
 */
class PromotionObserver implements \SplObserver
{
    /**
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        echo $str = 'Promotion - Nova promoção do produto '
            . $subject->getPromotions()->getProductName()
            . ' valor R$ ' . $subject->getPromotions()->newPrice()
            . ' <br />';
    }

}

