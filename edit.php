<?php include("header.php"); ?>
<?php

$cont= new mysqli("localhost","root","","project2");

if(isset($_GET['id']) && !empty($_GET['id'])){
    $sql = "SELECT * FROM upload WHERE id=" . $_GET['id'];
    $res=mysqli_query($cont,$sql);
    $x=mysqli_fetch_assoc($res);
} else {
    header("Location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SafeBase | Edit</title>
</head>
<body>
    

    <nav id="navbar">
        <div class="container">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a  class="current" href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li class="logout"><?php echo '<a href="logout.php?logout">Logout</a>'; ?> </li>
                
            </ul>
        </div>
    </nav>

    <div class="edit-info">
        <div class="container2">
            <div class="form">
                <div class="head-form">
                    <h2>Edit File</h2>
                </div>
 
                <?php
                if(isset($_POST['submit'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $update="UPDATE upload set name='$name' WHERE id='$id'";
                    mysqli_query($cont,$update);
                    $status="Update successfully";

                }
                else {

                
                ?>
                <div>
                <form method="POST" action="">
                    <div>
                        <label for="id">ID</label>
                        <input type="text" id="id" name="id" value="<?php echo $x['id']; ?>" readonly>
                    </div>
                    <div><label for="name">Name</label>
                        <input type="text" id="name" name="name" value="<?php echo $x['name']; ?>">
                    </div>
                    <div><label for="location">Location</label>
                        <input type="text" id="location" name="location" value="<?php echo $x['location']; ?>" readonly>
                    </div>
                        <button class="btn" type="submit" name="submit">Done</button>
                </form> 
                </div> 
                <?php } ?>            
           </div>
    </div>

    </div>
</body>
</html>

<?php include("footer.php"); ?>
