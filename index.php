 <?php
session_start();

include("conn.php");

if(!isset($_SESSION['user'])){	
header('location:login.php');
}
// else{  
?>
		
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Admin Dashboard - Login</title> 
        <link href="style.css" rel="stylesheet" />
  <!-- Icons CSS-->
  <script src="https://kit.fontawesome.com/7b6e30e3ae.js" crossorigin="anonymous"></script>
    </head>
    <body style="background:black;">
 <style>
h6{
	color:white;
}
#header{
	margin: 20px 22px 35px 27px;
    padding: 12px;
    text-align: end;
}
#dashboard{
	color:white;
}


.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  margin-left:25px;
  margin-bottom:30px;
  margin-top:10px;
  perspective: 1000px;
}

.flip-card-inner {
 /* position: relative; 
  width: 100%; */
  height: 100%;
  margin:10px;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow:0px 4px 21px 0px rgba(255, 255, 255, 0.94);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color:white;
  color: black;
}

.flip-card-back {
  background-color:black;
  color: white;
  transform: rotateY(180deg);
}
</style>
 

 <!--Start sidebar-wrapper-->
  
	<div id="header">  
       <h6 class="side-user-name">Hi !
	  <?php echo $_SESSION['user']; ?> </h6>
     <a href="logout.php" >Logout</a>
      </div>
   <!--End sidebar-wrapper-->

   
  		<div id="dashboard" class="container-fluid">
		<h2 style="text-align:center;">GADGETS</h2>
		</div>
		<br><br><br>
	 
   <div class="container-fluid">
    <div class="card-deck row"> 
       
		
		<div class="flip-card ">
		<div class="flip-card-inner">
		<div class="flip-card-back">
         <div class="mb-4">
            <img class="card-img-top img-fluid" src="hp-laptop.png" alt="Avatar" style="width:700px;height:300px;">
			</div>
		</div>
		
		<div class="flip-card-front">
            <div class="card-body">
			<br>
                <h4 class="card-title">HP Laptop</h4>
				<br>
				<h5 class="card-head">$300/-</h5>
				<br>
                <p class="card-text">Durable and reliable laptops, New/Refurbished laptops, A most important part of transcription is having a reliable laptop</p>
            </div>
        
		</div>
		</div>
    </div>
	
		<div class="flip-card ">
		<div class="flip-card-inner">
		<div class="flip-card-back">
         <div class="mb-4">
            <img class="card-img-top img-fluid" src="hp-laptop.png" alt="Avatar" style="width:700px;height:300px;">
			</div>
		</div>
		
		<div class="flip-card-front">
            <div class="card-body">
			<br>
                <h4 class="card-title">HP Laptop</h4>
				<br>
				<h5 class="card-head">$300/-</h5>
				<br>
                <p class="card-text">Durable and reliable laptops, New/Refurbished laptops, A most important part of transcription is having a reliable laptop</p>
            </div>
        
		</div>
		</div>
    </div>
		<div class="flip-card ">
		<div class="flip-card-inner">
		<div class="flip-card-back">
         <div class="mb-4">
            <img class="card-img-top img-fluid" src="hp-laptop.png" alt="Avatar" style="width:700px;height:300px;">
			</div>
		</div>
		
		<div class="flip-card-front">
            <div class="card-body">
			<br>
                <h4 class="card-title">HP Laptop</h4>
				<br>
				<h5 class="card-head">$300/-</h5>
				<br>
                <p class="card-text">Durable and reliable laptops, New/Refurbished laptops, A most important part of transcription is having a reliable laptop</p>
            </div>
        
		</div>
		</div>
    </div>
	
	
		<div class="flip-card ">
		<div class="flip-card-inner">
		<div class="flip-card-back">
         <div class="mb-4">
            <img class="card-img-top img-fluid" src="hp-laptop.png" alt="Avatar" style="width:700px;height:300px;">
			</div>
		</div>
		
		<div class="flip-card-front">
            <div class="card-body">
			<br>
                <h4 class="card-title">HP Laptop</h4>
				<br>
				<h5 class="card-head">$300/-</h5>
				<br>
                <p class="card-text">Durable and reliable laptops, New/Refurbished laptops, A most important part of transcription is having a reliable laptop</p>
            </div>
        
		</div>
		</div>
    </div>
	
</div>
    
</div>	
	

	<br><br><br>
   <div class="container-fluid">
    <div class="card-deck row"> 
       
		
		<div class="flip-card ">
		<div class="flip-card-inner">
		<div class="flip-card-back">
         <div class="mb-4">
            <img class="card-img-top img-fluid" src="hp-laptop.png" alt="Avatar" style="width:700px;height:300px;">
			</div>
		</div>
		
		<div class="flip-card-front">
            <div class="card-body">
			<br>
                <h4 class="card-title">HP Laptop</h4>
				<br>
				<h5 class="card-head">$300/-</h5>
				<br>
                <p class="card-text">Durable and reliable laptops, New/Refurbished laptops, A most important part of transcription is having a reliable laptop</p>
            </div>
        
		</div>
		</div>
    </div>
	
		<div class="flip-card ">
		<div class="flip-card-inner">
		<div class="flip-card-back">
         <div class="mb-4">
            <img class="card-img-top img-fluid" src="hp-laptop.png" alt="Avatar" style="width:700px;height:300px;">
			</div>
		</div>
		
		<div class="flip-card-front">
            <div class="card-body">
			<br>
                <h4 class="card-title">HP Laptop</h4>
				<br>
				<h5 class="card-head">$300/-</h5>
				<br>
                <p class="card-text">Durable and reliable laptops, New/Refurbished laptops, A most important part of transcription is having a reliable laptop</p>
            </div>
        
		</div>
		</div>
    </div>
		<div class="flip-card ">
		<div class="flip-card-inner">
		<div class="flip-card-back">
         <div class="mb-4">
            <img class="card-img-top img-fluid" src="hp-laptop.png" alt="Avatar" style="width:700px;height:300px;">
			</div>
		</div>
		
		<div class="flip-card-front">
            <div class="card-body">
			<br>
                <h4 class="card-title">HP Laptop</h4>
				<br>
				<h5 class="card-head">$300/-</h5>
				<br>
                <p class="card-text">Durable and reliable laptops, New/Refurbished laptops, A most important part of transcription is having a reliable laptop</p>
            </div>
        
		</div>
		</div>
    </div>
	
	
		<div class="flip-card ">
		<div class="flip-card-inner">
		<div class="flip-card-back">
         <div class="mb-4">
            <img class="card-img-top img-fluid" src="hp-laptop.png" alt="Avatar" style="width:700px;height:300px;">
			</div>
		</div>
		
		<div class="flip-card-front">
            <div class="card-body">
			<br>
                <h4 class="card-title">HP Laptop</h4>
				<br>
				<h5 class="card-head">$300/-</h5>
				<br>
                <p class="card-text">Durable and reliable laptops, New/Refurbished laptops, A most important part of transcription is having a reliable laptop</p>
            </div>
        
		</div>
		</div>
    </div>
	
</div>
    
</div>	
	
		
		
		
	<!--Start footer--> 
                <footer class="py-4 bg-black mt-auto text-center">
                    <div class="container-fluid"> 
					
			 <hr style="background:blue; padding:1px;">
                            <div class="text-white">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Career</a>
                                &middot;
                                <a href="#">Sitemap</a>
                                &middot;
                                <a href="#">Blog</a>
                                &middot;
                                <a href="#">About</a>
                                &middot;
                                <a href="#">Contact</a> 
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                                &middot;
                            </div> 
                    </div>
                </footer> 
  
	<!--End footer-->

</body>
</html>
