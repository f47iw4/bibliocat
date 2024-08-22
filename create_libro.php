<?php

include 'db.php';

if (isset($_POST['submit'])) {
    $titulo_libro = $_POST['titulo_libro'];
    $autor_id = $_POST['autor_id'];
    $anio_publicacion = $_POST['anio_publicacion'];

    $sql ="INSERT INTO Libros (titulo_libro, autor_id, anio_publicacion) VALUES ('$titulo_libro', '$autor_id', '$anio_publicacion')";

    if ($conn->query($sql) === TRUE) {
        echo "New book created succesfully ^.^ ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// obtener la lista de autores 

$sql = "SELECT * FROM Autores";
$autores = $conn->query($sql);

?>

<form method="post" action="">
    <label>Titulo del libro: </label>
    <input type="text" name="titulo_libro" required><br>
    <label>Autor:</label>
    <select name="autor_id">
        <?php while($row = $autores->fetch_assoc()) { ?>
            <option value ="<?php echo $row['autor_id']; ?>"><?php echo $row['nombre_autor']; ?></option>
        }
    </select>

</form>