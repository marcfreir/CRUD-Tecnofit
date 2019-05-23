<?php
    /*
        Subject    : CRUD – Linguagem PHP (TECNOFIT)
        Created on : 20-May-2019, 01:48:00 PM
        Author     : Marcos Freire
    */
?>

<?php
  include ("../classes/DB.php");
?>

<?php
  //Caso o botão "Salvar" for acionado
  if (isset($_POST['btnsalvar']))
  {
    //Guarde os dados digitados no campos de texto nas variáveis seguintes
    $pedidoId = $_POST['txtid'];
    $pedidoTotal = $_POST['txttotal'];
    $pedidoData = $_POST['txtdata'];
    $pedidoPodutos = $_POST['txtprodutos'];
    
    //Aqui checa se o pedido já existe no banco de dados
    if (!DB::query('SELECT pedido_id FROM tb_pedido WHERE pedido_id=:pedido_id', array(':pedido_id'=>$pedidoId)))
    {
        //Faça a inserção no Banco de Dados
        DB::query('INSERT INTO tb_pedido VALUES (:pedido_id, :pedido_total, :pedido_data, :pedido_produtos)', array(':pedido_id'=>$pedidoId, ':pedido_total'=>$pedidoTotal, ':pedido_data'=>$pedidoData, ':pedido_produtos'=>$pedidoPodutos));
        //Crie uma seção (Sucesso)
        session_start();
        $_SESSION['secao_sucesso'] = 'registrado_com_sucesso';
        header("location: ../pedido.php");
    }
    else
    {
      echo "Pedido já existe";
    }
  }
?>