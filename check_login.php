<?php
		
        $conn = mysqli_connect("localhost", "root", "", "tie"); // change the database name according to database created
          
  
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        

        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $query = "SELECT * FROM login WHERE email = '$email' and password = '$password'";
		$result=mysqli_query($conn,$query);
          $num=mysqli_num_rows($result);
		 
		  
        if($num==0){
             echo "<script>alert('Invalid User/Password ! Try Again!!!');window.location.assign('index.html');</script>";
   
        } else{
           echo "<script>alert('Login  Successfully!!!');window.location.assign('sgpa.html');</script>";
        }
          mysqli_close($conn);
        
        
?>