<?php
    session_start();

    if (isset($_POST['username'])) {
        include('connection.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);

        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";
        $result = mysqli_query($conn, $query);
    }


?>