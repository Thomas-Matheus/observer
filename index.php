<?php

require 'vendor/autoload.php';

$productSubject = new \App\Subject\ProductSubject();

$productSubject->attach(new \App\Observer\PromotionObserver());
$productSubject->attach(new \App\Observer\MailerObserver());

$ps4 = new \App\Products\Playstation4('1200');
$productSubject->promotion($ps4);

$xone = new \App\Products\XBoxOne('2000');
$productSubject->promotion($xone);
