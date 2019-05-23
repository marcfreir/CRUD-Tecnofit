<?php
    /*
        Subject    : CRUD – Linguagem PHP (TECNOFIT)
        Created on : 20-May-2019, 01:48:00 PM
        Author     : Marcos Freire
    */
?>

<?php
    //Incluindo o head com as meta tags
    include ('./templates/HTML_Head.php');
?>

        <title>Pedido</title>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/style_produto.css' />
        <!-- <script src='./js/index.js'></script> -->
    </head>

<?php
    //Incluindo o controller para gerenciamento da página
    //include ('./controllsaasdasdsad/HTML_Head.php');
?>

    <body>
        <div class="menu-grid">
            <div class="grid-items-logo">
                <h1 class="logo">CRUD - Tecnofit</h1>
            </div>
            <div class="grid-items-buttons">
                <button type="submit" class="btn btn-default" id="btnproduto" name="btnproduto" onclick="window.location.href = 'produto.php';">Produto</button>
            </div>
        </div>
        
        <div class="horizontal-rule">
            <hr><hr>
        </div>
        <h3>PEDIDO</h3>
        <form class="" id="form" method="post">
            <div class="listagem-grid">
                <div class="grid-items">
                <label for="id" id="id">ID: </label>
                </div>
                <div class="grid-items">
                    <input type="text" name="txtidsearch" value="" placeholder ="Ex.: 1" maxlength="11">
                </div>
                <div class="grid-items">
                    <button type="submit" class="btn btn-default" id="btnbuscar" formaction="" name="btnbuscar">Buscar</button>
                </div>
                <div class="grid-items">
                    <button type="button" name="btnlimpar" onclick="limparCampos()">Limpar</button>
                    <script type="text/javascript" src="./js/limparcampos.js"></script>
                </div>
                <div class="grid-items">
                    <button type="submit" name="btnnovo">Novo</button>
                </div>
            </div>
        </form>
        <div class="horizontal-rule">
            <hr><hr>
        </div>
        <?php
            include ('./controllers/ControllerPedido.php');
        ?>
    </body>
</html>