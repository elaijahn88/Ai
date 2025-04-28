<body>
    <style>
       #file{
           color:blue;
           background-color: blue;
       } 
       button{
           color: red;
           background-color: blue;
       }
       
       }
    </style>
    
</body> <br><br>

  <input type="file" name="file"id="file">
  

<?php
// Define upload directory
$upload_dir = 'uploads/';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Check if a file has been uploaded
  if (isset($_FILES['file'])) {
    // Get the file details
    $file_name = $_FILES['file']['name'];
    $file_tmp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_error = $_FILES['file']['error'];

    // Check for errors
    if ($file_error == 0) {
      // Move the uploaded file to the upload directory
      $file_path = $upload_dir . $file_name;
      if (move_uploaded_file($file_tmp_name, $file_path)) {
        echo "File uploaded successfully!";
      } else {
        echo "Error uploading file!";
      }
    } else {
      echo "Error uploading file!";
    }
  }
}
?>
