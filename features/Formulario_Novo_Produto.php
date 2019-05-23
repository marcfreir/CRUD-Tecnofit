<?php
    /*
        Subject    : CRUD – Linguagem PHP (TECNOFIT)
        Created on : 20-May-2019, 01:48:00 PM
        Author     : Marcos Freire
    */
?>

    <h3>Cadastro</h3>
    <form class="" action="./controllers/ControllerSalvarProduto.php" onsubmit="return validate()" id="form" name="form" method="post">
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="sku" id="sku">SKU*: </label>
            </div>
            <div class="grid-items" id="sku_div">
                <input type="text" name="txtsku" value="">
                <span class="valorerro" id="skuerrado"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="nome" id="nome">Nome*: </label>
            </div>
            <div class="grid-items" id="nome_div">
                <input type="text" name="txtnome" value="">
                <span class="valorerro" id="nomeerrado"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="descricao" id="descricao">Descrição: </label>
            </div>
            <div class="grid-items" id="decricao_div">
                <input type="text" name="txtdescricao" value="" maxlength="150">
                <span class="valorerro" id="decricaoerrada"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="preco" id="preco">Preço: </label>
            </div>
            <div class="grid-items" id="preco_div">
                <input type="text" name="txtpreco" value="" maxlength="10">
                <span class="valorerro" id="precoerrado"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <button type="submit" name="btnsalvar">Salvar</button>
                <script type="text/javascript" src="./js/validar.js"></script>
            </div>
            <div class="grid-items">
                <button type="button" name="btnlimpar"  onclick="limparCampos()">Limpar</button>
                <script type="text/javascript" src="./js/limparcampos.js"></script>
            </div>
            <div class="grid-items">
                <button type="button" onclick="window.location.href = 'produto.php';" name="btnretornar">Retornar</button>
                <!-- <input type="button" onclick="window.location.href = './produto.php';" name="btnretornar" value="Retornar"> -->
            </div>
        </div>
    </form>