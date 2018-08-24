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
        </button>
    </div>

    <div class="row">
        <div class="col-sm-3"><!--left col-->

            <div class="text-center">

                <img src="/upload/aaa.jpg" class="avatar img-circle img-thumbnail" alt="avatar">

            </div></hr><br> 

            <div class="panel panel-default">
                <div class="panel-heading">Target Management <i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body"><a href="index.php">Home</a></div>
            </div>

        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Infomation</a></li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <form class="form" action="useredit.php" method="post" >
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="fullname"><h4>Full Name</h4></label>
                                <input type="text" class="form-control" name="fullname"  value="<?php echo $fullname;?> "disabled>
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
                                <input type="password" class="form-control" name="password" value="<?php echo $password;?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" value="<?php echo $email;?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i ></i> Edit</button>
                            </div>
                        </div>
                    </form>

                    <hr>

                </div><!--/tab-pane-->

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->
