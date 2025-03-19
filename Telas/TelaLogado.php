<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livraria</title>
        <link rel="stylesheet" href="css/cssTelaPrincipal.css">
    </head>
    <body><!--Inicio Body-->
        <header id="header"><!--Inicio Header-->

            <nav id="nav"><!--Inicio nav-->

                <div style="float:right; margin-top: 17px;margin-right: 20px;">
                    <button class="botao"><a href = "TelaPrincipal.php" style = "color: white;">Deslogar</a></button>
                </div>

                <div id="barraPesquisaBloco"><!--Inicio barraPesquisaBloco-->
                    <input id="barraPesquisa" placeholder="Pesquise por um Título" size="45px"><!--Barra de Pesquisa-->
                    <picture id="iconePesquisa">
                        <img src="imagens/search-icon-png-5.png" width="40px"><!--Icone pesquisa-->
                    </picture>
                </div><!--Fim barraPesquisaBloco-->
                
                <a href="TelaLogado.php" style="color: black;"><!-- Inicio Link Header TelaPrincipal-->
                    <div id="tituloHeaderBloco"><!--Inicio tituloHeaderBloco-->
                        <img id="iconeTitulo" src="imagens/171322.png" width="50px" height="50px"><!--Icone Título-->
                        <h1 id="tituloHeader">Livraria</h1><!--Título do Header-->
                    </div><!-- Fim tituloHeaderBloco-->
                </a><!-- Fim Link Header TelaPrincipal-->
                
            </nav><!--Fim nav-->
        
        </header><!--Fim Header-->

        
        <main id="main"><!--Inicio Main-->

            
            <aside id="aside"><!--Inicio Aside-->
                <h1 class="tituloCategorias">Categorias</h1><!--Titulo Categorias-->
                <div id="categoriasBloco"><!--Inicio Categorias Bloco-->

                    <div class="categoriaBloco"><!--Inicio Categoria Bloco-->
                        <li style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 27px;">Comédia</li><br>
                    </div><!--Fim Categoria Bloco-->
                    <div class="categoriaBloco"><!--Inicio Categoria Bloco-->
                        <li style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 27px;">Romance</li><br>
                    </div><!--Fim Categoria Bloco-->
                    <div class="categoriaBloco"><!--Inicio Categoria Bloco-->
                        <li style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 27px;">Ficção</li><br>
                    </div><!--Fim Categoria Bloco-->
                    <div class="categoriaBloco"><!--Inicio Categoria Bloco-->
                        <li style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 27px;">Aventura</li><br>
                    </div><!--Fim Categoria Bloco-->
                    <div class="categoriaBloco"><!--Inicio Categoria Bloco-->
                        <li style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 27px;">Ação</li><br>
                    </div><!--Fim Categoria Bloco-->

                </div><!--Fim Categorias Bloco--->  
            </aside><!--Fim Aside-->
            
            
            
            <section id="section"><!--Inicio Section-->

                <div id="tituloDestaqueBloco"><!--Inicio Titulo Destaque-->
                    <h1 class="tituloDestaque">Destaques</h1><!--Titulo Destaques--> 
                </div><!--Fim Titulo Destaque-->
                
                <div id="destaquesBloco"><!--Inicio Destaques Bloco-->

                    <div id="botaoLivroBloco"><!--Inicio botaoLivroBloco-->
                        <div class="livrosBloco"><!--Inicio livro-->
                            <img width="100px" height="150px" style="margin-top: 20px;"><!--Capa do Livro-->
                            <div id="descricaoBloco">
                                <label class="descricaoLivros">Nome: O menino do dedo Verde</label><br><!--Nome do Livro-->
                                <label class="descricaoLivros">Preço:</label><!--Preço do Livro-->
                            </div>
                        </div><!--Fim livro-->
                        <button><a href = "TelaCompra.php" style = "color: white;">Comprar</a></button>
                    </div><!--Fim botaoLivroBloco-->

                    <div id="botaoLivroBloco"><!--Inicio botaoLivroBloco-->
                        <div class="livrosBloco"><!--Inicio livro-->
                            <img width="100px" height="150px" style="margin-top: 20px;"><!--Capa do Livro-->
                            <div id="descricaoBloco">
                                <label class="descricaoLivros">Nome:</label><br><!--Nome do Livro-->
                                <label class="descricaoLivros">Preço:</label><!--Preço do Livro-->
                            </div>
                        </div><!--Fim livro-->
                        <button><a href = "TelaCompra.php" style = "color: white;">Comprar</a></button>
                    </div><!--Fim botaoLivroBloco-->

                    <div id="botaoLivroBloco"><!--Inicio botaoLivroBloco-->
                        <div class="livrosBloco"><!--Inicio livro-->
                            <img width="100px" height="150px" style="margin-top: 20px;"><!--Capa do Livro-->
                            <div id="descricaoBloco">
                                <label class="descricaoLivros">Nome:</label><br><!--Nome do Livro-->
                                <label class="descricaoLivros">Preço:</label><!--Preço do Livro-->
                            </div>
                        </div><!--Fim livro-->
                        <button><a href = "TelaCompra.php" style = "color: white;">Comprar</a></button>
                    </div><!--Fim botaoLivroBloco-->

                    <div id="botaoLivroBloco"><!--Inicio botaoLivroBloco-->
                        <div class="livrosBloco"><!--Inicio livro-->
                            <img width="100px" height="150px" style="margin-top: 20px;"><!--Capa do Livro-->
                            <div id="descricaoBloco">
                                <label class="descricaoLivros">Nome:</label><br><!--Nome do Livro-->
                                <label class="descricaoLivros">Preço:</label><!--Preço do Livro-->
                            </div>
                        </div><!--Fim livro-->
                        <button><a href = "TelaCompra.php" style = "color: white;">Comprar</a></button>
                    </div><!--Fim botaoLivroBloco-->

                    <div id="botaoLivroBloco"><!--Inicio botaoLivroBloco-->
                        <div class="livrosBloco"><!--Inicio livro-->
                            <img width="100px" height="150px" style="margin-top: 20px;"><!--Capa do Livro-->
                            <div id="descricaoBloco">
                                <label class="descricaoLivros">Nome:</label><br><!--Nome do Livro-->
                                <label class="descricaoLivros">Preço:</label><!--Preço do Livro-->
                            </div>
                        </div><!--Fim livro-->
                        <button><a href = "TelaCompra.php" style = "color: white;">Comprar</a></button>
                    </div><!--Fim botaoLivroBloco-->

                    <div id="botaoLivroBloco"><!--Inicio botaoLivroBloco-->
                        <div class="livrosBloco"><!--Inicio livro-->
                            <img width="100px" height="150px" style="margin-top: 20px;"><!--Capa do Livro-->
                            <div id="descricaoBloco">
                                <label class="descricaoLivros">Nome:</label><br><!--Nome do Livro-->
                                <label class="descricaoLivros">Preço:</label><!--Preço do Livro-->
                            </div>
                        </div><!--Fim livro-->
                        <button><a href = "TelaCompra.php" style = "color: white;">Comprar</a></button>
                    </div><!--Fim botaoLivroBloco-->

                </div><!--Inicio Destaques Bloco-->

            </section><!--Fim Section-->
            
        </main><!--Fim Main-->


        <footer id="footer"><!--Inicio Footer-->

        </footer><!--Fim Footer-->

    </body><!--Fim Body-->
</html>