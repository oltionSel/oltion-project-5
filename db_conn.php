<?php

$servername="localhost";
$username="root";
$password="";
$dbname="regjistrimiPuntoreve";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die('Lidhja me databaze deshtoi'.$conn->connect_error);
}

?>