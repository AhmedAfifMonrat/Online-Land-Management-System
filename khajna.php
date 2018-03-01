
<?php
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
$sql="SELECT * FROM $table_name";
$result=mysql_query($sql,$con);
 while($row=mysql_fetch_array($result))
 {
 $rs_rights[]=$row['r_s_rights'];
 $bs_ideograph[]=$row['b_s_ideograph'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>খাজনা রেজিস্টার</title>
</head>

<body>
<h2 style="text-align:center">জেলা পরিষদ, চট্টগ্রাম</h2>
<h3 style="text-align:center">জমির খাজনা আদায়ের রসিদ </h3>
<div id="show_info">
<span style="padding-top:10px; font-size:20px">
জমির ইজারাদারের আর.এস খতিয়ান নম্বর
<select name="lease_info" onchange="load_lease_info(this)"  style="height:20px; width:200px">
<option style="font-size:16px">আর.এস খতিয়ান নম্বর নির্বাচন করুন </option>
<?php  for($i=0; $i<count($rs_rights); $i++)
echo "<option name=\"".$row['r_s_rights']."\" value=\"".$rs_rights[$i]."\">".$rs_rights[$i]."</option>";?></select>
</span><br />
<span style="padding-top:10px; font-size:20px">
জমির ইজারাদারের বি.এস দাগ নম্বর
<select name="lease_info" onchange="load_lease_info1(this)"  style="height:20px; width:200px">
<option style="font-size:16px"> বি.এস দাগ নম্বর নির্বাচন করুন </option>
<?php for($i=0; $i<count($bs_ideograph); $i++)
echo "<option name=\"".$row['b_s_ideograph']."\" value=\"".$bs_ideograph[$i]."\">".$bs_ideograph[$i]."</option>";?></select>
</span>
</div>
<div id="show_content">

</div>
</body>
</html>
