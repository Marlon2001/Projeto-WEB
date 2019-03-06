
<div id="menu_principal" class="center">
    <a href="index.php">
        <figure id="logo">     
            <img src="./imagens/icones/logo.png" alt="Logo do site" title="Logo do site">
        </figure>
    </a>
    <nav id="sessoes_menu">
        <ul id="menu_ul"> 
            <li>
                <a href="noticias.php" class="menu_ul_a">Notícias</a>
            </li>
            <li>
                <a href="promocoes.php" class="menu_ul_a" style="padding: 20px 14px;">Promoções</a>                            
            </li>
            <li>
                <a href="eventos.php" class="menu_ul_a">Eventos</a>                            
            </li>
            <li>
                <a href="nossaslojas.php" class="menu_ul_a" style="padding: 20px 7px;">Nossas Lojas</a>
            </li>
            <li>
                <a href="faleconosco.php" class="menu_ul_a" style="padding: 20px 6px;">Fale Conosco</a>
            </li>
            <li>
                <a href="sobre.php" class="menu_ul_a" style="padding: 20px 35px;" >Sobre</a>
            </li>
        </ul>
    </nav>
    <div id="login">
        <form action="index.php" method="post" name="frm_login" id="frm_login">
            <ul id="ul_login">
                <li>
                    <label for="txt_usuario">Usuário:</label>
                    <input type="text" id="txt_usuario" name="txt_usuario" placeholder="Digite seu usuário">    
                </li>
                <li>
                    <label for="txt_password">Senha:</label>
                    <input type="password" id="txt_password" name="txt_password" placeholder="Digite sua senha">
                </li>
                <li style="width: 100px; padding-top: 17px;">
                    <button>Login</button>
                </li>
            </ul>
        </form>
    </div>
</div>
