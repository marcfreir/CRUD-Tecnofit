<?php
  /*
    Subject    : CRUD – Linguagem PHP (TECNOFIT)
    Created on : 18-May-2019, 12:39:14 PM
    Author     : Marcos Freire
  */
?>

<?php

  class DB
  {
    protected function connect()
    {
      try
      {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=db_tecnofit;charset=utf8', 'root', '');

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
      }
      catch (PDOException $e)
      {
        //Caso haja exceção, redirecione para "not_connected_to_DB.php"
        session_start();
        $_SESSION['session_no_connection'] = 'ERROR: Could not connect. <br>' . $e->getMessage();
        header("location: ./not_connected_to_DB.php");
      }
    }

    public static function query($query, $params = array())
    {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);

        if (explode(' ', $query)[0] == 'SELECT')
        {
            $data = $statement->fetchAll();
            return $data;
        }
    }
  }

?>
