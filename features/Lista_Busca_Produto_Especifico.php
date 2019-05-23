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
          <th>ID</th>
          <th>SKU</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Preço</th>
          <th>Ações</th>
        </tr>

        
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
        
      </table>
    </div>
