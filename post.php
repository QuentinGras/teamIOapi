<?php
  $request = explode('/', trim($_SERVER['REQUEST_URI'],'/'));
  $data = explode('?', trim($request[2],'?'));
  //TODO: Gerer le remplissage de la BDD
//INSERT INTO `docapostnwdocadb`.`WaWpause` VALUES ()
  //  $input = json_decode(file_get_contents('php://input'),true);
  try
  {
      $bdd = new PDO('mysql:host=docapostnwdocadb.mysql.db;dbname=docapostnwdocadb;', 'docapostnwdocadb', 'Doca2016');
  }
  catch(Exception $e)
  {
      die('Erreur : '.$e->getMessage());
  }
  switch ($data[0]) {
    case 'temp':
      $req = $bdd->prepare('INSERT INTO WaWTemp(value) VALUES(?)');
      $req->execute(array($data[1]));
      break;
    case 'humi':
      $req = $bdd->prepare('INSERT INTO WaWhumi(value) VALUES(?)');
      $req->execute(array($data[1]));
      break;
    case 'son':
      $req = $bdd->prepare('INSERT INTO WaWson(value) VALUES(?)');
      $req->execute(array($data[1]));
      break;
    case 'aft':
        $bdd->exec('INSERT INTO `docapostnwdocadb`.`WaWafter` VALUES ()');
      break;
    case 'pause':
        $bdd->exec('INSERT INTO `docapostnwdocadb`.`WaWpause` VALUES ()');
      break;
    default:
      # code...
      break;
  }
  echo 'ok';
 ?>
