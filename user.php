<?php
    session_start();
    if (!$_SESSION['userid']) {
        header("Location: indes.php");
    } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>You are Member</h1>
    <h3>Hi, <?php echo $_SESSION['user']; ?></h3>
    <p><a href="logout.php">Logout</a></p>


</body>
</html>




<?php } ?>