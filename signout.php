<?php
session_start();
session_unset();
session_destroy();
$_SESSION['user']="loged out";
?>
<?php
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
mysql_select_db($database,$con);

$sql="UPDATE $table_name SET status='inactive',current_session=''";
mysql_query($sql,$con);
header("location:admin.php"); 
?>

