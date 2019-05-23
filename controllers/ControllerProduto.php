<?php
    /*
        Subject    : CRUD – Linguagem PHP (TECNOFIT)
        Created on : 20-May-2019, 01:48:00 PM
        Author     : Marcos Freire
    */
?>

<?php
    include ('./classes/DB.php');
    include ('./classes/Produto.php');
?>

<?php
    //session_start();
    if (isset($_POST['btnbuscar']))
    {

        if (!$_POST['txtskusearch'] == NULL)
        {
            $skuSearch = $_POST['txtskusearch'];
            ##$statusSearch = $_POST['txtstatussearch'];

            if (DB::query('SELECT * FROM tb_produto WHERE produto_sku=:produto_sku', array(':produto_sku'=>$skuSearch)))
            {
                //echo $nomeSearch;
                //die;
                $linhas = DB::query('SELECT * FROM tb_produto WHERE produto_sku=:produto_sku', array(':produto_sku'=>$skuSearch));

                foreach ($linhas as $linha)
                {
                    $produtoId = $linha['produto_id'];
                    $produtoSku = $linha['produto_sku'];
                    $produtoNome = $linha['produto_nome'];
                    $produtoDescricao = $linha['produto_descricao'];
                    $produtoPreco = $linha['produto_preco'];
                    

                    /*
                    echo $produtoId . "<br>";
                    echo $produtoCodigo . "<br>";
                    echo $produtoNome . "<br>";
                    echo $produtoDescricao . "<br>";
                    echo $produtoPreco . "<br>";
                    echo $produtoDataEntrada . "<br>";
                    echo $produtoDataSaida . "<br>";
                    echo $produtoStatus;
                    */
                    //echo $linhas[0];
                    //echo $produtoId;
                    //die;

                    include ('./features/Lista_Busca_Produto_Especifico.php');

                }
                

            }
            elseif (DB::query('SELECT * FROM tb_produto WHERE produto_nome=:produto_nome', array(':produto_nome'=>$skuSearch)))
            {
                $linhas = DB::query('SELECT * FROM tb_produto WHERE produto_nome=:produto_nome', array(':produto_nome'=>$skuSearch));

                foreach ($linhas as $linha)
                {
                    $produtoId = $linha['produto_id'];
                    $produtoSku = $linha['produto_sku'];
                    $produtoNome = $linha['produto_nome'];
                    $produtoDescricao = $linha['produto_descricao'];
                    $produtoPreco = $linha['produto_preco'];

                    include ('./features/Lista_Busca_Produto_Especifico.php');

                }
            }
            else
            {
                echo "<h4 class='center'>Nada encontrado </h4><br>";
                echo "<h5 class='center'>Essa página irá Atualizar automaticamente em 60 segundos... </h5><br>";
                include ('./features/Botao_Atualizar_Lista_Produto.php');
                header("Refresh: 60; url=produto.php");
            }
        }
        else
        {
            //include ('./features/Lista_Busca_Produto.php');
            echo "<h4 class='center'>Nada encontrado </h4><br>";
            echo "<h5 class='center'>Essa página irá Atualizar automaticamente em 60 segundos... </h5><br>";
            ##include ('./features/Botao_Atualizar_Lista_Produto.php');
            header("Refresh: 60; url=produto.php");

        }
    }
    elseif (isset($_POST['btnnovo']))
    {
        include ('./features/Formulario_Novo_Produto.php');
    }
    elseif (isset($_POST['btneditar']))
    {
        //include ('./features//Lista_Busca_Produto.php');
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
            

            $linhas = DB::query('SELECT * FROM tb_produto WHERE produto_id=:produto_id', array(':produto_id'=>$id));

            foreach ($linhas as $linha)
            {
                $produtoId = $linha['produto_id'];
                $produtoSku = $linha['produto_sku'];
                $produtoNome = $linha['produto_nome'];
                $produtoDescricao = $linha['produto_descricao'];
                $produtoPreco = $linha['produto_preco'];

                /*
                echo $produtoId . "<br>";
                echo $produtoCodigo . "<br>";
                echo $produtoNome . "<br>";
                echo $produtoDescricao . "<br>";
                echo $produtoPreco . "<br>";
                echo $produtoDataEntrada . "<br>";
                echo $produtoDataSaida . "<br>";
                echo $produtoStatus;
                */
                //echo $linhas[0];
                //echo $produtoId;
                //die;

                include ('./features/Formulario_Editar_Produto.php');

            }
        }
        
        //echo "gfhgfgfhfh";
    }
    else
    {
        include ('./features/Lista_Busca_Produto.php');

    }
?>
