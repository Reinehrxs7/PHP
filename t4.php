<?php
class biblioteca {
    public $nome;
    public $livro = array();

    public function __construct($nome){
        $this->nome = $nome; 
    }

    public function adicionarLivro($titulo){
        $this->livros[] = $titulo;
    }

    public function buscarLivro($termo){
        $resultado = array();
        foreach ($this->livros as $livro){
            if (stripos($livro, $termo)!== false){
                $resultado[] = $livro;
            }
        }

        return $resultado;

    }

    public function listarLivro(){
        if (count($this->livros)==0){
            return "nenhum livro cadastrado.";
        }
        
        return $lista;

    }
}

$biblioteca = new biblioteca("biblioteca escolar");

$biblioteca->adicionarLivro("Revolção dos bichos");
$biblioteca->adicionarLivro("Bíblia");
$biblioteca->adicionarLivro("O capital");
$biblioteca->adicionarLivro("Magico de Ozz");

echo $biblioteca->listarLivros() . "<br>";

?>
