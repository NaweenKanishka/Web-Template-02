<?php
$conn = new mysqli('localhost', 'root', '', 'testdb');
$errormessage = "";

if($conn->connect_error){
    die("connection faild: " . $conn->connect_error);
}

if(isset($_POST['submit'])){

    $username = $_POST['User-Name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password); // If using hashed passwords, you would check differently
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        header("Location: admin.php");
        exit();
    }
    else{
        $errormessage = "Username or password is incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css">
</head>

<body>
    <div class="body-container">
        <div class="content-">
            <form action="" method="post">
                <div class="f-div">
                    <div class="f-div-image">
                        <img src="vecteezy_3d-shape-with-transparent-background-for-message-quote-and-etc_13860983.png" alt="">
                    </div>
                    <div class="f-div2">
                        
                        <input type="text" name="User-Name" id="User-Name" placeholder="Username">
                        <p class="error"><?php echo $errormessage ?></p>
    
                        
                        <input type="password" name="password" id="password" placeholder="Password">
                        <p class="error"><?php echo $errormessage ?></p>
    
                        <button type="submit" name="submit" id="submit"><span>Log in</span></button>
                        <a href="">Lost password?</a>
                    </div>
                    <div class="visit-page">
                        <a href="">Visit our page</a>
                    </div>
                    
                </div>

            </form>
        </div>
    </div>
</body>

</html>