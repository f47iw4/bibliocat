<?php
 include 'db.php';

 if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql)===TRUE) {
        echo "New user registered succesfully";
    }else {

        echo "Error: " . $sql . "<br>" . $conn->error;
    }     
 } 

?>

<form method = "post" action="">

    <label>Name: </label> <br>
    <input type ="text" name="name"><br>

    <label> Email: </label> <br>
    <input type="email" name="email"<br>

    <label> Phone: </label><br>
    <input type="text" name="phone"><br>
    <input type="submit" name="submit" value="Create">

</form>