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
            $produtoId = $_GET['id'];
            $produtoSku = $_POST['txtsku'];
            $produtoNome = $_POST['txtnome'];
            $produtoDescricao = $_POST['txtdescricao'];
            $produtoPreco = $_POST['txtpreco'];
            
            
            //Aqui checa se o produto já existe no banco de dados
            if (DB::query('SELECT produto_id FROM tb_produto WHERE produto_id=:produto_id', array(':produto_id'=>$produtoId)))
            {
                //Faça a inserção no Banco de Dados
                DB::query('UPDATE tb_produto SET produto_sku=:produto_sku, produto_nome=:produto_nome, produto_descricao=:produto_descricao, produto_preco=:produto_preco WHERE produto_id=:produto_id', array(':produto_sku'=>$produtoSku, ':produto_nome'=>$produtoNome, ':produto_descricao'=>$produtoDescricao, ':produto_preco'=>$produtoPreco, ':produto_id'=>$produtoId));
                //Crie uma seção (Sucesso)
                session_start();
                $_SESSION['secao_sucesso'] = 'atualizado_com_sucesso';
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
    }
    else
    {
        echo "Comando incorreto";
    }
?>