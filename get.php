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
      for ($i = 10; $i < 19; $i++){
        $req = $bdd->prepare('SELECT AVG(value) FROM WaWTemp WHERE HOUR(date) = ?');
        $req->execute(array($i));
        echo '"'.($i - 10).'":"';
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
    case 'humDay':
      echo '{';
      for ($i = 10; $i < 19; $i++){
        $req = $bdd->prepare('SELECT AVG(value) FROM WaWhumi WHERE HOUR(date) = ?');
        $req->execute(array($i));
        echo '"'.($i - 10).'":"';
        foreach($req as $row)
        {
          echo $row[0].'",';
          //echo '"'.$row['date'].'":"'.$row['value'].'",';
        }
    //    echo '<br>';
      }
      echo '}';
      break;
    case 'humWeek':
      echo '{';
      for ($i = 0; $i < 7; $i++){
        $req = $bdd->prepare('SELECT AVG(value) FROM WaWhumi WHERE WEEKDAY(date) = ?');
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
    case 'humMonth':
      echo '{';
      for ($i = 0; $i < 31; $i++){
        $req = $bdd->prepare('SELECT AVG(value) FROM WaWhumi WHERE DAY(date) = ?');
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
    case 'sonDay':
      echo '{';
      for ($i = 10; $i < 19; $i++){
        $req = $bdd->prepare('SELECT AVG(value) FROM WaWson WHERE HOUR(date) = ?');
        $req->execute(array($i));
        echo '"'.($i - 10).'":"';
        foreach($req as $row)
        {
          echo $row[0].'",';
          //echo '"'.$row['date'].'":"'.$row['value'].'",';
        }
    //    echo '<br>';
      }
      echo '}';
      break;
    case 'sonWeek':
      echo '{';
      for ($i = 0; $i < 7; $i++){
        $req = $bdd->prepare('SELECT AVG(value) FROM WaWson WHERE WEEKDAY(date) = ?');
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
    case 'sonMonth':
      echo '{';
      for ($i = 0; $i < 31; $i++){
        $req = $bdd->prepare('SELECT AVG(value) FROM WaWson WHERE DAY(date) = ?');
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
    case 'aftDay':
      echo '{';
      for ($i = 10; $i < 19; $i++){
        $req = $bdd->prepare('SELECT count(*) FROM WaWafter WHERE HOUR(date) = ?');
        $req->execute(array($i));
        echo '"'.($i - 10).'":"';
        foreach($req as $row)
        {
          echo $row[0].'",';
          //echo '"'.$row['date'].'":"'.$row['value'].'",';
        }
    //    echo '<br>';
      }
      echo '}';
      break;
    case 'aftWeek':
      echo '{';
      for ($i = 0; $i < 7; $i++){
        $req = $bdd->prepare('SELECT count(*) FROM WaWafter WHERE WEEKDAY(date) = ?');
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
    case 'aftMonth':
      echo '{';
      for ($i = 0; $i < 31; $i++){
        $req = $bdd->prepare('SELECT count(*) FROM WaWafter WHERE DAY(date) = ?');
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
    case 'pDay':
      echo '{';
      for ($i = 10; $i < 19; $i++){
        $req = $bdd->prepare('SELECT count(*) FROM WaWpause WHERE HOUR(date) = ?');
        $req->execute(array($i));
        echo '"'.($i - 10).'":"';
        foreach($req as $row)
        {
          echo $row[0].'",';
          //echo '"'.$row['date'].'":"'.$row['value'].'",';
        }
    //    echo '<br>';
      }
      echo '}';
      break;
    case 'pWeek':
      echo '{';
      for ($i = 0; $i < 7; $i++){
        $req = $bdd->prepare('SELECT count(*) FROM WaWpause WHERE WEEKDAY(date) = ?');
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
    case 'pMonth':
      echo '{';
      for ($i = 0; $i < 31; $i++){
        $req = $bdd->prepare('SELECT count(*) FROM WaWpause WHERE DAY(date) = ?');
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
