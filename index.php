<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1,0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">    
    <link rel="shortcut icon" type="image-x/png" href="car.ico">
    <title>Projeto-Veículos</title>
</head>
<body>
    <header style="border-bottom: 3px solid #EB2D2D;">
        <div class="container">
            <div class="logo">
                <img src="imagens/logo.jpg" alt="">
            </div><!--logo-->
            <nav class="desktop">
                <ul>
                    <li><a style="color:#EB2D2D;" href="index.html">Home</a></li>
                    <li><a href="venda.html">Venda</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a goto="contato" href="">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <nav class="mobile">
                <ul>
                    <li><a style="color:#EB2D2D;" href="index.html">Home</a></li>
                    <li><a href="venda.html">Venda</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a goto="contato" href="">Contato</a></li>
                </ul>
            </nav><!---mobile-->
            <div class="clear"></div>
      </div><!--container-->
    </header>
    <section class="banner">
         <div class="text-banner">
                <div class="container">
                    <div class="text-banner-single">Consultoria</div>
                    <div class="text-banner-single">Compra</div>
                    <div class="text-banner-single">Venda</div> 
                    <div class="text-banner-single">email@gmail.com</div> 
                </div><!---container-->
        </div><!--text-banner-->
    </section><!--banner-->
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
    <section class="servicos-descricao">
        <div class="half1">
            <div class="half1-wraper">
                <h2>Serviços</h2>
                <ul>
                    <li>Compra</li>
                    <li>Venda</li>
                    <li>Consultoria</li>
                    <li>Comunicação</li>
                    <li>Indicação de mecânica e peças</li>
                </ul>
             <a class="btn1" href="">Saiba Mais</a>
            </div><!---half1-wraper-->
        </div><!--half1-->
        <div class="half2">
            <h2>Depoimentos</h2>
                  <div class="depoimento-single">
                        <p>" O Rafael foi muito atencioso , me buscou no aeroporto e
                            garantiu toda comodidade e conforto no almoço, no transfer, na visita 
                            ao veículo e durante o test-driver"</p>
                            <br />
                            <div class="nome-depoimento">
                                João da Silva
                            </div><!--nome-depoimento-->
                        </div><!---depoimento-single-->
                        <div class="depoimento-single">
                            <p>" O Marcelo foi muito atencioso , me buscou no aeroporto e
                                garantiu toda comodidade e conforto no almoço, no transfer, na visita 
                                ao veículo e durante o test-driver"</p>
                                <br />
                                <div class="nome-depoimento">
                                    Diego da Silva
                                </div><!--nome-depoimento-->
                            </div><!---depoimento-single-->
                            <div class="depoimento-single">
                                <p>" O Marcos foi muito atencioso , me buscou no aeroporto e
                                    garantiu toda comodidade e conforto no almoço, no transfer, na visita 
                                    ao veículo e durante o test-driver"</p>
                                    <br />
                                    <div class="nome-depoimento">
                                        Alan
                                    </div><!--nome-depoimento-->
                                </div><!---depoimento-single-->
                   <div class="navigation">
                        <div class="arrows">
                            <img prev src="imagens/arrow-left.png" alt="arrow-left">
                            <img next src="imagens/arrow-right.png" alt="arrow-right">
                        </div><!--arrows-->
                   </div><!--navigation-->
        </div><!---half2-->
    </section><!--servicos-descricao-->
    <section id="contato" class="contato">
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
    <footer>
        <div class="container">
            <nav class="desktop">
                <ul>
                    <li><a style="color:#EB2D2D;" href="index.html">Home</a></li>
                    <li><a href="venda.html">Venda</a></li>
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