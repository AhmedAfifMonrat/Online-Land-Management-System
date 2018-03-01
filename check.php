
<?php
session_start();
if($_SESSION['user']=="loged in")
header("location:adminpanel.php");
else if($_SESSION['user']!="loged in")
$_SESSION['user']=="loged out";
?>
<?php
if($_SESSION['user']=="loged out")
{
require_once("admin.php");
}
if(isset($_POST['submit']))
{
$username=$_POST['usname'];
$password=$_POST['pass'];
$server="localhost";
$uname="root";
$pass="";
$database="landmanagement";
$table_name="admin";
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
else
{
mysql_select_db($database,$con);
$sql="SELECT * FROM $table_name";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
$usname[]=$row['username'];
$pass[]=$row['password'];
$status[]=$row['status'];
}
for($i=0;$i<4;$i++)
{
if($usname[$i]==$username && $pass[$i]==$password && $status[$i]=='inactive' )
{
$ses_id=session_id();
$_SESSION['user']="loged in";
$sql="UPDATE $table_name SET status='active',current_session='$ses_id' where username='$username'";
mysql_query($sql,$con);
header('location:adminpanel.php');
}
else
{
header('location:admin1.php');
}
}

}
}
?>
