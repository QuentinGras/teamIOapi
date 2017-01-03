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
      echo '{';
      foreach($bdd->query('SELECT * FROM WaWTemp WHERE date > DATE_SUB(NOW(), INTERVAL 1 DAY)') as $row)
      {
        echo $row['date'].':'.$row['value'].',';
        //print_r($row);
      }
      echo '}';
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
