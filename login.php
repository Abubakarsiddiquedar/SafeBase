<?php

$con=new mysqli("localhost","root","","project2");
session_start();
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    if(empty($username) || empty($password)){
        echo $E="please fill the blank";
    }
    else {
        $sql="SELECT * FROM users WHERE username='$username' AND password='$password' ";
        $re=(mysqli_query($con,$sql));

        if(mysqli_num_rows($re)!=0){
            $_SESSION['User']=$username;
            header("location:home.php");
        }
        else {
             $E="Please Enter correct password and username";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SafeBase | Login</title>
</head>
<body>
    <?php include("header.php"); ?>
    
    <section class="login-bg login-bg2">
        <div class="container2">
            
          <div class="form">
                <div class="head-form">
                    <h2>Login Here</h2>
                </div>
                <form method="POST">
                    <div>
                        <label for="username2">Username</label>
                        <input type="text" id="username2" name="username" required>
                    </div>
                    <div><label for="password2">Pssword</label>
                        <input type="password" id="password2" name="password" required>
                        </div>
                        <div class="error">
                            
                            <?php if(isset($E)){
                                echo $E;
                            }
                                ?>
                            
                        </div>
                        <button class="btn" type="submit" name="login">Login</button>
                </form>               
           </div>
           <div class="login-link"> <p>Create account?<a class="primary-text" href="index.php"> Sign UP Here</a></p>
            </div>
        </div>
    </section>
    <?php include("footer.php"); ?>
    
</body>
</html>

