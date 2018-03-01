<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['rs']))
{
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
			$dis=$row['district'];
			$sd=$row['sub_district'];
			$po=$row['post_office'];
			$vill=$row['village'];
			$mouja=$row['mouja'];
			$land=$row['land_size'];
			$r_s_rights=$row['r_s_rights'];
			$b_s_rights=$row['b_s_rights'];
			$r_s_ideograph=$row['r_s_ideograph'];
			$b_s_ideograph=$row['b_s_ideograph'];
			}
			
			 echo "<table border='0' style='font-size:18px'>";
			  echo "<tr>";
			  echo "<td>"."আর.এস খতিয়ান নম্বর:"."</td>";
  		     echo "<td>".$r_s_rights."</td>";
			  echo "</tr>";
			   echo "<tr>";
			 echo "<td>"."নাম:"."</td>";
			  echo "<td id='a'>".$name."</td>";
			  echo "</tr>";
			 
			 echo "<tr>";
			 echo "<td>"."জেলা:"."</td>";
  		     echo "<td>".$dis."</td>";
			 echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."উপজেলা:"."</td>";
  		     echo "<td>".$sd."</td>";
			 	 echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."ডাকঘর:"."</td>";
  		     echo "<td>".$po."</td>";
			 	 echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."গ্রাম:"."</td>";
  		     echo "<td>".$vill."</td>";
			  echo "</tr>";
			 
			 
			 echo "<tr>";
			 echo "<td>"."জমির পরিমান:"."</td>";
  		     echo "<td>".$land."</td>";
			  echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."মৌজা:"."</td>";
  		     echo "<td>".$mouja."</td>";
			  echo "</tr>";
			
			 echo "<tr>";
			 echo "<td>"."আর.এস দাগ নম্বর:"."</td>";
  		     echo "<td>".$b_s_rights."</td>";
			  echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."বি.এস খতিয়ান নম্বর:"."</td>";
  		     echo "<td>".$r_s_ideograph."</td>";
			  echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."বি.এস দাগ নম্বর:"."</td>";
			 echo "<td>".$b_s_ideograph."</td>";
			 echo "</tr>";
			 
			
			
			
			 
             
			 echo "</table>";
			 }
			 else if(isset($_POST['bs'])) 
			 {
$bs=$_POST['bs'];
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
$sql="SELECT * from $table_name where b_s_ideograph='$bs'";
$result=mysql_query($sql,$con);
 while($row = mysql_fetch_array($result)) {
            
			$name=$row['name'];
			$dis=$row['district'];
			$sd=$row['sub_district'];
			$po=$row['post_office'];
			$vill=$row['village'];
			$mouja=$row['mouja'];
			$land=$row['land_size'];
			$r_s_rights=$row['r_s_rights'];
			$b_s_rights=$row['b_s_rights'];
			$r_s_ideograph=$row['r_s_ideograph'];
			$b_s_ideograph=$row['b_s_ideograph'];
			}
			
			 echo "<table border='0' style='font-size:18px'>";
			  echo "<tr>";
			  echo "<td>"."আর.এস খতিয়ান নম্বর:"."</td>";
  		     echo "<td>"." "."</td>";
			  echo "</tr>";
			   echo "<tr>";
			 echo "<td>"."নাম:"."</td>";
			  echo "<td id='a'>".$name."</td>";
			  echo "</tr>";
			 
			 echo "<tr>";
			 echo "<td>"."জেলা:"."</td>";
  		     echo "<td>".$dis."</td>";
			 echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."উপজেলা:"."</td>";
  		     echo "<td>".$sd."</td>";
			 	 echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."ডাকঘর:"."</td>";
  		     echo "<td>".$po."</td>";
			 	 echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."গ্রাম:"."</td>";
  		     echo "<td>".$vill."</td>";
			  echo "</tr>";
			 
			 
			 echo "<tr>";
			 echo "<td>"."জমির পরিমান:"."</td>";
  		     echo "<td>".$land."</td>";
			  echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."মৌজা:"."</td>";
  		     echo "<td>".$mouja."</td>";
			  echo "</tr>";
			
			 echo "<tr>";
			 echo "<td>"."আর.এস দাগ নম্বর:"."</td>";
  		     echo "<td>".$b_s_rights."</td>";
			  echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."বি.এস খতিয়ান নম্বর:"."</td>";
  		     echo "<td>".$r_s_ideograph."</td>";
			  echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."বি.এস দাগ নম্বর:"."</td>";
			 echo "<td>".$b_s_ideograph."</td>";
			 echo "</tr>";
			 
			
			
			
			 
             
			 echo "</table>";
			 }
?>
</body>
</html>
