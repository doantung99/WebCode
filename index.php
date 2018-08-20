
<?php
include("session.php");
 
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
<a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
    <a href="add.html"><button class="button">Add New Target</button></a><br/><br/>
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
        border: none;
    }

    .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }
</style>
    <table width='80%' border=5>
        <tr bgcolor='#CCCCCC'>
            <td>IP</td>
            <td>Domain</td>
            <td>Company Name</td>
            <td>Update</td>
        </tr>
        <?php 
        while($res = mysqli_fetch_array($result)) { 
            echo "<tr>";
            echo "<td>".$res['IP']."</td>";
            echo "<td>".$res['Domain']."</td>";
            echo "<td>".$res['CompanyName']."</td>";    
            echo "<td><a href=\"edit.php?id=$res[TargetID]\">Edit</a> | <a href=\"delete.php?id=$res[TargetID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
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



