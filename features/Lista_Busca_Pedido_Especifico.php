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
          <th>TOTAL</th>
          <th>Data</th>
          <th>Produtos</th>
          <th>Ações</th>
        </tr>

        
        <tr>
          <td><?php echo $linha['pedido_id']; ?></td>
          <td><?php echo $linha['pedido_total']; ?></td>
          <td><?php echo $linha['pedido_data']; ?></td>
          <td><?php echo $linha['pedido_produtos']; ?></td>
          <td class="text-center" width="180">
            <form method="post">
              <input type="submit" formaction="pedido.php?id=<?php echo $linha['pedido_id']; ?>" name="btneditar" class="btn btn-success" id="btneditar" value="Editar">
              <input type="button" onclick="confirmar(<?php echo $linha['pedido_id']; //session_start(); $_SESSION['btnexcluir'] = 'excluir'; ?>)" name="btnexcluir" class="btn btn-danger" id="btnexcluir" value="Excluir">

              <script type="text/javascript" src="./js/modal_excluir_pedido.js">

              </script>
            </form>

          </td>
        </tr>
        
      </table>
    </div>
