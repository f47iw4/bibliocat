<?php

include "db.php";

if (isset($_POST['submit']));

    $nombre_autor = $_POST['nombre_autor'];
    $nacionalidad = $_POST['nacionalidad'];

    $sql = "INSERT INTO Autores (nombre_autor, nacionalidad) VALUES ('$nombre_autor', '$nacionalidad') ";

    if ($conn->query($sql) === TRUE) {
        echo "New author added succesfully ^.^ ";
    } else {    
        echo "Error: " . $sql . "<br>" . $conn->error ;

    }
?>

<form method="post" action="">
    <label>Author name: </label><br>
    <input type="text" name="nombre_autor" required><br>
    <label> Nationality: </label><br>
    <input type="text" name="nacionalidad"<br>
    <input type="submit" name ="submit" value="Create Author"><br>

</form>