// exemplo 1
<?php
class Pessoa {
    private $nome = 'João Brito';

    public function getNome() {
        return $this->nome;
    }
}

$p = new Pessoa();
echo $p->getNome();

// exemplo 2
class FiguraGeometrica {
    public $altura;
    public $largura;

    public function area($altura, $largura) {
        return $largura * $altura;
    }
}

$figura = new FiguraGeometrica();
echo $figura->area(5, 10); // 50

// exemplo 3
class Humano {
    public $nome = 'Ribamar';
    public $sobreNome = 'Sousa';

    public function nomeCompleto() {
        return $this->nome . ' ' . $this->sobreNome;
    }
}

$homem = new Humano();
echo $homem->nomeCompleto();

// exemplo 4
class MinhaClasse {
    const CONSTANTE = 'valor constante';

    public function mostrarConstante() {
        echo self::CONSTANTE . "\n";
    }
}

echo MinhaClasse::CONSTANTE . "\n";

$classe = new MinhaClasse();
$classe->mostrarConstante();
echo $classe::CONSTANTE;

// exemplo 5
class Humano {
    private $nome;
    private $sobreNome;

    public function __construct($n, $s) {
        $this->nome = $n;
        $this->sobreNome = $s;
    }

    public function nomeCompleto() {
        return $this->nome . ' ' . $this->sobreNome;
    }
}

$homem = new Humano('Ribamar', 'Sousa');
$mulher = new Humano('Fátima', 'Evangelista');

echo $homem->nomeCompleto();
echo $mulher->nomeCompleto();

// exemplo 6
class Noticia {
    public $titulo;
    public $texto;

    public function __construct($valorTit, $valorTxt) {
        $this->titulo = $valorTit;
        $this->texto = $valorTxt;
    }
}

class NoticiaPrincipal extends Noticia {
    public $imagem;

    public function __construct($valorTit, $valorTxt, $valorImg) {
        parent::__construct($valorTit, $valorTxt);
        $this->imagem = $valorImg;
    }
}

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

// exemplo 8
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

// exemplo 9
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

// exemplo 10
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

// exemplo 11
class Retangulo {
    public $l;

    public function getArea($l, $a) {
        return $l * $a;
    }

    public function getPerimetro($l, $a) {
        return 2 * ($l + $a);
    }
}

// exemplo 12
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

