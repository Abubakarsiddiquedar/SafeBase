<?php
$cont=new mysqli("localhost","root","","project2");
$sql="SELECT * FROM upload";
$result=mysqli_query($cont,$sql);

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SafeBase |view</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
    function deleteItem(id){
        if(confirm("are you sure ?")){
            window.location.href='delete.php?id='+id;
        }
        return false;
    }
    
    </script>
</head>
<body>
    
    <section id="view">
        <div class="container">
            <table>
                <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Type</th>
                    <th>Location</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                <?php
                    while($x=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $x['id'] ?></td>
                    <td><?php echo $x['name'] ?></td>
                    <td><?php echo $x['size'] ?></td>
                    <td><?php echo $x['type'] ?></td>
                    <td><a href="<?php echo $x['location']?>"><i class="far fa-eye"></i></a></td>
                    <td><a href="#" onclick='deleteItem(<?php echo $x['id'] ?>)'><i class="fas fa-trash-alt"></i></a></td>
                    <td><a href="edit.php?id="<?php echo $x['id'] ?> ><i class="fas fa-edit"></i></td>
            </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </section>
    
</body>
</html>

