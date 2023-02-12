<!DOCTYPE html>
<html>
<head>
<title>Embed PHP in a .html File</title>
</head>
<body>
<h1><?php echo "Hello World" ?></h1>
<p>
    <?php
    $servername = "database-1.c5pjidu07yp7.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "1ring2rule";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection Error!!";
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