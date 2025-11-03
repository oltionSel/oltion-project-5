<?php
include('db_conn.php');
include('header.php');
?>

<h3 class="mb-3 mt-5 text-center fs-1">Lista e Puntorëve</h3>

<div class="container" style="min-height:77.3vh">

<table class="table table-striped">

    <thead>
        <tr>
            <th>Id</th>
            <th>Emri</th>
            <th>Mbiemri</th>
            <th>Pozita</th>
            <th>Departamenti</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>

    <tbody>

        <?php
          
            $sql='select * from puntoret';
            

            $result=$conn->query($sql);

            if($result->num_rows>0) {

                while($row=$result->fetch_assoc()) {
                    
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['emri']."</td>";
                    echo "<td>".$row['mbiemri']."</td>";
                    echo "<td>".$row['pozita']."</td>";
                    echo "<td>".$row['departamenti']."</td>";
                    echo"<td class='text-center'>
                                <a class='btn btn-info'href='view_puntoret.php?id=".$row['id']."'>View</a>
                                <a class='btn btn-warning'href='edit_puntoret_form.php?id=".$row['id']."'>Edit</a>
                                <a class='btn btn-danger' href='delete_puntoret.php?id=".$row['id']."' >Delete</a>
                                </td>";
                    echo "</tr>";


                }

            }

        ?>

    </tbody>

</table>

</div>

<?php
include('footer.php');
?>