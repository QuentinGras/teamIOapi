<?php
  $request = explode('/', trim($_SERVER['REQUEST_URI'],'/'));
//  $input = json_decode(file_get_contents('php://input'),true);
  try
  {
      $bdd = new PDO('mysql:host=docapostnwdocadb.mysql.db;dbname=docapostnwdocadb;', 'docapostnwdocadb', 'Doca2016');
  }
  catch(Exception $e)
  {
      die('Erreur : '.$e->getMessage());
  }
  switch ($request[2]) {
    case 'tempDay':
      foreach($bdd->query('SELECT * FROM WaWTemp') as $row)
      {
        print_r($row);
      }
      break;
    case 'tempWeek':
      # code...
      break;
    case 'tempMonth':
      # code...
      break;
    default:
      # code...
      break;
  }
 ?>
