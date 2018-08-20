<?php
include("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $ip=$_POST['ip'];
    $domain=$_POST['domain'];
    $name=$_POST['name'];    
    
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
    } else {    
        //updating the table
        $result = mysqli_query($db, "UPDATE targets SET CompanyName='$name',IP='$ip',Domain='$domain' WHERE TargetID=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM targets WHERE TargetID=$id");
 
while($res = mysqli_fetch_array($result))
{
    $ip = $res['IP'];
    $domain = $res['Domain'];
    $name = $res['CompanyName'];
}
?>
<html>
<head>    
    <title>Edit Target</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>IP</td>
                <td><input type="text" name="ip" value="<?php echo $ip;?>"></td>
            </tr>
            <tr> 
                <td>Domain</td>
                <td><input type="text" name="domain" value="<?php echo $domain;?>"></td>
            </tr>
            <tr> 
                <td>Company Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>