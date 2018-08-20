<html>
<head>
    <title>Add Target</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $ip = $_POST['ip'];
    $domain = $_POST['domain'];
    $name = $_POST['name'];
        
    // checking empty fields
    if(empty($name) || empty($ip) || empty($domain)) {                
        if(empty($name)) {
            echo "<font color='red'>Company Name field is empty.</font><br/>";
        }
        
        if(empty($ip)) {
            echo "<font color='red'>IP field is empty.</font><br/>";
        }
        
        if(empty($domain)) {
            echo "<font color='red'>Domain field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($db, "INSERT INTO targets(TargetID,IP,Domain,CompanyName) VALUES('','$ip','$domain','$name')");
        
        //display success message
        echo "<font color='green'>Target added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>
