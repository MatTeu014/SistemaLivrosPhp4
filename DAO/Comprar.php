<?php

namespace PHP\SistemaLivros\DAO;

require_once('Conexao.php');
use PHP\SistemaLivros\DAO\Conexao;

class Comprar{

    public function comprarLivro(Conexao $conexao, int $codigoLivroFK, int $codigoClienteFK, int $quantidadeLivro, string $formaPagamento, int $precoTotal){

        try{

            $conn = $conexao->conectar();//Abrir a conexao
            $sql = "insert into compra(codigoLivroFK,codigoClienteFK,quantidadeLivro,formaPagamento,precoTotal) values('$codigoLivroFK','$codigoClienteFK','$telefone','$quantidadeLivro','$formaPagamentol','$precoTotal')";
            $result = mysqli_query($conn,$sql);//Executo o comando
            mysqli_close($conn);//Fechar a porta do banco de dados

            if($result){
                header('Location:TelaLogado.php');
                return "<br><br>Inserido com sucesso!";
            }

            return "<br><br>Não Inserido";

        }catch(Exception $erro){
            return "<br><br>Algo deu Errado!".$erro;

        }//fim do catch


    }//fim do metodo

    public function consultarLivro(Conexao $conexao, string $nome){

        $conn = $conexao->conectar();
        $sql = "select * from livro where nome = '$nome'";
        $result = mysqli_query($conn,$sql);

        try{
            while($dados = mysqli_fetch_Array($result)){
    
                if($dados['nome'] == $nome){
                    echo "<br>Título: ".$dados['nome']."<br>Autor: ".$dados['autor']."<br>Categoria:".$dados['categoria']."<br>Quantidade: ".$dados['quantidade']."<br>Preço: R$".$dados['preco'];
                    return;
                }
            }
        }catch(Exception $erro){
            echo "Algo deu errado!". $erro;
        }
    }


}//fim do class

?>