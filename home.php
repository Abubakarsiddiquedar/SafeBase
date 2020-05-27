<?php 

session_start();
if(isset($_SESSION['User']))
{

    include("header.php");  
        

include("home-content.php");

 include("view.php"); 

  include("footer.php");

}
else{
    header("location:index.php");
}


 
?>