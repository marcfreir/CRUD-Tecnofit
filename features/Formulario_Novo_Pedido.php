<?php
    /*
        Subject    : CRUD – Linguagem PHP (TECNOFIT)
        Created on : 20-May-2019, 01:48:00 PM
        Author     : Marcos Freire
    */
?>

    <h3>Cadastro</h3>
    <form class="" action="./controllers/ControllerSalvarPedido.php" id="form" name="form" method="post">
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="id" id="id">ID*: </label>
            </div>
            <div class="grid-items" id="id_div">
                <input type="text" name="txtid" value="">
                <span class="valorerro" id="iderrado"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="total" id="total">Total: </label>
            </div>
            <div class="grid-items" id="total_div">
                <input type="text" name="txttotal" value="" maxlength="16">
                <span class="valorerro" id="totalerrado"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="data" id="data">Data: </label>
            </div>
            <div class="grid-items" id="data_div">
                <input type="date" name="txtdata" value="">
                <span class="valorerro" id="dataerrada"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="produtos" id="produtos">Produtos: </label>
            </div>
            <div class="grid-items" id="produtos_div">
                <input type="text" name="txtprodutos" value="" maxlength="500">
                <span class="valorerro" id="produtoserrado"></span>
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
                <button type="button" onclick="window.location.href = 'pedido.php';" name="btnretornar">Retornar</button>
                <!-- <input type="button" onclick="window.location.href = './pedido.php';" name="btnretornar" value="Retornar"> -->
            </div>
        </div>
    </form>