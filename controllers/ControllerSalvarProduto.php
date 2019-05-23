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
    $produtoSku = $_POST['txtsku'];
    $produtoNome = $_POST['txtnome'];
    $produtoDescricao = $_POST['txtdescricao'];
    $produtoPreco = $_POST['txtpreco'];
    
    //Aqui checa se o produto já existe no banco de dados
    if (!DB::query('SELECT produto_sku FROM tb_produto WHERE produto_sku=:produto_sku', array(':produto_sku'=>$produtoSku)))
    {
        //Faça a inserção no Banco de Dados
        DB::query('INSERT INTO tb_produto VALUES (NULL, :produto_sku, :produto_nome, :produto_descricao, :produto_preco)', array(':produto_sku'=>$produtoSku, ':produto_nome'=>$produtoNome, ':produto_descricao'=>$produtoDescricao, ':produto_preco'=>$produtoPreco));
        //Crie uma seção (Sucesso)
        session_start();
        $_SESSION['secao_sucesso'] = 'registrado_com_sucesso';
        header("location: ../produto.php");
    }
    else
    {
      echo "Produto já existe";
    }
  }
?>