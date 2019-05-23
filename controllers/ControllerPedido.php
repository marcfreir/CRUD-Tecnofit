<?php
    /*
        Subject    : CRUD – Linguagem PHP (TECNOFIT)
        Created on : 20-May-2019, 01:48:00 PM
        Author     : Marcos Freire
    */
?>

<?php
    include ('./classes/DB.php');
    include ('./classes/Pedido.php');
?>

<?php
    //session_start();
    if (isset($_POST['btnbuscar']))
    {

        if (!$_POST['txtidsearch'] == NULL)
        {
            $idSearch = $_POST['txtidsearch'];
            ##$statusSearch = $_POST['txtstatussearch'];

            if (DB::query('SELECT * FROM tb_pedido WHERE pedido_id=:pedido_id', array(':pedido_id'=>$idSearch)))
            {
                //echo $nomeSearch;
                //die;
                $linhas = DB::query('SELECT * FROM tb_pedido WHERE pedido_id=:pedido_id', array(':pedido_id'=>$idSearch));

                foreach ($linhas as $linha)
                {
                    $pedidoId = $linha['pedido_id'];
                    $pedidoTotal = $linha['pedido_total'];
                    $pedidoData = $linha['pedido_data'];
                    $pedidoProdutos = $linha['pedido_produtos'];
                                     
                  
                    include ('./features/Lista_Busca_Pedido_Especifico.php');

                }
                

            }
            else
            {
                echo "<h4 class='center'>Nada encontrado </h4><br>";
                echo "<h5 class='center'>Essa página irá Atualizar automaticamente em 60 segundos... </h5><br>";
                include ('./features/Botao_Atualizar_Lista_Pedido.php');
                header("Refresh: 60; url=pedido.php");
            }
        }
        else
        {
            //include ('./features/Lista_Busca_Pedido.php');
            echo "<h4 class='center'>Nada encontrado </h4><br>";
            echo "<h5 class='center'>Essa página irá Atualizar automaticamente em 60 segundos... </h5><br>";
            ##include ('./features/Botao_Atualizar_Lista_Pedido.php');
            header("Refresh: 60; url=pedido.php");

        }
    }
    elseif (isset($_POST['btnnovo']))
    {
        include ('./features/Formulario_Novo_Pedido.php');
    }
    elseif (isset($_POST['btneditar']))
    {
        //include ('./features//Lista_Busca_Pedido.php');
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
            

            $linhas = DB::query('SELECT * FROM tb_pedido WHERE pedido_id=:pedido_id', array(':pedido_id'=>$id));

            foreach ($linhas as $linha)
            {
                $pedidoId = $linha['pedido_id'];
                $pedidoTotal = $linha['pedido_total'];
                $pedidoData = $linha['pedido_data'];
                $pedidoProdutos = $linha['pedido_produtos'];
                               

                include ('./features/Formulario_Editar_Pedido.php');

            }
        }
        
        //echo "gfhgfgfhfh";
    }
    else
    {
        include ('./features/Lista_Busca_Pedido.php');

    }
?>
