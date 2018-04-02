<?php 

require_once './vendor/autoload.php';
require_once('db.php');

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader);

$db=new DBConnection();
$result=$db->getAllItemsReturnObj();

echo $twig->render('index4.html.twig', array('result' => $result));






 ?>