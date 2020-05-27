<?php
$cont=new mysqli("localhost","root","","project2");


if(isset($_POST['upload'])){ 
    $name=$_FILES['file']['name'];
    $size=$_FILES['file']['size'];
    $type=$_FILES['file']['type'];
    $tmp_name=$_FILES['file']['tmp_name'];
    
    #echo $tmp_name;
    if(isset($name) && !empty($name)){
        
        $location="files/";
        if(move_uploaded_file($tmp_name,$location.$name)){
            $query="INSERT INTO upload (name, size ,type, location) VALUES ('$name','$size','$type','$location$name')";
            $result=mysqli_query($cont,$query);
                $msg="Uploaded successfully";
        }
      else {  $msg="failed to upload file";
    }
}
    else
    { 
        $msg="please select the file";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SafeBase | Home</title>
</head>
<body>
    
    <nav id="navbar">
        <div class="container">
            <ul>
                <li><a class="current" href="Home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li class="logout"><?php echo '<a href="logout.php?logout">Logout</a>'; ?> </li>
                
            </ul>
        </div>
    </nav>
    
    <section id="upload">
        <div class="container2">
            <div class="form">
                <div class="head-form">
                    <h1>Welcome <span class="secondary-text"><?php echo $_SESSION['User']; ?></span></h1>
                    <h2>Upload You'r <span class="primary-text">File</span> Here</h2>
                </div>
                <form method="POST" enctype="multipart/form-data">
                    <label for="file">File Input</label>
                    <input type="file" id="file" name="file" class="btn">
                    <button name="upload" class="btn">Upload File</button>
                </form>
                <div class="error">
                    <?php if(isset($msg)){
                        echo $msg;
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>


