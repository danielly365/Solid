<?php

namespace Alura\Solid\Model;

class AluraMais extends Video implements Pontuavel, assistivel
{
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/' . str_replace(' ', '-', strtolower($this->categoria)) . '/' . str_replace(' ', '-', strtolower($this->nome));
    }

    public function recuperaPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
