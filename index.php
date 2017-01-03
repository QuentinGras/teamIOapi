<?php
  $method = $_SERVER['REQUEST_METHOD'];


  print_r($request);
  switch ($method) {
    case 'GET':
        include('get.php');
      break;
    case 'POST':
        include('post.php');
      break;
    case 'PUT':
        include('put.php');
      break;
    case 'DELETE':
        include('delete.php');
      break;
    default:
    echo 'fail';
      break;
  }

?>
