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

    //Caso o botão "Atualizar" for acionado
    if (isset($_POST['btnatualizar']))
    {
        if (isset($_GET['id']))
        {
            //Guarde os dados digitados no campos de texto nas variáveis seguintes
            $pedidoId = $_GET['id'];
            $pedidoTotal = $_POST['txttotal'];
            $pedidoData = $_POST['txtdata'];
            $pedidoProdutos = $_POST['txtprodutos'];
                        
            
            //Aqui checa se o pedido já existe no banco de dados
            if (DB::query('SELECT pedido_id FROM tb_pedido WHERE pedido_id=:pedido_id', array(':pedido_id'=>$pedidoId)))
            {
                //Faça a inserção no Banco de Dados
                DB::query('UPDATE tb_pedido SET pedido_id=:pedido_id, pedido_total=:pedido_total, pedido_data=:pedido_data, pedido_produtos=:pedido_produtos WHERE pedido_id=:pedido_id', array(':pedido_id'=>$pedidoId, ':pedido_total'=>$pedidoTotal, ':pedido_data'=>$pedidoData, ':pedido_produtos'=>$pedidoProdutos, ':pedido_id'=>$pedidoId));
                //Crie uma seção (Sucesso)
                session_start();
                $_SESSION['secao_sucesso'] = 'atualizado_com_sucesso';
                header("location: ../pedido.php");
            }
            else
            {
                echo "Pedido não existe";
            }
        }
        else
        {
            echo "Pedido não existe";
        }
    }
    else
    {
        echo "Comando incorreto";
    }
?>