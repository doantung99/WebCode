<?php
include("session.php");
$result = mysqli_query($db, "SELECT * FROM users WHERE Username= '" . $_SESSION['login_user'] . "'");

while($res = mysqli_fetch_array($result))
{
$fullname = $res['FullName'];
$username = $res['Username'];
$password = $res['Password'];
$email = $res['Email'];
}

if(isset($_POST['edit']))
{    
    $fullname=$_POST['fullname'];
    $password=$_POST['password'];
    $email=$_POST['email'];  
    $repassword=$_POST['repassword']; 
    
    // checking empty fields
    if(empty($fullname) || empty($password) || empty($email) || empty($repassword)) {            
        if(empty($fullname)) {
            echo "<font color='red'>FullName field is empty.</font><br/>";
        }
        
        if(empty($password)) {
            echo "<font color='red'>Password field is empty.</font><br/>";
        }

	 if(empty($repassword)) {
            echo "<font color='red'>re-Password field is empty.</font><br/>";
        }
	
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($db, "UPDATE users SET FullName='$fullname',Password='$password',Email='$email' WHERE Username='" . $_SESSION['login_user'] . "'");
        
    }
}

if(isset($_POST['reset']))
{
	header("Location: useredit.php");
}

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <title>User Page</title>
    <meta charset="utf-8">
</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10"><h1>User Infomation</h1></div>
	  <a href = "logout.php"
	   <button type="button"  class="btn btn-default btn-sm">	
          <span class="glyphicon glyphicon-log-out"></span> Log out
		</a>
    </div>

    <div class="row">
        <div class="col-sm-3"><!--left col-->


            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6>Upload a different photo...</h6>
        
			<form action="" method="post" enctype="multipart/form-data">
				<input type="file" class="text-center center-block file-upload" name="upload">
				<br>
				<input type="submit" class="btn btn-success" value="Upload" name="submit">
			</form>
            </div></hr><br>
<?php
		if(isset($_POST["submit"])){
			if(isset($_FILES['upload'])&&$_FILES['upload']["name"]!=null){
				
				$file_name=$_FILES['upload']["name"];
			
				$file_tmp =$_FILES['upload']['tmp_name'];
	
				$path ="upload/".$file_name;
				
				move_uploaded_file($file_tmp,$path);
				
				mysqli_set_charset($db,"UTF8");
		
				mysqli_query($db,"
					insert into upload(duongdan) values ('$path')
				");
				echo "Upload successful!";
				
				header("location: user.php");
			}
		}
	?>

            <div class="panel panel-default">
                <div class="panel-heading">Target Management <i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body"><a href="index.php">Home</a></div>
            </div>

        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" >Infomation</a></li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <form class="form" action="useredit.php" method="post">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="fullname"><h4>Full Name</h4></label>
                                <input type="text" class="form-control" name="fullname"  value="<?php echo $fullname;?> ">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="username"><h4>Username</h4></label>
                                <input type="text" class="form-control" name="username" value="<?php echo $username;?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="password"><h4>Password</h4></label>
                                <input type="password" class="form-control" name="password" value="<?php echo $password;?>" >
                            </div>
                        </div>

  			<div class="form-group">
                            <div class="col-xs-6">
                                <label for="repassword"><h4>Re-Password</h4></label>
                                <input type="password" class="form-control" name="repassword" >
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" value="<?php echo $email;?>" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit" name="edit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
				<button class="btn btn-lg" type="submit" name="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                        </div>
                    </form>

                    <hr>

                </div><!--/tab-pane-->

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->

<script>
$(document).ready(function() {


    
    var readURL = function(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();


            reader.onload = function (e) {

                $('.avatar').attr('src', e.target.result);

            }
    
            
reader.readAsDataURL(input.files[0]);

        }
    
}
    

    
$(".file-upload").on('change', function(){
        readURL(this);
    
});
});
</script>
