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

// 2
class FiguraGeometrica {
    public $altura;
    public $largura;

    public function area($altura, $largura) {
        return $largura * $altura;
    }
}

$figura = new FiguraGeometrica();
echo $figura->area(5, 10); // 50

 //3
class Humano {
    public $nome = 'Ribamar';
    public $sobreNome = 'Sousa';

    public function nomeCompleto() {
        return $this->nome . ' ' . $this->sobreNome;
    }
}

$homem = new Humano();
echo $homem->nomeCompleto();

// 4
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

// 5
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

//6
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

