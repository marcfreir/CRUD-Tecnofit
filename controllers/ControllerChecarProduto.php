<?php
    /*
        Subject    : CRUD – Linguagem PHP (TECNOFIT)
        Created on : 20-May-2019, 01:48:00 PM
        Author     : Marcos Freire
    */
?>

<?php
    $produtoIdCheck = NULL;
    $checar = DB::query('SELECT produto_id FROM tb_produto WHERE produto_id=:produto_id', array(':produto_id'=>$produtoIdCheck));
?>