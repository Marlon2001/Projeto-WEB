<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/slider.css">
        <title>
            Eventos
        </title>
        <link rel="shortcut icon" href="./imagens/icones/icone_principal.png" type="image/x-icon">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <header id="header">
            <?php include('./recursos/menu.php')?>
        </header>
        <!-- Div para afastar o menu do conteudo, pois o menu esta fixed e fica sobre o conteudo -->
        <div style="width: 100%; height: 110px;"></div>
        <div id="caixa_conteudo_eventos" class="center">
            <div id="institucional_box" style="width: 260px;">
                <div id="institucional_titulo" style="width: 245px;">
                    institucional
                </div>
                <div id="institucional_conteudo">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="sobre.php">Quem Somos</a></li>
                        <li><a href="noticias.php">Noticias</a></li>
                        <li><a href="promocoes.php">Promoções</a></li>
                        <li><a href="eventos.php">Eventos</a></li>
                        <li><a href="nossaslojas.php">Nossas Lojas</a></li>
                        <li><a href="faleconosco.php">Fale Conosco</a></li>
                    </ul>
                </div>
            </div>
            <div id="content_box">
                <p class="box_titulo titulo_eventos">Eventos</p>  
                <?php for($i=0; $i<5; $i++){ ?>              
                    <div class="box_eventos">
                        <div class="eventos_titulo">
                            Jandira organiza evento para ciclistas em praça de eventos.
                        </div>
                        <div class="eventos_conteudo">
                            <div class="eventos_conteudo_content">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet aperiam nisi, animi quibusdam dolore quos quae nesciunt, hic vero quisquam esse aut, recusandae laudantium soluta quaerat fuga saepe! Magnam, itaque. <br><span class="identacao">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eveniet fugiat nemo quisquam! Perspiciatis non delectus, quos, molestiae reiciendis eveniet id voluptatum, quae et at necessitatibus obcaecati iusto sint error...</span>
                            </div>
                            <div class="eventos_conteudo_rodape">
                                <div class="comentario">
                                    Escreva um comentario
                                </div>
                                <div class="coracao"></div>
                            </div>
                        </div>
                        <div class="eventos_img bg_image" style="background-image: url('./imagens/img_eventos1.jpg')"></div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <footer id="rodape">
            <?php include('./recursos/rodape.php') ?>
        </footer>
    </body>
</html>