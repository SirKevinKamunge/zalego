<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
// select logged in users detail


?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Hello</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/index.css" type="text/css"/>
</head>
<body>

<!-- Navigation Bar-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <span
                            class="glyphicon glyphicon-user"></span>&nbsp;Logged
                        in:
                        &nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>




<div class="container">
    <!-- Jumbotron-->
    
    <</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


<div class="main">
  
  
  <div class="content">
    <div class="innercontent">
      
      <div class="rightpannel">
      <div>
       <h2>Registered users</h2>
      
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
         </tr>
         <tr>
           <td height="26">
            
             </td>
         </tr>
         <tr>
           <td height="25" bgcolor="#1CB5F1"><span class="style3">users List</span></td>
         </tr>
         <tr>
           <td>
           <table width="100%" border="1" bordercolor="#1CB5F1" >
<tr>
<th height="32" bgcolor="#1CB5F1"><div align="left" class="style13 style7 style8 style12">first name</div></th>
<th bgcolor="#1CB5F1"><div align="left" class="style7 style8 style12">lastname</div></th>
<th bgcolor="#1CB5F1"><div align="left" class="style7 style8 style12">username</div></th>
<th height="32" bgcolor="#1CB5F1"><div align="left" class="style7 style8 style12">password</div></th>
</tr>
<?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("users", $con);
// Specify the query to execute
$sql = "select * from users";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$username=$row['username'];
$password=$row['password'];

?>
<tr>
<td><div align="left" class="style7 style8 style12"><?php echo $firstname;?></div></td>
<td><div align="left" class="style7 style8 style12"><?php echo $lastname;?></div></td>
<td><div align="left" class="style7 style8 style12"><?php echo $username;?></div></td>
<td><div align="left" class="style7 style8 style12"><?php echo $password;?></div></td>

</tr>
<?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
<tr>
<td colspan="5"><div align="left" class="style7 style8 style12"><?php echo "Total ".$records." Records"; ?> </div></td>
</tr>
<?php
// Close the connection
mysql_close($con);
?>
</table>
           </td>
         </tr>
       </table>
      
      </div>
        
      </div>
    </div>
  </div>
  <div>
   
  </div>
</div>

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>

</body>
</html>
