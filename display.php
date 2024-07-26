<?php
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous"> 
</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary"><a href="insert.php" class="text-light">Add</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql="SELECT * FROM crud";
                $result =mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row["id"];
                        $name=$row["name"];
                        $email=$row["email"];
                        $password=$row["password"];
                
                        echo '<tr>
                    <th>'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$password.'</td>
                    <td>
                        <button class="btn btn-primary " ><a href="update.php?updateid='.$id.'" class="text-light">update</a></button>
                        <button class="btn btn-danger " ><a href="delete.php?deleteid='.$id.'"   class="text-light">delete</a></button>
                    </td>
                </tr>';
                    }
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>