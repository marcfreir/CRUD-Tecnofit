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
    //if (isset($_POST['btnexcluir']))
    //{
        if (isset($_GET['id']))
        {
            $pedidoId = $_GET['id'];
            //Aqui checa se o pedido já existe no banco de dados
            if (DB::query('SELECT pedido_id FROM tb_pedido WHERE pedido_id=:pedido_id', array(':pedido_id'=>$pedidoId)))
            {
                //Faça a exclusão no Banco de Dados
                DB::query('DELETE FROM tb_pedido WHERE pedido_id=:pedido_id', array(':pedido_id'=>$pedidoId));
                //Crie uma seção (Sucesso)
                session_start();
                $_SESSION['secao_sucesso'] = 'excluido_com_sucesso';
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
    //}
    //else
    //{
    //    echo "Comando incorreto";
    //}
?>