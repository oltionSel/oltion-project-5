<?php
include('header.php');
include('db_conn.php');



$id=isset($_GET['id'])?$_GET['id']:null;

$sql="SELECT * FROM puntoret WHERE id='$id' LIMIT 1";
$result=$conn->query($sql);

if($result->num_rows>0){
    $puntori=$result->fetch_assoc();
}
else{
    echo "<div class='alert alert-danger'> Nuk ka stok ne bazen e te dhenave me kete id </div>";
}


?>

<div class="container" style="min-height:92vh">

<div class="row justify-content-center mt-5">

    <div class="col-md-8">
        <form action="update_puntoret.php" method="post" class="shadow-lg rounded-3 p-3">
        <h3>Shto Puntorë</h3>
        
        <input type="hidden" value="<?php echo $puntori['id'] ?>" name="puntor_id">

            <!-- Emri -->
            <div class="mb-3">
                <label for="emri" class="form-label">Emri</label>
                <input value="<?php echo $puntori['emri']; ?>" type="text" id="emri" name="emri" class="form-control">
            </div>

            <!-- Mbiemri -->
            <div class="mb-3">
                <label for="mbiemri" class="form-label">Mbiemri</label>
                <input value="<?php echo $puntori['mbiemri']; ?>" type="text" id="mbiemri" name="mbiemri" class="form-control">
            </div>

            <!-- Pozita -->
            <div class="mb-3">
                <label for="pozita" class="form-label">Pozita</label>
                <input value="<?php echo $puntori['pozita']; ?>" type="text" id="pozita" name="pozita" class="form-control">
            </div>

            <!-- Departamenti -->
            <div class="mb-3">
                <label for="departamenti" class="form-label">Departamenti</label>
                <input value="<?php echo $puntori['departamenti']; ?>" type="text" id="departamenti" name="departamenti" class="form-control">
            </div>


            
              <button type="submit" class="btn btn-primary w-25">Ruaj</button>

        </form>

    </div>

</div>



</div>





<?php
include('footer.php');
?>