<?php
    /*
        Subject    : CRUD – Linguagem PHP (TECNOFIT)
        Created on : 20-May-2019, 01:48:00 PM
        Author     : Marcos Freire
    */
?>

<?php
  class Produto extends DB
  {
    public function select()
    {
      $sql = "SELECT * FROM tb_produto";

      $resultado = $this->connect()->query($sql);

      if ($resultado->rowCount() > 0)
      {
          while ($linha = $resultado->fetch())
          {
              //$dados = array($linha);
              $dados[] = $linha;
          }
          return $dados;
      }
      else
      {
          echo "Ainda não há registros";
          die;
      }
    }


    ############################
    public function create()
    {
      $sql = "SELECT * FROM tb_produto";

      $resultado = $this->connect()->query($sql);

      if ($resultado->rowCount() > 0)
      {
          while ($linha = $resultado->fetch())
          {
              //$dados = array($linha);
              $dados[] = $linha;
          }
          return $dados;
      }
      else
      {
          echo "Ainda não há registros";
          die;
      }
    }
    ##############################
  }
?>
