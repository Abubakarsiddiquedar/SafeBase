<?php

ob_start();

$cont=new mysqli("localhost","root","","project2");
if(isset($_GET['id']) && !empty($_GET['id'])){
    
    $selsql="SELECT location FROM upload where id=" .$_GET['id'];
    $result=mysqli_query($cont,$selsql);
    $x=mysqli_fetch_assoc($result);
    
    if(unlink($x['location'])){
        
        $delsql="DELETE FROM upload where id=" .$_GET['id'];
        if(mysqli_query($cont,$delsql)){
            
            header("location: home.php");
        }
    }
}
?>