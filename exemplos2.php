<?php
// exemplo 7
class MinhaClasseDestruivel {
    function __construct() {
        echo "No construtor<br>";
        $this->name = "MinhaClasseDestruivel";
    }

    function __destruct() {
        echo "Destruindo " . $this->name . "<br>";
    }
}

$obj = new MinhaClasseDestruivel();

// 8
class Pessoa {
    private $nome;

    function setNome($novoNome) {
        $this->nome = $novoNome;
    }

    function getNome() {
        return $this->nome;
    }
}

$p = new Pessoa;
$p->setNome('Ribamar');
echo $p->getNome();

// 9
class Animal {
    public $especie;
    public $peso;

    public function tipoEspecie() {
        return "Este animal é da espécie {$this->especie}";
    }
}

class Mamifero extends Animal {
    public $quantidadePernas;
    public $temPelo;

    public function temQuantasPernas() {
        return "O animal da espécie {$this->especie} tem {$this->quantidadePernas} pernas";
    }
}

$mamifero = new Mamifero();
$mamifero->especie = 'Cavalo';
$mamifero->quantidadePernas = 4;
echo $mamifero->temQuantasPernas();

 //10
class Pai {
    public function indexPai() {
        return 'Index pai';
    }
}

class Filho extends Pai {
    public function indexFilho() {
        return 'Index filho';
    }
}

class Neto extends Filho {
    public function indexNeto() {
        return 'Index neto';
    }
}

$neto = new Neto();
echo $neto->indexPai() . '<br>';
echo $neto->indexFilho() . '<br>';
echo $neto->indexNeto();

// 11
class Retangulo {
    public $l;

    public function getArea($l, $a) {
        return $l * $a;
    }

    public function getPerimetro($l, $a) {
        return 2 * ($l + $a);
    }
}

 //12
namespace classes;

class Produto {
    public function mostrarDetalhes() {
        echo 'Detalhes do produto da pasta classes';
    }
}

namespace models;

class Produto {
    public function mostrarDetalhes() {
        echo 'Detalhes do produto da pasta models';
    }
}
require 'classes/produto.php';
require 'models/produto.php';

$produtoc = new \classes\Produto();
$produtom = new \models\Produto();

$produtoc->mostrarDetalhes();
echo '<br>';
$produtom->mostrarDetalhes();
?>

