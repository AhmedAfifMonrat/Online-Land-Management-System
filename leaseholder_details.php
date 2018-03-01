


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css" media="screen">

#a
{
text-align:center;
padding-top:40px;
padding-left:5px;
}
#b
{
font-size:18px;
}

</style>
<script type="text/javascript">
 function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
    }
    

  
    
</script>
</head>

<body>
    <input id="printex" type="button" onclick="printDiv('leaseholder')" value="Print" />  
   
<div id="leaseholder" style="height:auto;width:auto;" >
<div style="margin-left:10px">
<?php
$server="localhost";
$uname="root";
$pass="";
$database="landmanagement";
$table_name="leaseholder_record";
$r_s_rights=$_POST['r_s_rights'];



$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT * from $table_name where r_s_rights='$r_s_rights'";
$result=mysql_query($sql,$con);
 
  while($row = mysql_fetch_array($result)) {
            
			$name=$row['name'];
			$fname=$row['fname'];
			$mname=$row['mname'];
			$dis=$row['district'];
			$sd=$row['sub_district'];
			$po=$row['post_office'];
			$vill=$row['village'];
			$mouja=$row['mouja'];
			$prof=$row['profession'];
			$mbln=$row['mobile_no'];
			$purpose=$row['land_purpose'];
			$pic=$row['photo'];
			$land=$row['land_size'];
			$r_s_rights=$row['r_s_rights'];
			$b_s_rights=$row['b_s_rights'];
			$r_s_ideograph=$row['r_s_ideograph'];
			$b_s_ideograph=$row['b_s_ideograph'];
			$year=$row['year'];
			}
			
			 echo "<table border='0'>";
			 echo "<tr valign='top'>";
 			 echo "<td>"."<img src=\"".$pic."\" height='100px' width='100px' />"."</td>";
  		    
             echo "</tr>";
			 echo "</table>";
			 
			 echo "<table border='1' style='font-size:18px;text-align:center' cellspacing='0' >";
			 echo "<tr>";
 			 echo "<td id='scren'>"."নাম:"."</td>";
  		     echo "<td id='scren' width='200px'>".$name."</td>";
			  echo "</tr>";
			 echo "<tr>";
 			 echo "<td>"."পিতার নাম:"."</td>";
  		     echo "<td>".$fname."</td>";
			  echo "</tr>";
			  echo "<tr>";
			  echo "<td>"."মাতার নাম:"."</td>";
  		     echo "<td>".$mname."</td>";
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
			 echo "<td>"."আবেদনকারীর পেশা:"."</td>";
  		     echo "<td>".$prof."</td>";
			  echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."আবেদনকারীর মোবাইল নম্বর:"."</td>";
  		     echo "<td>".$mbln."</td>";
			  echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."প্রার্থিত জমির পরিমান:"."</td>";
  		     echo "<td>".$land." বর্গফুট "."</td>";
			  echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."মৌজা:"."</td>";
  		     echo "<td>".$mouja."</td>";
			  echo "</tr>";
			 echo "<tr>";
			  echo "<td>"."আর.এস খতিয়ান নম্বর:"."</td>";
  		     echo "<td>".$r_s_rights."</td>";
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
			 echo "<tr>";
			  echo "<td>"."অর্থসন:"."</td>";
  		     echo "<td>".$year."</td>";
			 echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."ইজারা প্রার্থিত জমি কন কাজে ব্যবহার হইবে:"."</td>";
  		     echo "<td>".$purpose."</td>";
			
			
			 
             echo "</tr>";
			 echo "</table>";
			 
			
            
     ?>  
     </div>
     </div>
     
 
            </body>
            </html>
           