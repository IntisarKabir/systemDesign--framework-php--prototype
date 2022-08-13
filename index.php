<?php


include 'start.php';



// $req_uri = $_SERVER['REQUEST_URI'];
// $route =  str_replace(SUBDIR, '', $req_uri  );
// $req_uri = str_replace(SUBDIR, '', $req_uri  );
// $tokens = explode('/',rtrim($req_uri , '/'));
// $controller = ($tokens[0]);
// $method = ($tokens[1]);
// pp($tokens);
// $controller .= 'Controller';
// (new $controller())->$method();


$controller = 'css';
$c_name = $controller  . 'Controller';
$css= new $c_name();


include 'resources/assets/data.php';
$css->load_data();
$data_obj = new Articles( $articles);
$css->display('demo2.php', $data_obj);



//$c1= new  $c_name ($t1 , $db);










?>