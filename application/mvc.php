<?php
//Includes
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';
$pageUI =$_SERVER['REQUEST_URI'];
$pageUI =substr($pageUI,strrpos($pageUI,'index.php')+10);
    if (!$pageUI)
        new Controller('home');
    else
        new Controller($pageUI);
?>