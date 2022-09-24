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
                    <li><a  href="index.html">Home</a></li>
                    <li><a style="color:#EB2D2D;" href="venda.html">Venda</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a goto="contato" href="">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <nav class="mobile">
                <ul>
                    <li><a  href="index.html">Home</a></li>
                    <li><a style="color:#EB2D2D;" href="venda.html">Venda</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a goto="contato" href="">Contato</a></li>
                </ul>
            </nav><!---mobile-->
            <div class="clear"></div>
      </div><!--container-->
    </header>

    <section class="venda-single">
        <div class="line-titulo">
            <div class="ln1"></div>
            <h2>Opala 1997</h2>
        </div><!---line-titulo-->
            <div class="container">
                <div class="info-veiculo">
                    <div class="info-bread"><a href="index.html">HOME</a><span>></span>
                        <a href="venda.html">VENDA</a><span>></span>
                        <a href="veiculo-teste.html">VEÍCULO DE TESTE</a></div>
                    <div class="foto-destaque"></div>
                        <div class="nav-galeria-parent">
                            <div class="arrow-left-nav"></div>
                            <div class="arrow-right-nav"></div>
                            <div class="nav-galeria">
                                <div class="nav-galeria-wraper">
                                    <div  class="mini-img-wraper">
                                        <div style="background-image: url('imagens/carro1.jpg');" class="mini-img">
                                    </div></div><!--mini-img-wraper-->
                                    <div class="mini-img-wraper">
                                        <div style="background-image: url('imagens/car1.png');" class="mini-img">
                                    </div></div><!--mini-img-wraper-->
                                    <div class="mini-img-wraper">
                                        <div style="background-image: url('imagens/car2.png');" class="mini-img">
                                    </div></div><!--mini-img-wraper-->
                                    <div class="mini-img-wraper">
                                        <div style="background-image: url('imagens/carro1.jpg');" class="mini-img">
                                    </div></div><!--mini-img-wraper-->
                                    <div class="mini-img-wraper">
                                        <div style="background-image: url('imagens/car1.png');" class="mini-img">
                                    </div></div><!--mini-img-wraper-->
                                    <div class="mini-img-wraper">
                                        <div style="background-image: url('imagens/car2.png');" class="mini-img">
                                    </div></div><!--mini-img-wraper-->
                                </div><!--nav-galeria-wraper-->
                           </div><!---nav-galeria-->
                        </div><!--galeria-parent-->
                </div><!--info-veiculo-->
                <div class="descricao-veiculo">
                    <h2>R$ 20.000,00</h2>
                    <p>Pariatur ut labore laboris fugiat mollit mollit consequat quis enim cillum. Officia aliqua cupidatat proident ipsum veniam deserunt exercitation est laboris elit officia consequat aute.</p>
                    <a class="btn1" href="">Entre em Contato</a>
                </div><!--descrição-veículo-->
                <div class="clear"></div>
        </div><!--container-->
    </section><!---venda-single-->
    
    <section id="contato"  class="contato">
        <div class="line-titulo">
            <div class="ln1"></div>
            <h2>Contato</h2>
        </div><!---line-titulo-->
        <form >
           <div class="input-wraper w100">
              <input placeholder="Nome" type="text" required />
           </div><!---input-wraper-w100-->
           <div class="input-wraper w50">
            <input placeholder="E-mail" type="text" required />
         </div><!---input-wraper-w50-->
         <div class="input-wraper w50">
            <input placeholder="Telefone" type="text" required />
         </div><!---input-wraper-w50-->
         <div class="input-wraper w100">
           <textarea placeholder="Mensagem..." required></textarea>
         </div><!---input-wraper-w100-->
         <div class="input-wraper w100">
            <input class="btn1" type="submit" value="Enviar" />
         </div><!---input-wraper-w100-->
         <div class="clear"></div>
        </form>
    </section><!---contato-->
    <div class="clear"></div>
    <section class="veiculos-destaque">
        <div class="line-titulo">
            <div class="ln1"></div>
            <h2>Veículos em Destaque</h2>
        </div><!---line-titulo-->
        <div class="container">
            <div class="vitrine-destaque">
                <div style="background-image: url('imagens/carro1.jpg');" class="carro-img"></div><!--carro-img-->
                <div class="info-carro">
                    <h2>Volkswagem Karmam-ghia</h2>
                    <p>1.6 8v, Gasolina, 2P, Manual1969</p>
                    <a class="btn1" href="veiculo-teste.html">Mais Detalhes</a>
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
                    <a class="btn1" href="">Mais Detalhes</a>
                </div><!--info-carro-->
            </div><!--vitrine-destaque-->
            <div class="clear"></div>
    </div><!--container-->
    </section><!--veículos-em-destaque-->
    <footer>
        <div class="container">
            <nav class="desktop">
                <ul>
                    <li><a  href="index.html">Home</a></li>
                    <li><a style="color:#EB2D2D;" href="venda.html">Venda</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a goto="contato" href="">Contato</a></li>
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