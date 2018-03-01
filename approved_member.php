<?php
$rs=$_POST['rs'];
$server="localhost";
$uname="root";
$pass="";
$database="landmanagement";
$table_name="leaseholder_record";


$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT * from $table_name where r_s_rights='$rs'";
$result=mysql_query($sql,$con);
 while($row = mysql_fetch_array($result)) {
            $name=$row['name'];
			$status=$row['status'];
			}
			
			
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="js/java.js"></script>
</head>

<body>
<?php echo "<p style='padding-bottom:10px;'>".$name."</p>"; ?>
<ol>
<?php
echo "<li style='color:#0000FF; cursor:pointer; text-decoration:underline' onclick='show_letter(\"".$rs."\")'>1. Lease Letter</li>";
?>
<?php if($status!='approved')
{
echo "<li style='color:#0000FF; cursor:pointer; text-decoration:underline;' onclick='pay_accept(\"".$rs."\")'>2. Payment Accepted</li>";
}else
echo "<li style='color:#0000FF; cursor:pointer; text-decoration:underline' onclick='rent_reciepts(\"".$rs."\")'>2. Land Rent Reciepts</li>";
?>
</ol>
</body>
</html>
