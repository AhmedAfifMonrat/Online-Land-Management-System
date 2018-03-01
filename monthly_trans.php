<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<?php
$date1=$_POST['date1'];
$date2=$_POST['date2'];

  $format=date_create($date1);
  $date1=date_format($format,"Y/m/d");
  $format=date_create($date2);
  $date2=date_format($format,"Y/m/d");
  
  
$server="localhost";
$uname="root";
$pass="";
$database="landmanagement";
$table_name="leaseholder_record";
$table_name1="transaction_records";
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
else
{
mysql_select_db($database,$con); 
$sql="select l.form_id,l.name,t.amount,t.name as admin,t.time,t.date from leaseholder_record as l inner join transaction_records as t
      on l.form_id=t.form where t.date>='$date1' && t.date<='$date2'";
	  $result=mysql_query($sql);
	  
	  if(mysql_num_rows($result) > 0)
	  {
	if($result)
	{
	
	echo "<table border='1' width='900' cellspacing='0' style='margin-top:10px;text-align:center'>";
echo "<tr id='title'>";
echo"<td>ফরম নং</td>";
echo "<td>নাম</td>";
echo "<td>জমা</td>";
echo "<td>অনুমোদনকারী</td>";
echo "<td>তারিখ</td>";
echo "<td>জমাদানের সময়</td>";
echo "</tr>";
	 $total=0;
	  while($row=mysql_fetch_array($result))
	  {
	 
	  $total=$total+$row['amount'];
	  $amount=$row['amount'];
	  $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $amount);
			$amount=$output;
	  echo "<tr>";
	  echo "<td>".$row['form_id']."</td>";
	  echo "<td>".$row['name']."</td>";
	  echo "<td>".$amount."৳</td>";
	  echo "<td>".$row['admin']."</td>";
	  echo "<td>".$row['date']."</td>";
	  echo "<td>".$row['time']."</td>";
	  echo "</tr>";
	  }
	    echo "<tr>";
	  echo "<td>"." "."</td>";
	  echo "<td>"."সর্বমোট"."</td>";
	  $output = str_replace(range(0, 9),$bn_digits, $total);
			$total=$output;
	  echo "<td>".$total."৳</td>";
	  echo "<td>".""."</td>";
	  echo "<td>".""."</td>";
	  echo "<td>".""."</td>";
	  echo "</tr>";
	  echo "</table>";
	 
	
	  }
	 }
	 else
	 {
	 echo "<p style='margin-top:10px;margin-left:10px;color:red;font-size:20px'>No Record Found</p>";
	}
	  
	  
}
?>

</body>
</html>
