<?php
    require_once("Config.php");
    echo $doctype_START;
    echo $header;
    test_form($_POST["nom"], $_POST["email"], $_POST["message"]);
    echo $doctype_START;
?>