<?php

if(isset($_POST['author'])){
    $r = new HttpRequest('https://www.google.com/recaptcha/api/siteverify?secret=6LcBGBUTAAAAAIMMSwe-ebmOhgMO3c-vmXn_Yyfb&response='.$_POST['g-recaptcha-response'], HttpRequest::METH_POST);
    $r->setOptions(array('cookies' => array('lang' => 'ru')));
    try {
        echo $r->send()->getBody();
    } catch (HttpException $ex) {
        echo $ex;
    }
}

?>