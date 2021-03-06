<?php
    include('./bd/conexao.php');
    $conexao = getConexaoMySQL();

    $nome = (string)null;
    $email = (string)null;
    $celular = (string)null;
    $assunto = (int)null;
    $sexo = (string)null;
    $profissao = (string)null;
    $home_page = (string)null;
    $mensagem = (string)null;

    if(isset($_POST['btn_enviar'])){
        $nome = $_POST['txt_nome'];
        $email = $_POST['txt_email'];
        $celular = $_POST['txt_celular'];
        $assunto = $_POST['slc_assunto'];
        $sexo = $_POST['rdo_sexo'];
        $profissao = $_POST['txt_profissao'];
        $home_page = $_POST['txt_home_page'];
        $mensagem = $_POST['txt_mensagem'];
        
        $sql = "INSERT INTO tbl_fale_conosco (nome, email, celular, assunto, sexo, profissao, home_page, mensagem) 
                VALUES('".trim($nome)."', '".$email."', '".$celular."', '".$assunto."',
                       '".$sexo."', '".$profissao."', '".$home_page."', '".$mensagem."'); ";

        if(mysqli_query($conexao, $sql)){
            header("Location: faleconosco.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/slider.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>
            Fale Conosco
        </title>
        <link rel="shortcut icon" href="./imagens/icones/icone_principal.png" type="image/x-icon">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <header id="header">
            <?php include('./recursos/menu.php') ?>
        </header>
        <!-- Div para afastar o menu do conteudo, pois o menu esta fixed e fica sobre o conteudo -->
        <div style="width: 100%; height: 110px;"></div>
        <div id="caixa_conteudo_fale_conosco" class="center">
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
                        <li><a href="faleconosco.php">Fale Conosco</a></li>
                    </ul>
                </div>
            </div>
            <div id="contatos_box">
                <p class="box_titulo">Fale Conosco</p>
                <p class="texto_box2">Se você tem alguma dúvida, crítica ou sugestão preencha o formulário abaixo e entraremos em contato. Ou se preferir ligue para a nossa central de atendimento no(s) número(s): (11) 4002-8922 | (11) 5425-9666 WhatsApp: (11) 90707-0707<br>E-mail: <a href="mailto:sac@roadrunner.com.br">sac@roadrunner.com.br</a></p>
                <span style="font-size: 22px; color:red; margin-top: 60px;">º Campos com '*' são obrigatórios.</span><br>
                <div id="form_fale_conosco">
                    <form action="faleconosco.php" method="post" name="frm_fale_conosco">
                        <label for="txt_nome">*Nome</label>
                        <input type="text" placeholder="Ex. Lucas da Silva" pattern="[a-zA-Zà-úÀ-Ú ]+" name="txt_nome" id="txt_nome" required>

                        <label for="txt_email" style="margin-right: 300px;">*E-mail</label>
                        <label for="txt_celular">*Celular</label><br>

                        <input type="text" pattern="[\._A-Za-z0-9-]+@[A-Za-z0-9-]+(\.[A-Za-z0-9]+)+" placeholder="Ex. lucas.senai@hotmail.com" name="txt_email" id="txt_email" required>
                        <input type="text" pattern="[0-9]{2} ?9[0-9]{4}-?[0-9]{4}" name="txt_celular" placeholder="Ex. 11 95040-3565" id="txt_celular" maxlength="13" required>

                        <label for="slc_assunto" style="margin-right: 290px;">*Assunto</label>
                        <label style="margin-right: 100px;">*Sexo</label>

                        <select name="slc_assunto" id="slc_assunto" required>
                            <option value="">Escolha o assunto</option>
                            <option value="1">Dúvida</option>
                            <option value="2">Reclamação</option>
                            <option value="3">Sugestão</option>
                        </select>

                        <input type="radio" name="rdo_sexo" id="rdo_sexoF" value="F" required><label for="rdo_sexoF">Feminino</label>
                        <input type="radio" name="rdo_sexo" id="rdo_sexoM" value="M" required><label for="rdo_sexoM">Masculino</label>

                        <label for="txt_profissao" style="margin-right: 290px;">*Profissão</label>
                        <label for="txt_home_page">Home Page</label>

                        <input type="text" placeholder="Ex. Técnico de Informática" pattern="[a-zA-Zà-úÀ-Ú ]+" name="txt_profissao" id="txt_profissao" required>
                        <input type="text" name="txt_home_page" id="txt_home_page">
                        
                        <label for="txt_mensagem">*Mensagem</label>
                        <textarea name="txt_mensagem" id="txt_mensagem" cols="60" rows="11" required></textarea>

                        <button type="submit" value="btn_enviar" name="btn_enviar" id="btn_enviar">ENVIAR</button>
                    </form>
                </div>                
            </div>
        </div>
        <footer id="rodape">
            <?php include('./recursos/rodape.php') ?>
        </footer>
    </body>
</html>