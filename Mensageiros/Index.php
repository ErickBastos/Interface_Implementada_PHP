<?php

require 'vendor/autoload.php';

use App\Whatsapp;
use App\Email;
use App\Sms;

$Whats = new Whatsapp();
$Whats->enviar("Mensagem enviada por: ");

$Sms = new Sms();
$Sms->enviar("Mensagem enviada por: ");

$Email = new Email();
$Email->enviar("Mensagem enviada por: ");

?>