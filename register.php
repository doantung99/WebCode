<?php
   include("config.php");
   if (isset($_POST['register'])) {
    $fullname      = addslashes($_POST['fullname']);
    $username   = addslashes($_POST['username']);
    $password   = addslashes($_POST['password']);
    $repassword      = addslashes($_POST['repassword']);
    $email      = addslashes($_POST['email']);
    
    
    $sql = "SELECT * FROM Users WHERE Username = '$username' OR Email = '$email'";
      
    $result = mysqli_query($db, $sql);
      
    if (mysqli_num_rows($result) > 0)
    {
        echo '<script language="javascript">alert("Wrong input"); window.location="register.php";</script>';
          
        die ();
    }
    else {
        $sql = "INSERT INTO Users (UserID,Fullname, Username, Password, Email) VALUES ('$id','$fullname','$username','$password','$email')";
          
        if (mysqli_query($db, $sql)){
            echo '<script language="javascript">alert("Register Succesful!!!You will be redirected to Login Page..."); window.location="login.php";</script>';
        }
        else {
            echo '<script language="javascript">alert("Something wrong!!!"); window.location="register.php";</script>';
        }
    }
   }
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->


<body>
   
 <div id="login">

<div class="container">

    <h1 class="well">Registration Form</h1>

	<div class="col-lg-12 well">

	<div class="row">

				<form id="register-form" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  					<div class="col-sm-12">
	
							<div class="form-group">

								<label>Full Name</label>

								<input type="text" placeholder="Enter Your Name Here.." name="fullname" id="fullname" class="form-control">

							
							</div>

							<div class="form-group">

								<label>Username</label>

								<input type="text" placeholder="Enter Username Here.." name="username" id="username" class="form-control">

								
							</div>
						
					<div class="form-group">

						<label>Password</label>

						<input type="password" placeholder="Enter Password Here.." name="password" id="password" class="form-control">
										
						</div>
						
					<div class="form-group">

						<label>Re-Password</label>

							<input type="password" placeholder="Re-enter Password Here.." name="repassword" id="repassword" class="form-control">
												</div>
					<div class="form-group">

						<label>Email Address</label>

						<input type="text" placeholder="Enter Email Address Here.." name="email" id="email" class="form-control">

						
						</div>	
				<button type="submit" class="btn btn-lg btn-info" name="register" >Register</button>
					<p><br>Already have an account? <a href="login.php">Log in</a>.</p>
					
									</form> 

				</div>

	</div>

	</div>
</div>
</body>