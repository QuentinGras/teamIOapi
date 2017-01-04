<?php
  $request = explode('/', trim($_SERVER['REQUEST_URI'],'/'));
  //TODO: Gerer le remplissage de la BDD

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
      for ($i = 9; $i < 19; $i++){
        $req = $bdd->prepare('SELECT AVG(value) FROM WaWTemp WHERE HOUR(date) = ?');
        $req->execute(array($i));
        echo '"'.$i.'":"';
        foreach($req as $row)
        {
          echo $row[0].'",';
          //echo '"'.$row['date'].'":"'.$row['value'].'",';
        }
    //    echo '<br>';
      }
      echo '}';
      break;
    case 'tempWeek':
      echo '{';
      for ($i = 0; $i < 7; $i++){
        $req = $bdd->prepare('SELECT AVG(value) FROM WaWTemp WHERE WEEKDAY(date) = ?');
        $req->execute(array($i));
        echo '"'.$i.'":"';
        foreach($req as $row)
        {
          echo $row[0].'",';
          //echo '"'.$row['date'].'":"'.$row['value'].'",';
        }
    //    echo '<br>';
      }
      echo '}';
      break;
    case 'tempMonth':
      echo '{';
      for ($i = 0; $i < 31; $i++){
        $req = $bdd->prepare('SELECT AVG(value) FROM WaWTemp WHERE DAY(date) = ?');
        $req->execute(array($i));
        echo '"'.$i.'":"';
        foreach($req as $row)
        {
          echo $row[0].'",';
          //echo '"'.$row['date'].'":"'.$row['value'].'",';
        }
    //    echo '<br>';
      }
      echo '}';
      break;
    default:
      # code...
      break;
  }
 ?>
