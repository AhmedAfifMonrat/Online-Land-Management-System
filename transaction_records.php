<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script type="text/javascript" src="js/java.js"></script>
    <script src="js/jquery-1.7.1.js"></script>
	
    <script src="ui/jquery.ui.core.js"></script>

    <script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="demos/demos.css">
	<script>
	$(function() {
		$( "#datepick" ).datepicker({
			showButtonPanel: true
		});
	});
	$(function() {
		$( "#datepicker" ).datepicker({
			showButtonPanel: true
		});
	});
	</script>
    <script type="text/javascript">
 function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
    }
    

  
    
</script>
<style type="text/css">
#title td
{
color:#FFFFFF;
background-color:#FF3300;
font-size:24px;
font-family:"Myriad Pro";
text-align:center;
width:180px;

}
td
{
text-align:center;
background-color:#FFFF99;
border:1px #000000 solid;
}
</style>
</head>

<body>
<span style="font-size:25px; cursor:pointer; color:#333399; font-family:'Myriad Pro'" onclick="daily()">দৈনিক হিসাব <img src="images/botton.png" style="padding-top:10px" /></span><br />
<div id="daily" style="height:300px; width:980px; overflow:scroll; display:none">

<?php
//Detect current date

  $offset=6*60*60; //converting 6 hours to seconds.
  $dateFormat="Y-m-d";
  $timeNdate=gmdate($dateFormat, time()+$offset);
  $len=strcspn($timeNdate,' ');
  $date=substr($timeNdate,0,$len);
  /////////////////////////////////////////////
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
$sql="select l.form_id,l.name,t.amount,t.name as admin,t.time from leaseholder_record as l inner join transaction_records as t
      on l.form_id=t.form where t.date='$date'";
	  $result=mysql_query($sql);
	  if(mysql_num_rows($result) > 0)
	  {
	if($result)
	{
	echo "<table border='0' width='900' cellspacing='0' style='margin-top:10px'>";
echo "<tr id='title'>";
echo"<td>ফরম নং</td>";
echo "<td>নাম</td>";
echo "<td>জমা</td>";
echo "<td>অনুমোদনকারী</td>";
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




</div>
<span  style="font-size:25px; cursor:pointer; color:#333399; padding-top:10px; font-family:'Myriad Pro'" onclick="monthly()">মাসিক হিসাব <img src="images/botton.png" style="padding-top:10px" /></span><br />
<div id="monthly" style="height:300px; width:980px; overflow:scroll; display:none">
<div class="demo">

<p>From Date <input type="text" id="datepick" /> To <input type="text" id="datepicker" /> <input type="button" id="date" value="Search" style="cursor:pointer; background-color:#FF3300; color:#FFFFFF; height:25px; width:100px; font-weight:700" onclick="transaction()" /></p>
<p style="margin-top:10px;color:#FF0000" id="error" ></p>
</div><!-- End demo -->
 <input id="printex" type="button" onclick="printDiv('month')" value="Print" style="margin-left:10px; display:none" />  
<div id="month" style="margin-left:10px">
</div>


</div>
</body>
</html>
