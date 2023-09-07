<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "messageapp";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    if($password != $repeat_password){
        header('Location: ../register.php');
    }

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header('Location: ../register.php');
    } else {
    $sql = "INSERT INTO users(username,name,surname,password,join_date,avatar) VALUES
    ('$username','$name','$surname','$password',CURRENT_DATE,NULL)";
    $result = $conn->query($sql);
    header('Location: ../login.php');
    }

    // if ($result->num_rows > 0) {
    // while($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["surname"]. "<br>";
    // }
    // } else {
    // echo "0 results";
    // }

?>