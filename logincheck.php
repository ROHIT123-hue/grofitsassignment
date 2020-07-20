<?php

session_start();
include("conn.php");
/*

if(isset($_POST['submit'])){
	
	$username = $_POST['user1'];
	$password = $_POST['pass1'];
	
	$sql = " select * from tbl_admin where admin_username = '$username' and admin_password = '$password' ";
	
	$query = mysqli_query($conn,$sql);
	
	$row = mysqli_num_rows($query);
		
		if($row == 1){
			
			echo "Login Successfully";
			// $_SESSION['user1'] = $username;
		//	header('location:admindashboard.php');
			
	}else{
		  echo  "Your Login Name or Password is invalid";
			// header('location:login.php');
		
	}
	
}


*/
 
    if(isset($_POST['submit']))
    {
       if(empty($_POST['user1']) || empty($_POST['pass1']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       { 
            $query = "select * from tbl_admin where admin_username = '".$_POST['user1']."' and admin_password = '".$_POST['pass1']."'";
            $result=mysqli_query($conn,$query);
 
            if(mysqli_fetch_assoc($result))
            {
				// echo "working";
				
                $_SESSION['user']=$_POST['user1'];
                
				header("location:index.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }



?>