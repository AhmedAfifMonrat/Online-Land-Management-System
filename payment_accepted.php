<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
$rs=$_POST['rs'];
//Detect time and date of Accepting Payment

  $offset=6*60*60; //converting 6 hours to seconds.
  $dateFormat="Y-m-d h:i A";
  $timeNdate=gmdate($dateFormat, time()+$offset);
  $len=strcspn($timeNdate,' ');
  $date=substr($timeNdate,0,$len);
  $time=substr($timeNdate,$len+1);
  /////////////////////////////////////////////
$server="localhost";
$uname="root";
$pass="";
$database="landmanagement";
$table_name="leaseholder_record";
$table_name2="transaction_records";
$table_name3="rent_record";
$tab="admin";
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="update $table_name set status='approved' where r_s_rights='$rs'";
if(mysql_query($sql))
{
echo "<span style='color:red'>Land Rent Payment has been accepted</span>";
}
mysql_select_db($database,$con);
$sp="select username from $tab where status='active'";
$result=mysql_query($sp);
 while($row = mysql_fetch_array($result)) {
 $name=$row['username'];
 }
$sql1="select l.form_id,l.national_id,r.total_amount from leaseholder_record as l inner join rent_record as r
  on l.r_s_rights=r.r_s_rights where l.r_s_rights='$rs' ";
  $result=mysql_query($sql1,$con);
 while($row = mysql_fetch_array($result)) {
            
			
			$form=$row['form_id'];
			$t_amount=$row['total_amount'];
			$id=$row['national_id'];
			}
		mysql_select_db($database,$con);
		$sql2="insert into $table_name2 values('$name','$date','$time','$t_amount','$id','$form')";
		mysql_query($sql2,$con);	

?>
</body>
</html>