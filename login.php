
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Login</title>
        <link href="style.css" rel="stylesheet" />
  <!-- Icons CSS-->
  <script src="https://kit.fontawesome.com/7b6e30e3ae.js" crossorigin="anonymous"></script>
    </head>
    <body style="background:black;">
        <div id="layoutAuthentication"> 
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-primary"><h3 class="text-center font-weight-light my-4">Admin Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="logincheck.php"/>
                                            <div class="form-group"><label class="small mb-1" for="inputusername">Username</label>
											<input class="form-control py-4" id="inputusername" type="text" placeholder="Enter Username" name="user1"   /></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
											<input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password"  name="pass1"  /></div>
                                           <div class="form-group">
                                             <!--   <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
												<label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div> 
												-->
						 
											<?php 
												if(@$_GET['Empty']==true)
												{
											?>
												<div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
											<?php
												}
											?>
						 
						 
											<?php 
												if(@$_GET['Invalid']==true)
												{
											?>
												<div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
											<?php
												}
											?>
																		
																	</div> 
 											<input type="submit" class="btn btn-primary" name="submit"  value="Login"></div>
                                        </form>
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
	 
				
      </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> 
    </body>
</html>

