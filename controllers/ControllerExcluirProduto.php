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
            $produtoId = $_GET['id'];
            //Aqui checa se o produto já existe no banco de dados
            if (DB::query('SELECT produto_id FROM tb_produto WHERE produto_id=:produto_id', array(':produto_id'=>$produtoId)))
            {
                //Faça a exclusão no Banco de Dados
                DB::query('DELETE FROM tb_produto WHERE produto_id=:produto_id', array(':produto_id'=>$produtoId));
                //Crie uma seção (Sucesso)
                session_start();
                $_SESSION['secao_sucesso'] = 'excluido_com_sucesso';
                header("location: ../produto.php");
            }
            else
            {
                echo "Produto não existe";
            }
        }
        else
        {
            echo "Produto não existe";
        }
    //}
    //else
    //{
    //    echo "Comando incorreto";
    //}
?>