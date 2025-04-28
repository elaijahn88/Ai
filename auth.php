

<body>
    <style>
        p{
            
            color: blue;
        }
    </style> 
    
    </body>
<?php
$servername = "https://xlijah.com";
$username = "u754698099_elijah";
$password = "#Elaijah2013";
$dbname = "u754698099_elijah";


//selecting from database

$select="SELECT * FROM customer";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['phone'])) {
    $username = $_POST['name'];
    
    $query = "INSERT INTO customer (username, password) VALUES ('$username', '$password')";
    if ($conn->query($query) === TRUE) {
        echo "<p>Registration successful</p>";
    } else {
        echo "<p>Error:</p> " . $conn->error;
        header("Location:main.php");
        exit();
    }
}

/*

//login page
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Start session
            session_start();
            $_SESSION['username'] = $username;
            
        } else {
            echo "<p>Invalid password!</p>";
        }
    } else {
        echo "<p>User not found!</p>";
    }
}
*/

?>