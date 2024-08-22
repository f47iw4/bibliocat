<?php
include 'db.php';

$sql = "SELECT Libros.libro_id, Libros.titulo_libro, Autores.nombre_autor, Libros.anio_publicacion
        FROM Libros
        JOIN Autores ON Libros.autor_id = Autores.autor_id";
                
 $result = $conn->query($sql);
 
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Año de Publicación</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['libro_id']; ?></td>
        <td><?php echo $row ['titulo_libro']; ?></td>
        <td><?php echo $row ['nombre_autor']; ?></td>
        <td><?php echo $row ['anio_publicacion'];?></td>
    </tr>
    <?php } ?>
</table>