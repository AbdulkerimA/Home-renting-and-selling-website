<?php

// default (home) page to be required
$HOME = "./propertylists.php";
if (isset($_GET['p']))
    $page = $_GET['p'];



require_once("./index.view.php");
// no code should be under this