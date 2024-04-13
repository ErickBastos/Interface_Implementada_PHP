<?php

namespace App;

use App\Personagem;

class Guerreiro implements Personagem{

    public function Atacar($nome_Habilidade, $custo_Habilidade){

        $classe = 'Guerreiro';

        echo "
        \n --------------------------------------
        \n Classe: $classe
        \n Nome da Habilidade: $nome_Habilidade.
        \n Custo da Habilidade: $custo_Habilidade.
        \n --------------------------------------
        ";

    }
    
}

?>