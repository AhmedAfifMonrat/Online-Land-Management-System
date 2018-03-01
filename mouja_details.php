<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
th
{
text-align:left;
padding-left:20px;
background-color:#FF3300;
width:300px;
color:#FFFFFF; 
}
td
{
padding-left:20px;
background-color:#66CCCC;
width:300px;
font-size:18px;
font-family:"Myriad Pro";
}
button
{
width:100px;
height:30px;
background-color:#006600;
font-size:16px;
color:#FFFFFF;
font-weight:700;
cursor:pointer;

}
#a
{
background-color:#FFFFFF;
}
</style>
</head>

<body>
<?php
$server="localhost";
$uname="root";
$pass="";
$database="landmanagement";
$table_name="leaseholder_record";
$mouja=$_POST['mouja'];

$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT * from $table_name where mouja='$mouja'";
$result=mysql_query($sql,$con);
 if(mysql_num_rows($result) > 0)
	  {
  echo "<table border='0'>";
  echo "<tr>";
  echo "<th>"."নাম"."</th>";
  echo "<th>"."উপজেলা"."</th>";
  echo "<th>"."জমির পরিমান"."</th>";
  echo "<th id='a'>";
  echo "</th>";
  echo "</tr>";
  while($row = mysql_fetch_array($result)) {
          echo "<tr>";
		    echo "<td>".$row['name']."</td>";
			echo "<td>".$row['sub_district']."</td>";
			echo "<td>".$row['land_size']." বর্গফুট "."</td>";
			
			//echo "<td style='background-color:#ffffff;cursor:pointer'>"."<img src='images/approved.jpg' title='Approved' onclick='get_member(\"".$row['r_s_rights']."\")' />"."</td>";
			echo "<td id='a'>"."<button onclick='send_rs(this.value)' value=\"".$row['r_s_rights']."\">বিস্তারিত </button>"."</td>";
			echo "</tr>";
			
			}
			  
  echo "</table>";
  }
?>
</body>
</html>
