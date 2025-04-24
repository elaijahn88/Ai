<?php
  $message = "madbrok!";
  $number = 123;
?>

<!DOCTYPE html>
<html>
<head>
  <title>atomics</title>
</head>
<body>
  <script>
    var phpMessage = "<?php echo $message; ?>";
    var phpNumber = <?php echo $number; ?>;

    console.log(phpMessage);
    console.log(phpNumber);

    function greet(name) {
      alert("Hello, " + name + "! (Called from JavaScript)");
    }

    // PHP can trigger JavaScript functions indirectly by generating the call
    var shouldGreet = true;
    if (shouldGreet) {
      greet("User");
    }
  </script>

  <button onclick="print('<p> star</p>')">Atomics</button>
</body>
</html>
