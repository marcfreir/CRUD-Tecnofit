<?php
    /*
        Subject    : CRUD – Linguagem PHP (TECNOFIT)
        Created on : 20-May-2019, 01:48:00 PM
        Author     : Marcos Freire
    */
?>

    <div class="table">
      <table class="table">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">SKU</th>
          <th scope="col">Nome</th>
          <th scope="col">Descrição</th>
          <th scope="col">Preço</th>
          <th scope="col">Ações</th>
        </tr>

        <?php
          $produto = new Produto();
          $linhas = $produto->select();

          //include ("./controllers/ControllerChecarProduto.php");
          $produtoIdCheck = NULL;
          //$checar = DB::query('SELECT produto_id FROM tb_produto WHERE produto_id=:produto_id', array(':produto_id'=>$produtoIdCheck));

          if (DB::query('SELECT produto_id FROM tb_produto WHERE produto_id=:produto_id', array(':produto_id'=>$produtoIdCheck)))
          {
            echo " - Sem registros";
          }
          else
          {

            foreach ($linhas as $linha)
            {

          ?>

          <tr>
            <td><?php echo $linha['produto_id']; ?></td>
            <td><?php echo $linha['produto_sku']; ?></td>
            <td><?php echo $linha['produto_nome']; ?></td>
            <td><?php echo $linha['produto_descricao']; ?></td>
            <td><?php echo $linha['produto_preco']; ?></td>
            <td class="text-center" width="180">
              <form method="post">
                <input type="submit" formaction="produto.php?id=<?php echo $linha['produto_id']; ?>" name="btneditar" class="btn btn-success" id="btneditar" value="Editar">
                <input type="button" onclick="confirmar(<?php echo $linha['produto_id']; //session_start(); $_SESSION['btnexcluir'] = 'excluir'; ?>)" name="btnexcluir" class="btn btn-danger" id="btnexcluir" value="Excluir">

                <script type="text/javascript" src="./js/modal_excluir_produto.js">

                </script>
              </form>

            </td>
          </tr>
          <?php
            }
          }
          ?>
      </table>
    </div>
