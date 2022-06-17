  <?php
 
            $username =  $_POST['username'];
            $email = $_POST['email'];
            $phone =  $_POST['phone'];
            $password = $_POST['password'];
            $dob = $_POST['dob'];

            $con = new mysqli('localhost','root','','house&cook');
            
            if($con->connect_error){
                die("Connection failed!".$con->connect_error);
            }else{
              $query = $con->prepare("insert into user(username,email,phone,password,dob)
              values (?,?,?,?,?)");
              $query->bind_param("ssiss",$username,$email,$phone,$password,$dob);
              $query->execute();
              echo "Success Signing Up!";
              echo '<meta http-equiv="refresh" content="0;url=http://localhost/House&Cook%20Project/Choosecategory.html" />';
              $query->close();
              $con->close();
            }
        ?>