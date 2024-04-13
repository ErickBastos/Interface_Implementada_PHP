<?php

namespace App;

use App\Mensageiro;

class Email implements Mensageiro{

    private $mensagem;

    public function enviar($mensagem) {

        if($mensagem)
        {
            echo "\n $mensagem E-mail \n";
        }

    }

}

?>