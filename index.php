
<?php
include("session.php");
$sql1 = "SELECT FullName FROM users WHERE Username = '" . $_SESSION['login_user'] . "'";
$result1 = mysqli_query($db,$sql1);
$row = mysqli_fetch_array($result1);

?>

<?php
$result = mysqli_query($db, "SELECT * FROM targets ORDER BY TargetID DESC"); // using mysqli_query instead
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
    <title>Homepage</title>
</head>
<body>
<div class="container">
<div class="bg-light jumbotron jumbotron-fluid">

<?php
 echo "<h4> <small> Hello,<a href=\"user.php\">".$row['FullName']."</a></small>";
?>
<div class="modify">
<a  href = "logout.php" 
	   <button type="button"  class="btn-primary btn-default btn-lg">	
          <span class="glyphicon glyphicon-log-out"></span> Log out
</a> 
<div>
</h4><h1><br>Target Management Program</small></h1>

</div>
<nav class="navbar bg-light navbar-expand-sm">

<div class = "nav-item">
    <a href="add.html"><button class="button">Add New Target</button></a> </div>
 

</nav>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    <br/>
    <div class="row">
        <div class="col-12 col-md-10 col-lg-6">
            <form action="search.php" method="post" class="card card-sm">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-search h8 text-body"></i>
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input class="form-control form-control-lg form-control-borderless" type="search" name="search" placeholder="Search ip...">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" type="submit" value="Submit">Search</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
        </div>
        <!--end of col-->
    </div>
</div>

<style>
    .form-control-borderless {
    border: solid thin;
    width: 130px;
    -moz-transition: width 0.4s ease-in-out;
    -webkit-transition:  width 0.4s ease-in-out;
    -o-transition:  width 0.4s ease-in-out;
    transition:  width 0.4s ease-in-out;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: solid thin;
    outline: none;
    box-shadow: none;
    width: 100%;
}

</style>

    <table width='80%' border=5 class="table">
	<thead>
        <tr bgcolor='#CCCCCC'>
            <td>IP</td>
            <td>Domain</td>
            <td>Company Name</td>
            <td>Update</td>
        </tr>
	</thead>
	<tbody>
        <?php 
        while($res = mysqli_fetch_array($result)) { 
            echo "<tr>";
            echo "<td>".$res['IP']."</td>";
            echo "<td>".$res['Domain']."</td>";
            echo "<td>".$res['CompanyName']."</td>";    
            echo "<td><a href=\"edit.php?id=$res[TargetID]\">Edit</a> | <a href=\"delete.php?id=$res[TargetID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
	</tbody>
    </table>
</div>
</body>
</html>
<style>
.button {
    background-color: #008CBA; /* Green */
    border: none;
    color: white;
    padding: 7px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

<style>
.modify{
	float:right;
}
</style>
