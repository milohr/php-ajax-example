<?php

require_once 'crud.php';

$crud = new CRUD($db);

$con = new Contact();
$con->id = "y33637";
$con->name = "GHK";
$con->lastname = "KKK";
$con->phone = "7364839";

$crud->create($con);

echo ("<h1>".$con."</h1>");







?>
