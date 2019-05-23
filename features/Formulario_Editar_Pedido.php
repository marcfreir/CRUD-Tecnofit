<?php
    /*
        Subject    : CRUD – Linguagem PHP (TECNOFIT)
        Created on : 20-May-2019, 01:48:00 PM
        Author     : Marcos Freire
    */
?>

    <h3>Editar Pedido</h3>
    <form class="" action="./controllers/ControllerAtualizarPedido.php?id=<?php echo $linha['pedido_id']; ?>" id="form" name="form" method="post">
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="id" id="id">ID*: </label>
            </div>
            <div class="grid-items" id="id_div">
                <input type="text" name="txtid" value="<?php echo $pedidoId; ?>" maxlength="11">
                <span class="valorerro" id="iderrado"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="total" id="total">Total: </label>
            </div>
            <div class="grid-items" id="total_div">
                <input type="text" name="txttotal" value="<?php echo $pedidoTotal; ?>" maxlength="32">
                <span class="valorerro" id="totalerrado"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="data" id="data">Data: </label>
            </div>
            <div class="grid-items" id="data_div">
                <input type="date" name="txtdata" value="<?php echo $pedidoData; ?>">
                <span class="valorerro" id="dataerrada"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="produtos" id="produtos">Produtos: </label>
            </div>
            <div class="grid-items" id="produtos_div">
                <input type="text" name="txtprodutos" value="<?php echo $pedidoProdutos; ?>" maxlength="500">
                <span class="valorerro" id="produtoserrado"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <button type="submit" name="btnatualizar">Atualizar</button>
                <script type="text/javascript" src="./js/validar.js"></script>
            </div>
            <div class="grid-items">
                <button type="button" onclick="window.location.href = 'pedido.php';" name="btnretornar">Desistir</button>
                <!-- <input type="button" onclick="window.location.href = './pedido.php';" name="btnretornar" value="Retornar"> -->
            </div>
        </div>
    </form>