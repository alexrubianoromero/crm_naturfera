<?php
$raiz = dirname(dirname(__file__));
// die($raiz);
// die('paso00000');
require_once($raiz.'/alertas/controllers/alertasController.php');  
$controller = new alertasController();
// $controller->menuTractores();
?>