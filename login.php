<?php
		
        $conn = mysqli_connect("localhost", "root", "", "tie"); 
          
  
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          

          
       
        $email =  $_REQUEST['email'];
		$password =  $_REQUEST['password'];
       
          
        
        $sql = "INSERT INTO login  VALUES ('','$email','$password','0')"; 
            
          
        if(mysqli_query($conn, $sql)){
           echo "<script>alert('Login  Successfully!!!');window.location.assign('sgpa.html');</script>";
			
  
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>