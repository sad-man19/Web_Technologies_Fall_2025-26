<?php
$name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $websiteErr = $genderErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    }else{
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z ]*$/", $name)){
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required!";
    }else{
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
        }
    }

    if(empty($_POST["website"])){
        $website ="";
    }else{
        $website = test_input($_POST["website"]);
        $pattern = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
        if(!preg_match($pattern, $website)){
            $websiteErr = "Invalid url";
        }
    }

    if(empty($_POST["comment"])){
        $comment = "";
    }else{
        $comment = test_input($_POST["comment"]);
    }

    if(empty($_POST["gender"])){
        $genderErr = "Gnder is required";
    }else{
        $gender = test_input($_POST["gender"]);
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/*<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>*/
?>
<html>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Name: <input type="text" name="name" value="<?php echo $name; ?>"> <br>
            <span><p><?php echo $nameErr; ?></p></span>

            Email: <input type="text" name="email" value="<?php echo $email; ?>"> <br>
            <span><?php echo $emailErr; ?></span><br>

            Website: <input type="text" name="website" value="<?php echo $website; ?>"><br>
            <span><?php echo $websiteErr; ?></span> <br>

            Comment: <textarea name="comment" value = "<?php echo $comment; ?>"></textarea><br><br>

            Gender: <input type="radio" name="gender" value="male" <?php if(isset($gender) && $gender == "male") echo "checked"; ?>>Male
            <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender == "female") echo "checked"; ?>>Female <br>
            <span><?php echo $genderErr; ?></span> <br>
            <input type="submit">
        </form>
    </body>
</html>

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Name: ". $_POST["name"]. "<br>"; 
    echo "Email: ". $_POST["email"]. "<br>"; 
    echo "Website: ". $_POST["website"]. "<br>"; 
    echo "Comment: ". $_POST["comment"]. "<br>";
    echo "gender: ". $_POST["gender"]. "<br>";
}
?>