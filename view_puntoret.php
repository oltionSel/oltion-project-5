<?php

include('header.php');

include('db_conn.php');


?>

<div class="container" style="min-height:84vh">


<?php


if(isset($_GET['id']) && $_GET['id']!==null) {
    
    $id=filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);

    if($id) {
        $sql="select * from puntoret where id='$id' Limit 1";
        $result=$conn->query($sql);
        if($result->num_rows>0) {
        
            $row=$result->fetch_assoc();
            
            echo "<div class='row'>";

            echo "<div class='col-md-6'>";
            echo "<h2><span class='fs-2 lead'>Id: </span>".$row['id']."</h2>";
            echo "<h2><span class='fs-2 lead'>Emri: </span>".$row['emri']."</h2>";
            echo "<h2><span class='fs-2 lead'>Mbiemri: </span>".$row['mbiemri']."</h2>";
            echo "<h2><span class='fs-2 lead'>Pozita: </span>".$row['pozita']."</h2>";
            echo "<h2><span class='fs-2 lead'>Departamenti: </span>".$row['departamenti']."</h2>";
            echo "</div>";

            echo "<div class='col-md-6'>";
        
            echo "<div>";
            echo "<h1>Përshkrimi i Puntorit</h1>";
            echo "<p>Puntori ". $row['emri'] ." ". $row['mbiemri'] ." është puntor ne departamentin e ". $row['departamenti'] .". Pozita tyre është ". $row['pozita']  ."!</p>";
            echo "</div>";

            echo "</div>";

            echo "</div>";

        }
    }
    else {
        echo "Id nuk eshte valide";
    }

}

?>

</div>

<?php

include('footer.php');

?>