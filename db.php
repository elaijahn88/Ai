<?php


$servername='localhost';
$dbname='u754698099_elijah';
$username='u754698099_elijah';
$password='#Elaijah2013';


 $conn = new mysqli($servername, $username, $password, $dbname); // Check connection 
 if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
  // SQL query to fetch user data 
 $sql = "SELECT * FROM users"; // Replace 'users' with your table name
 $result = $conn->query($sql); if ($result->num_rows > 0) {
     // Output data of each row
 while($row = $result->fetch_assoc()) { echo "<nav></nav> user : " . $row["email"] . "<br>"; } } else { echo "0 results"; }
 $conn->close();


$pay=20000;
if ($pay<=20000){
    echo "<p><script >console.log('finally');</script>elijah company</p>";
    
}else{
    echo "elijah company";
}



 ?> 
