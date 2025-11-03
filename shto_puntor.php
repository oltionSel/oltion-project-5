<?php 
include('header.php');
include('db_conn.php');
?>

<div class="container" style="min-height:74vh">


<?php

if($_SERVER['REQUEST_METHOD']=='POST') {

    $error_text=[];

    // Emri - Validimi dhe Sanitize
    if(isset($_POST['emri']) && !empty($_POST['emri'])) {

        $emri=htmlspecialchars(strip_tags(trim($_POST['emri'])));

        if(strlen($emri)<2) {
            $error_text[]='Emri duhet te permbaje se paku 3 karaktere!';
        }

    }
    else {
        $error_text[]='Ju lutemi plotesoni fushen e emrit!';
    }



    // Mbiemri - Validimi dhe Sanitize
    if(isset($_POST['mbiemri']) && !empty($_POST['mbiemri'])) {

        $mbiemri=htmlspecialchars(strip_tags(trim($_POST['mbiemri'])));

        if(strlen($mbiemri)<2) {
            $error_text[]='Mbiemri duhet te permbaje se paku 3 karaktere!';
        }

    }
    else {
        $error_text[]='Ju lutemi plotesoni fushen e mbiemrit!';
    }



    // Pozita - Validimi dhe Sanitize
    if(isset($_POST['pozita']) && !empty($_POST['pozita'])) {

        $pozita=htmlspecialchars(strip_tags(trim($_POST['pozita'])));

        if(strlen($pozita)<2) {
            $error_text[]='Pozita duhet te permbaje se paku 3 karaktere!';
        }

    }
    else {
        $error_text[]='Ju lutemi plotesoni fushen e pozites!';
    }



    // Departamenti - Validimi dhe Sanitize
    if(isset($_POST['departamenti']) && !empty($_POST['departamenti'])) {

        $departamenti=htmlspecialchars(strip_tags(trim($_POST['departamenti'])));

        if(strlen($departamenti)<2) {
            $error_text[]='Departamenti duhet te permbaje se paku 3 karaktere!';
        }

    }
    else {
        $error_text[]='Ju lutemi plotesoni fushen e departamentit!';
    }





    if(count($error_text)>0) {
        foreach($error_text as $error_message) {
            echo "<p class='alert alert-danger text-red'>$error_message</p>";
        }
        echo "<a href='shto_puntor_form.php' class='btn btn-danger btn-lg m-3'>Kthehu te forma </a>";

    }
    else {

        $sql="INSERT INTO puntoret(emri,mbiemri,pozita,departamenti)
        VALUES('$emri','$mbiemri','$pozita','$departamenti')";

        $result=$conn->query($sql);

        if($result) {
            echo "<p class='alert alert-success'>Te dhenat u ruajten me sukses!</p>";
            echo "<a href='shto_puntor_form.php' class='btn btn-outline-primary my-3 me-3'>Kthehu te forma </a> <a href='lista_puntoreve.php' class='btn btn-outline-primary m-3'>Shko te lista </a>";
        }
        else {
            echo "<p class='alert alert-danger'>Te dhenat nuk u ruajten me sukses!</p>";
        }

    }

}
?>

</div>