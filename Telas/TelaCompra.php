<?php

    namespace PHP\SistemaLivros\DAO;

    require_once('../DAO/Conexao.php');
    require_once('../DAO/Comprar.php');

    use PHP\SistemaLivros\DAO\Conexao;
    use PHP\SistemaLivros\DAO\Comprar;

    $conexao = new conexao();
    $consultarcompra = new Comprar();

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livraria</title>
        <link rel="stylesheet" href="css/cssTelaCompra.css">
    </head>
    <body><!--Inicio Body-->
        <header id="header"><!--Inicio Header-->

            <nav id="nav"><!--Inicio nav-->

                

                <a href="TelaLogado.php" style="color: black;"><!-- Inicio Link Header TelaPrincipal-->
                    <div id="tituloHeaderBloco"><!--Inicio tituloHeaderBloco-->
                        <img id="iconeTitulo" src="imagens/171322.png" width="50px" height="50px"><!--Icone Título-->
                        <h1 id="tituloHeader">Livraria</h1><!--Título do Header-->
                    </div><!-- Fim tituloHeaderBloco-->
                </a><!-- Fim Link Header TelaPrincipal-->
                
            </nav><!--Fim nav-->
        
        </header><!--Fim Header-->

        
        <main id="main"><!--Inicio Main-->

            
            
            
            <section id="section"><!--Inicio Section-->
                <form method = "POST">

                    <div id = "compraBloco">
    
                        <select name = "nome" style = "margin-left: 33%; margin-top: 1%; border-radius: 5px; font-size: 20px;">
                            <option>Escolha um Livro para Comprar</option>
                            <option value = "O Menino do Dedo Verde">O Menino do Dedo Verde</option>
                                
                            <option>livro2</option>
                            <option>livro3</option>
                            <option>livro4</option>
    
                        </select>

                        <select>
                            <option>Forma de Pagamento</option>
                            <option>Crédito</option>
                            <option></option>
                        
                        </select>

                        <button class = "botao">Consultar</button>

                        <div id = "livroBloco">
                            <?php
    
                                $consultarcompra->consultarLivro($conexao,$_POST['nome']);
                                
                            ?>
                        </div>

                        <div style = "float: right; margin-right: 90px; margin-top: 15px;">
                            <button class = "botao" style = "width: 200px;">Finalizar Compra</button>
                        </div>

                    </div>
                </form>

            </section><!--Fim Section-->
            
        </main><!--Fim Main-->


        <footer id="footer"><!--Inicio Footer-->
                
        </footer><!--Fim Footer-->

    </body><!--Fim Body-->
</html>