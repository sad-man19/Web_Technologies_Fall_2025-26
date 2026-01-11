<?php
session_start();
if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 0;
}
$message = "";
if (isset($_POST["submit"])) {
    $_SESSION["count"]++;
    $name = $_POST["name"];
    if (empty($name)) {
        $message = "Name is required";
    } else {
        $message = "Hello, " . strtoupper($name);
    }
}
if (isset($_POST["reset"])) {
    $_SESSION["count"] = 0;
    $message = "Session reset";
}
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Trace Test</title>
   </head>
   <body>
      <h3>Visit Count: <?php echo $_SESSION["count"]; ?></h3>
      <form method="post">
         Name: <input type="text" name="name">
         <br><br>
         <button name="submit">Submit</button>
         <button name="reset">Reset</button>
      </form>
      <p><?php echo $message; ?></p>
   </body>
   
</html>