<?php
include('db_conn.php');
include('header.php');
?>

<div class="container" style="min-height:77.3vh">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">

            <?php

            $id=isset($_GET['id'])?$_GET['id']:null;

            $sql="DELETE FROM puntoret WHERE id='$id'";

            $result=$conn->query($sql);

            if($result) {
                echo "<div class='alert alert-success'>Puntori u fshie me sukses!</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Puntori nuk u fshie me sukses!</div>";
            }

            echo "<a class='btn btn-primary' href='lista_puntoreve.php'>Kthehu te Lista e Puntoreve</a>";

            
            ?>

        </div>
    </div>
</div>