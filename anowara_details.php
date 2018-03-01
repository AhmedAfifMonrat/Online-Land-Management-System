<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$server="localhost";
$uname="root";
$pass="";
$database="landmanagement";
$table_name="area_record";
$table_name1="leaseholder_record";

$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT area_record.sub_district,area_record.mouja,count(leaseholder_record.name) as lease_holder from area_record
inner join leaseholder_record
on area_record.sub_district=leaseholder_record.sub_district
 where area_record.sub_district='আনোয়ারা'";
$result=mysql_query($sql,$con);
echo "মৌজা :"."<br />";
  while($row=mysql_fetch_array($result))
 {
 if($row['lease_holder']>0)
 {
 echo "<a style='cursor:pointer;text-decoration:underline;color:blue' onclick='show_lease(\"".$row['mouja']."\")'>";
 echo $row['mouja'];
 echo " (".$row['lease_holder'].")";
 echo "</a>";
 }
 else
 	 echo "<p style='margin-top:10px;margin-left:10px;color:red;font-size:20px'>No Record has been listed.</p>";
 }
 ?>
</body>
</html>
