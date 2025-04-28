<html>
    
    <title>  Tv </title>
    
    <head> Tv </head>
    <body>
        
        
        <style> 
        
        body{
    
    background-color: black;
    position: absolute;
}


       
           
      
           
       }
           
           video{
               
               
               position: absolute;
               width:100vw;
               margin-right: 0px;
               box-sizing: border-box;
               
           }
           button{
               color:white;
           }
           #loan
           nav{
               color: blue;
           }
       
        </style>
        
      <!-- 
        <audio controls width="40" height="40">
  <source src="me.mp3" type="audio/mpeg" width="20" height="20">
  
</audio>

-->

<video  controls  muted loop>
    
    <source src="soso.mp4" type="video/mp4"></source>
     
    
</video>



<form action="loans.php" method="post">
    <img src="loan.jpeg"></img>
<input type="submit" value="loan" id="loan">
</form>


</body>



<?php



require_once('upload.php');

$name=$_POST['name'];
$phone = $_POST["phone"];
$email=$_POST['email'];
$confirm=$_POST['confirm'];
$password=$_POST['password'];
// start of authentication 






$host = "localhost";
$dbname = "your_database";
$dbuser = "your_username";
$dbpass = "your_password";

// Create connection
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

// Prepare statement to prevent SQL injection
$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
        $_SESSION['user_id'] = $id;
        echo "Login successful!";
    } else {
        echo "Invalid password.";
    }
} else {
    echo "User not found.";
}

$stmt->close();
$conn->close();






// stop authentication 
$servername = "localhost"; // or your database host
$username = "u754698099_elijah";
$password = "#Elaijah2013";
$database = "u754698099_elijah";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
    
    echo "<p> .....failed ....</p>";
}
else{
    $x=90;
    
    
    $sql = "SELECT  name, email,phone,pay FROM customer"; // Example table: users
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for each row
    while($row = $result->fetch_assoc()) {
        //echo " <p>pay: " . $row["pay"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br></p>";
        echo $name, " joined system <br>  ";
        
    }
} else {
    echo "0 results";
}
$conn->close();
    
}



?>

<img src="bell.png">

</html>