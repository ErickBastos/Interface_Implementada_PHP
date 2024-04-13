<?php

namespace App;

use App\Mensageiro;

class Whatsapp implements Mensageiro {
    
    protected $mensagem;

    public function enviar($mensagem) {

        if($mensagem)
        {
            echo "\n $mensagem Whatsapp \n";
        }

    }

}

?>