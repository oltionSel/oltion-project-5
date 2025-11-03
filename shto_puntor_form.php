<?php
include("header.php");
?>

<h3 class="mt-5 mb-3 text-center fs-1">Shto Puntorë</h3>

<div class="container" style="min-height:74vh">
<div class="row justify-content-center mt-5">
<div class="col-md-8">

    <form action="shto_puntor.php" method="post" class="shadow-lg p-3 rounded-3">

        <!-- Emri -->
        <div class="mb-3">
            <label for="emri" class="form-label">Emri:</label>
            <input type="text" name="emri" id="emri" class="form-control">
        </div>

        <!-- Mbiemri -->
        <div class="mb-3">
            <label for="mbiemri" class="form-label">Mbiemri:</label>
            <input type="text" name="mbiemri" id="mbiemri" class="form-control">
        </div>

        <!-- Pozita -->
        <div class="mb-3">
            <label for="pozita" class="form-label">Pozita:</label>
            <input type="text" name="pozita" id="pozita" class="form-control">
        </div>

        <!-- Departamenti -->
        <div class="mb-3">
            <label for="departamenti" class="form-label">Departamenti:</label>
            <input type="text" name="departamenti" id="departamenti" class="form-control">
        </div>
    
        <div class="mb-3">
            <button class="btn btn-outline-primary w-25 my-3" type="submit">Ruaj</button>
        </div>

    </form>

</div>
</div>
</div>











<?php
include("footer.php");

?>