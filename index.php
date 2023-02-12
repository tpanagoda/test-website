<!DOCTYPE html>
<html>
<head>
<title>Embed PHP in a .html File</title>
</head>
<body>
<h1><?php echo "Hello World" ?></h1>
<p>
    <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE DATABASE myDB";
    if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . $conn->error;
    }

    $conn->close();
    ?>
</p>
</body>
</html>