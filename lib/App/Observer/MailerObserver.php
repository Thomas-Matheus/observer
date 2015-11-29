<?php

namespace App\Observer;

/**
 * @author Thomas Matheus <thomas@voxtecnologia.com.br>
 */
class MailerObserver implements \SplObserver
{
    /**
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        echo $str = 'Mailer - Nova promoção do produto '
            . $subject->getPromotions()->getProductName()
            . ' valor R$ ' . $subject->getPromotions()->newPrice()
            . '<br />';
    }

}
