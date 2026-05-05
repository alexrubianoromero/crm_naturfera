<?php
$raiz = dirname(dirname(__file__));
// die($raiz);
// die('paso00000');
require_once($raiz.'/clientes/controllers/clientesController.php');  
$controller = new clientesController();
// $controller->menuTractores();
?>