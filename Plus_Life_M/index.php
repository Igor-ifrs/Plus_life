<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width='device-width', initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">        
        <title>|S2|</title>
        <link rel="stylesheet" href="css/css.css"/>
    </head>
    <body>
        <!--OK-->
        <input type="radio" class="rd" name="rd" id="home" checked="true"/>
        <input type="radio" class="rd" name="rd" id="como"/>
        <input type="radio" class="rd" name="rd" id="mapa"/>
        <input type="radio" class="rd" name="rd" id="discus"/>
        <input type="radio" class="rd" name="rd" id="quem"/>

        <input type="checkbox"  name="main" id="main-menu"/>
        <label for="main-menu" class="main-menu">≡</label>

        <div id="menu">
            <label for="main-menu" class="menu"><span id="close">X</span></label>
            <label for="home" class="menu ">HOME</label>
            <label for="como" class="menu ">COMO?</label>
            <label for="mapa" class="menu">ONDE?</label>
            <label for="discus" class="menu">POR?</label>
            <label for="quem" class="menu">QUEM?</label>
            <label for="eff" class="menu "></label>
            <div class="usr">
                <div class="img-user">
                    <img src="img/userI.png" alt="usuario"/>
                </div>
                <div class="a"><a href="#">USUÁRIO LOGADO</a></div>
                <div class="a"><a href="#">SAIR</a></div>
            </div>
        </div>

        <div id="menu-radio">
            <label for="home" class="menu-rd x1"></label>
            <label for="como" class="menu-rd x2"></label>
            <label for="mapa" class="menu-rd x3"></label>
            <label for="discus" class="menu-rd x4"></label>
            <label for="quem" class="menu-rd x5"></label>
        </div>
        <!--OK-->
        <div class="container">            
            <div class="pag">
                <div id="c-vis">
                    <div class="c-vis">
                        <div>
                            <h1>PLUS<span class="heartbeat"></span>LIFE</h1>
                            <p class="descricao">
                                " Doar sangue é mais do que ajudar, é simplesmente doar uma vida a uma pessoa que precisa. 
                                </br>Amanhã, quem pode precisar dela é você. "
                            </p>
                        </div>
                    </div>

                    <div class="c-vis">

                    </div>

                    <div class="c-vis" >
                        <div class="btn-home">
                            <label for="mapa" class="btn-h">Cadastrar</label> 
                            <div class="gambi"></div>
                            <label for="mapa" class="btn-h">Onde Doar</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pag">DESCRIÇÃO DE COMO FUNCIONA O SITE</div>
            <div class="pag">MAPA COM OS HEMOCENTROS</div>
            <div class="pag">DEPOIMENTOS "INTEGRAÇÃO REDES SOCIAIS"</div>
            <div class="pag">ALGO QUE ESQUECI E QUE PODE ENTRAR DEPOIS</div>
        </div>
        <script>
            console.log('%c SAI VIADO!!!', 'background: #222; color: #bada55;font-size: 110px;');
        </script>

    </body>
</html>
