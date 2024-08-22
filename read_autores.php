<?php
 include 'db.php';

 $sql = "SELECT * FROM Autores";
$result = $conn->query($sql);

?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Nacionalidad</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        
    <tr> 
        <td><?php echo $row ['autor_id']?> </td>
        <td> <?php echo $row ['nombre_autor']?> </td>
        <td> <?php echo $row ['nacionalidad']?></td>

    </tr>

    <?php } ?>

</table>

