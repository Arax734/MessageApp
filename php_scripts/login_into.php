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
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $pass = "SELECT password FROM users WHERE username = '$username'";
        $result_pass = $conn->query($pass);
        $row = $result_pass->fetch_assoc();
        if($row['password'] == $password){
            echo "Zalogowano pomyślnie!";
        }
        else{
            header('Location: ../login.php');
        }
    } else {
        header('Location: ../login.php');
    }


?>