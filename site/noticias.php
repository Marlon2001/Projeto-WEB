<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/style.css">
        <title>
            Noticias
        </title>
        <link rel="shortcut icon" href="./imagens/icones/icone_principal.png" type="image/x-icon">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <header id="header">
            <?php include('./recursos/menu.php') ?>
        </header>
        <div id="caixa_conteudo_noticias" class="center">
            <div id="institucional_box">
                <div id="institucional_titulo">
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
                        <li><a href="sobre.php#contatos_box">Contato</a></li>
                    </ul>
                </div>
            </div>
            <div id="content_box">
                <p class="box_titulo titulo_noticias">Notícias</p>                
                <?php for($i=0; $i<5; $i++){ ?>
                    <div class="box_noticia">
                        <div class="noticia_img bg_image" style="background-image: url('./imagens/img_noticia1.jpg')"></div>
                        <div class="noticia_conteudo">
                            <div class="noticia_conteudo_title">
                                Jandira organiza evento para ciclistas...
                            </div>
                            <div class="noticia_conteudo_content">
                                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos...
                            </div>
                            <div class="noticia_conteudo_rodape">
                                <div class="comentario">
                                    Escreva um comentario
                                </div>
                                <div class="coracao">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <footer id="rodape">
            <?php include('./recursos/rodape.php') ?>
        </footer>
    </body>
</html>