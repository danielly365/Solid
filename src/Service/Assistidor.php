<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\assistivel;

class Assistidor
{
    public function assistir(assistivel $conteudo){
        $conteudo->assistir();
    }
}
