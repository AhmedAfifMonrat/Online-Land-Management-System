<?php
session_start();
$ses_id=session_id();
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
else
{
mysql_select_db($database,$con); 
$sql="SELECT current_session,username FROM $table_name where status='active'";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
$session=$row['current_session'];
$username=$row['username'];
}
}
if(isset($_SESSION['user']) and $_SESSION['user']!="loged in" or $ses_id!=$session)
{
echo "<script type='text/javascript'>window.location='admin.php';</script>";
}
//Detect time and date of Admin

  $offset=6*60*60; //converting 6 hours to seconds.
  $dateFormat="d-m-Y h:i A";
  $timeNdate=gmdate($dateFormat, time()+$offset);
  $len=strcspn($timeNdate,' ');
  $date=substr($timeNdate,0,$len);
  $time=substr($timeNdate,$len+1);
  mysql_select_db($database,$con); 
  $sql="insert into access_records values ('$username','$date','$time')";
  $result=mysql_query($sql,$con);
  
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>land management</title>
<link rel="stylesheet" type="text/css" href="css/adminpanel.css" />
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/java.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>
 <div id="sign"><a href="signout.php">sign out</a></div>
 <div id="header"><h3>Admin Panel</h3></div>
 <div id="main">
 <div id="content1">
  <div id="leftbar">
                               <p id="Categories">CATEGORIES</p>
                               <p id="solution1" onClick="hotel_info()">জমির ইজারাদার</p>
                               <ul id="solutions1">
                               <span onClick="leaseholder_details()"><li>ইজারা প্রার্থী </li></span>
                               <span onClick="leaseholder_member()"><li>ইজারাদার </li></span>
                               </ul>
                               <p id="solution2" onClick="restaurent_info()">উপজেলা</p>
                               <ul id="solutions2">
                               <span onClick="sitakundu()"><li>সীতাকুণ্ড</li></span>
                               <span onClick="mirasorai()"><li>মিরাসরাই </li></span>
                               <span onClick="fatikchori()"><li>ফটিকছড়ি</li></span>
                               <span onClick="rawjan()"><li>রাউজান</li></span>
                               <span onClick="rangunia()"><li>রাঙ্গুনিয়া</li></span>
                               <span onClick="hatajari()"><li>হাটহাজারি</li></span>
                               <span onClick="sandip()"><li>সন্দ্বীপ</li></span>
                               <span onClick="anowara()"><li>আনোয়ারা</li></span>
                               <span onClick="potia()"><li>পটিয়া</li></span>
                               <span onClick="chandanaish()"><li>চন্দনাইশ</li></span>
                               <span onClick="satkania()"><li>সাতকানিয়া</li></span>
                               <span onClick="lohagara()"><li>লোহাগাড়া</li></span>
                               <span onClick="boalkhali()"><li>বোয়ালখালি</li></span>
                               <span onClick="bashkhali()"><li>বাঁশখালী</li></span>
                               <span onClick="mohanogor()"><li>মহানগর</li></span>
                               </ul>
                               <p id="solution3" onClick="bus_info()">ইজারার জমা টাকা</p>
                               <ul id="solutions3">
                               <span onClick="trans()"><li>মোট হিসাব</li></span>
                              
                               </ul>
                               
                              
                              </div>
 </div>
 <div id="content2">
 <span id="display"><h3>জেলা পরিষদ , চট্টগ্রাম একসনা ভূমি ইজারা রেজিস্টার </h3></span>
 
 <div id="content3">
<!--------------area record insertion----------->
<?php
if(isset($_POST['send']))
{
$dis=$_POST['dis'];
$mouja=$_POST['mouja'];
$po=$_POST['po'];
$vill=$_POST['vill'];
$server="localhost";
$uname="root";
$pass="";
$database="landmanagement";
$table_name="area_record";
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="insert into $table_name (sub_district,post_office,mouja,village) values('$dis','$po','$mouja','$vill')";
if(mysql_query($sql))
{
echo "<script type='text/javascript'>
	document.getElementById('content3').innerHTML='Record Added Successfully';	
	</script>
";
}
}
?>



 </div>
 <div id="show"></div>
 </div>
 </div>
</body>

</html>
