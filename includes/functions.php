<?php
function displayUsers(){
require 'config.php';
$result=mysqli_query($con,"SELECT * FROM admin ORDER BY id DESC LIMIT 3");
foreach ($result as $key => $data) 
{
    # code...
    echo '<p>hello , we have this <b>'.$data['username'].'</b> as a user and password: <b>'.$data['password'].'</b> </p>';
}



}


?>