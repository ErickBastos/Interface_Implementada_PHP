<?php

namespace App;

use App\Mensageiro;

class Sms implements Mensageiro{
    protected $mensagem;

    public function enviar($mensagem) {

        if($mensagem)
        {
            echo "\n $mensagem SMS \n";
        }

    }
}

?>