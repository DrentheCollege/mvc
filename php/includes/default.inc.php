<?php
  //constants for including files
  define("WEB_ROOT", DIRECTORY_SEPARATOR . "OOP_template" . DIRECTORY_SEPARATOR);
  define("LOCAL_ROOT", $_SERVER['DOCUMENT_ROOT'] . WEB_ROOT);

  //function for loading class files inclusive namespaces
  spl_autoload_register(function ($class_name) {
      $parts = explode("\\", $class_name);
      require_once LOCAL_ROOT . "php/classes/" . implode("/", $parts) . '.class.php';
  });

 ?>
