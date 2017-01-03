<?php
  $method = $_SERVER['REQUEST_METHOD'];
  $request = explode('/', trim($_SERVER['REQUEST_URI'],'/'));
  $input = json_decode(file_get_contents('php://input'),true);

  print_r($request);
  switch ($method) {
    case 'GET':
      break;
    case 'POST':
      break;
    case 'PUT':
      break;
    case 'DELETE':
      break;
    default:
    echo 'fail';
      break;
  }

?>
