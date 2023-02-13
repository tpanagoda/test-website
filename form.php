<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
    }

    // Creating a variable to store the
    // server address
    $ip_server = $_SERVER['SERVER_ADDR'];
      
    // Printing the stored address
    echo "Server IP Address is: $ip_server";

    // database details
    $host = "mydatabase1.c5pjidu07yp7.us-east-1.rds.amazonaws.com";
    $username = "rdsuser123";
    $password = "rdspass123";
    $dbname = "cloudPlusPlusLab";

    // creating a connection
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$conn)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

  // sql to create table
  $sql = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }

    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$fname', '$lname', '$email');";

    if(mysqli_query($conn, $sql)){
      echo "<h3>data stored in a database successfully."
          . " Please browse your localhost php my admin"
          . " to view the updated data</h3>";

      echo nl2br("\n$first_name\n $last_name\n "
          . "$gender\n $address\n $email");
    } else{
      echo "ERROR: Hush! Sorry $sql. "
          . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>