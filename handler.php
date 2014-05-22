<?php

$whitelisted_email_domains=array('abv.bg', 'mail.bg', 'yahoo.com', 'gmail.com', 'dir.bg', 'hotmail.com', 'gbg.bg', 'mail.ru', 'imoti.net', 'yahoo.co.uk', 'data.bg', 'start.bg', 'yahoo.de', 'email.bg', 'yandex.ru', 'yahoo.es', 'mbox.contact.bg', 'mail.com', 'bitex.com', 'mail.orbitel.bg', 'address.bg', 'all.bg', 'gyuvetch.bg', 'msn.com', 'yahoo.fr', 'aol.com', 'hotmail.bg', 'vip.bg', 'abv.com', 'lycos.com', 'yahoo.it');


$preprocessing_check_email = $_POST['email'];
$preprocessing_check_email_domain = explode("@", $preprocessing_check_email);
$preprocessing_check_email_domain = $preprocessing_check_email_domain[(count($preprocessing_check_email_domain)-1)];
if($preprocessing_check_email){
        if(!in_array($preprocessing_check_email_domain, $whitelisted_email_domains)) {
                echo "Sorry, your e-mail provider is not whitelisted. Bye!";
                die();
        }
}


echo "<br>.<br>.<br>.<br>.<br>.<br> The real part of your program goes below .....";


?>
