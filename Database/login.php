<?php
 

 $con = mysqli_connect('localhost','root','','house&cook');
 
 if(!empty($_POST['submit'])){
    $username =  $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);
    
    if($count > 0){
        echo "Login Successful";
        echo '<meta http-equiv="refresh" content="2;url=http://localhost/House&Cook%20Project/Choosecategory.html" />';
    }else{
        echo "Login Not Successful";
        echo '<meta http-equiv="refresh" content="2;url=http://localhost/House&Cook%20Project/login.html" />';
    }
 }
 mysqli_close($con);
?>