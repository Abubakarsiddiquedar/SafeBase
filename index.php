<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SafeBase | Sign Up</title>
</head>
<body>
    <?php include("header.php"); ?>
    
    <section class="login-bg">
        <div class="container2">
            <div class="form">
                <div class="head-form">
                    <h2>Sign Up</h2>
                    <p class="secondary-text">It's Free and Easy to use</p>
                </div>
                <form action="add3.php" method="POST">
                    <div>
                        <label for="fname">Firs Name</label>
                        <input type="text" id="fname" name="fname">
                   </div>
                   <div>
                       <label for="lname">Last Name</label>
                       <input type="text" id="lname" name="lname">
                   </div>
                   <div>
                       <label for="username">Username</label>
                       <input type="text" id="username" name="username" required>
                   </div>
                   <div>
                       <label for="email">Email</label>
                       <input type="email" name="email" id="email">
                   </div>
                   <div><label for="password">Password</label>
                   <input type="password" id="password" name="password" required>
                   </div>
                   <button class="btn" type="submit" name="create">Creat Account</button>
                </form>
                <p class="condition">By clicking the Create Account button you agree to our<a href="#"> Terms & Conditions</a> and <a href="#">Privacy Policy</a></p>

            </div>
           <div class="login-link"> <p>Already have an acoount?<a class="primary-text" href="login.php"> Login Here</a></p>
           </div>
        </div>
    </section>
    <?php include("footer.php"); ?>
    
</body>
</html>

