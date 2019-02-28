<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Nossas Lojas</title>
        <link rel="shortcut icon" href="./imagens/icones/icone_principal.png" type="image/x-icon">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <header id="header">
            <?php include('./recursos/menu.php') ?>
        </header>
        <div id="caixa_conteudo_nossas_lojas" class="center">
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
                <p class="box_titulo titulo_lojas">Nossas Lojas</p> 
                
                <div class="box_mapa">
                    <p class="titulo_mapa">R. Prudente de Morais, 244 - Jardim Belval, Barueri - SP, 06420-220</p>
                    <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1829.312828962674!2d-46.896323983400464!3d-23.509989243783927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-23.5104151!2d-46.896316399999996!5e0!3m2!1spt-BR!2sbr!4v1551395298112" width="1140" height="700" frameborder="0" style="border:0; margin-left: 10px" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="box_mapa">
                    <p class="titulo_mapa">R. Carlos Vicari, 306 - Barra Funda, São Paulo - SP, 05033-070</p>
                    <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d117031.65554567646!2d-46.75434977022439!3d-23.559849797353504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d-23.5226577!2d-46.684322599999994!5e0!3m2!1spt-BR!2sbr!4v1551396492117" width="1140" height="700" frameborder="0" style="border:0; margin-left: 10px" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <footer id="rodape">
            <?php include('./recursos/rodape.php') ?>
        </footer>
    </body>
</html>