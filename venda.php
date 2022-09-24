<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1,0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">    <title>Projeto-Veículos</title>
</head>
<body>
    <header style="border-bottom: 3px solid #EB2D2D;">
        <div class="container">
            <div class="logo">
                <img src="imagens/logo.jpg" alt="">
            </div><!--logo-->
            <nav class="desktop">
                <ul>
                    <li><a  href="index.php">Home</a></li>
                    <li><a style="color:#EB2D2D;" href="venda.php">Venda</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="/?contato">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <nav class="mobile">
                <ul>
                    <li><a  href="index.php">Home</a></li>
                    <li><a style="color:#EB2D2D;" href="venda.php">Venda</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="/?contato">Contato</a></li>
                </ul>
            </nav><!---mobile-->
            <div class="clear"></div>
      </div><!--container-->
    </header>

    <section class="venda">
        <div class="line-titulo"  style="  max-width: 1280px;">
            <div class="ln1"></div>
            <h2>Veículos Para Venda</h2>
            <div class="content-venda">
                    <div class="container" >
                        <div class="sidebar">
                            <div class="search1">
                                <h2>Filtre por Preço</h2>
                                <div class="barra-preco">
                                    <div class="barra-preco-fill"></div><!--barra-preco-fill-->
                                    <div class="pointer-barra"></div>
                                </div><!--barra-preco-->
                                <div class="valor-pesquisa">
                                   <p class="preco_pesquisa">R$0,00</p>
                                   <p>R$70.000,00</p>
                                   <div class="clear"></div>
                                </div><!--valor-pesquisa-->
                            </div><!--search1-->
                            <div class="search2">
                                <h2>Filtre por ano</h2>
                                <form>
                                    <div class="form-venda-wraper">
                                        <input type="checkbox" id="item1">
                                        <label for="item1">
                                            <div class="circle"></div>
                                        </label><!--label-->
                                        <span>Todas as décadas</span>
                                   </div><!--form-venda-wraper-->
                                    <div class="form-venda-wraper">
                                        <input type="checkbox" id="item2">
                                        <label for="item2">
                                            <div class="circle"></div>
                                        </label>
                                        <span>1960 - 1970</span>
                                </div><!--form-venda-wraper-->
                                <div class="form-venda-wraper">
                                    <input type="checkbox" id="item3">
                                    <label for="item3">
                                        <div class="circle"></div>
                                    </label>
                                    <span>1971 - 1990</span>
                                </div><!--form-venda-wraper-->
                                <div class="form-venda-wraper">
                                    <input type="checkbox" id="item4">
                                    <label for="item4">
                                        <div class="circle"></div>
                                    </label>
                                    <span>1991 - 2000</span>
                               </div><!--form-venda-wraper-->
                               <div class="form-venda-wraper">
                                <input type="checkbox" id="item5">
                                <label for="item5">
                                    <div class="circle"></div>
                                </label>
                                <span>2001 - 2022</span>
                              </div><!--form-venda-wraper-->
                                </form>
                            </div><!--search2-->
                        </div><!---sidebar-->
                        <div class="vitrine-venda">
                            <div class="vitrine-destaque">
                                <div style="background-image: url('imagens/carro1.jpg');" class="carro-img"></div><!--carro-img-->
                                <div class="info-carro">
                                    <h2>Volkswagem Karmam-ghia</h2>
                                    <p>1.6 8v, Gasolina, 2P, Manual1969</p>
                                    <a class="btn1" href="veiculo-teste.php">Mais Detalhes</a>
                                </div><!--info-carro-->
                            </div><!--vitrine-destaque-->
                            <div class="vitrine-destaque">
                                <div style="background-image: url('imagens/car1.png');" class="carro-img"></div><!--carro-img-->
                                <div class="info-carro">
                                    <h2>Opala-1955</h2>
                                    <p> Gasolina, 1.0 12V de 80 cv , Manual 1.6 16V </p>
                                    <a class="btn1" href="veiculo-teste.php">Mais Detalhes</a>
                                </div><!--info-carro-->
                            </div><!--vitrine-destaque-->
                            <div class="vitrine-destaque">
                                <div style="background-image: url('imagens/car2.png');" class="carro-img"></div><!--carro-img-->
                                <div class="info-carro">
                                    <h2>Opala-1955</h2>
                                    <p> Gasolina, 1.0 12V de 80 cv , Manual 1.6 16V </p>
                                    <a class="btn1" href="veiculo-teste.php">Mais Detalhes</a>
                                </div><!--info-carro-->
                            </div><!--vitrine-destaque-->
                            <div class="vitrine-destaque">
                                <div style="background-image: url('imagens/carro1.jpg');" class="carro-img"></div><!--carro-img-->
                                <div class="info-carro">
                                    <h2>Volkswagem Karmam-ghia</h2>
                                    <p>1.6 8v, Gasolina, 2P, Manual1969</p>
                                    <a class="btn1" href="veiculo-teste.php">Mais Detalhes</a>
                                </div><!--info-carro-->
                            </div><!--vitrine-destaque-->
                            <div class="vitrine-destaque">
                                <div style="background-image: url('imagens/car1.png');" class="carro-img"></div><!--carro-img-->
                                <div class="info-carro">
                                    <h2>Opala-1955</h2>
                                    <p> Gasolina, 1.0 12V de 80 cv , Manual 1.6 16V </p>
                                    <a class="btn1" href="">Mais Detalhes</a>
                                </div><!--info-carro-->
                            </div><!--vitrine-destaque-->
                            <div class="vitrine-destaque">
                                <div style="background-image: url('imagens/car2.png');" class="carro-img"></div><!--carro-img-->
                                <div class="info-carro">
                                    <h2>Opala-1955</h2>
                                    <p> Gasolina, 1.0 12V de 80 cv , Manual 1.6 16V </p>
                                    <a class="btn1" href="veiculo-teste.php">Mais Detalhes</a>
                                </div><!--info-carro-->
                            </div><!--vitrine-destaque-->
                            <div class="vitrine-destaque">
                                <div style="background-image: url('imagens/carro1.jpg');" class="carro-img"></div><!--carro-img-->
                                <div class="info-carro">
                                    <h2>Volkswagem Karmam-ghia</h2>
                                    <p>1.6 8v, Gasolina, 2P, Manual1969</p>
                                    <a class="btn1" href="veiculo-teste.php">Mais Detalhes</a>
                                </div><!--info-carro-->
                            </div><!--vitrine-destaque-->
                            <div class="vitrine-destaque">
                                <div style="background-image: url('imagens/car1.png');" class="carro-img"></div><!--carro-img-->
                                <div class="info-carro">
                                    <h2>Opala-1955</h2>
                                    <p> Gasolina, 1.0 12V de 80 cv , Manual 1.6 16V </p>
                                    <a class="btn1" href="veiculo-teste.php">Mais Detalhes</a>
                                </div><!--info-carro-->
                            </div><!--vitrine-destaque-->
                            <div class="vitrine-destaque">
                                <div style="background-image: url('imagens/car2.png');" class="carro-img"></div><!--carro-img-->
                                <div class="info-carro">
                                    <h2> Opala -1955- versão cross</h2>
                                    <p>1.6 8v, Gasolina, 2P, Manual2022</p>
                                    <a class="btn1" href="veiculo-teste.php">Mais Detalhes</a>
                                </div><!--info-carro-->
                            </div><!--vitrine-destaque-->
                        </div><!---vitrine-venda-->
                        
                        <div class="clear"></div>
                </div><!--container-->
            </div><!--content-venda-->
        </div><!---line-titulo-->
    </section><!---venda-->
    
    <footer>
        <div class="container">
            <nav class="desktop">
                <ul>
                    <li><a  href="index.php">Home</a></li>
                    <li><a style="color:#EB2D2D;" href="venda.php">Venda</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="/?contato">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <p>Todos os direitor reservados</p>
            <div class="clear"></div>
        </div><!---container-->
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/menu_responsivo.js"></script>
    <script src="js/function.js"></script>
</body>
</html>