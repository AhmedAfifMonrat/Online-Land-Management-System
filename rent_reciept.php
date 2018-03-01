<?php
$rs=$_POST['rs'];
$server="localhost";
$uname="root";
$pass="";
$database="landmanagement";
$table_name="leaseholder_record";
$tab_name="rent_record";
$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="SELECT l.name,l.fname,l.village,l.sub_district,l.district,l.mouja,l.b_s_rights,l.b_s_ideograph,l.land_size,r.total_rent,r.vat,r.tax,r.pledge,r.total_amount from leaseholder_record as l inner join rent_record as r on l.r_s_rights=r.r_s_rights where l.r_s_rights='$rs'";
$result=mysql_query($sql,$con);
 while($row = mysql_fetch_array($result)) {
            
			$name=$row['name'];
			$fname=$row['fname'];
			$address=$row['village']." ,".$row['sub_district'].", ".$row['district'];
			$sd=$row['sub_district'];
 			$mouja=$row['mouja'];
			$land=$row['land_size'];
			$b_s_rights=$row['b_s_rights'];
			$b_s_ideograph=$row['b_s_ideograph'];
			$rent=$row['total_rent'];
			$vat=$row['vat'];
			$tax=$row['tax'];
			$pledge=$row['pledge'];
			$t_amount=$row['total_amount'];
			}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="js/java.js"></script>
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
<center>
<h1> জেলা পরিষদ,</h1>
<p>চট্টগ্রাম</p>
<h1>জমির খাজনা আদায়ের রসিদ </h1>

<table border="1" cellspacing="0" style="text-align:center; font-size:20px">
<tr>
<td rowspan="3" width="200" style="text-align:center">
যার নিকট হতে আদায় :
</td>
<td width="300" style="text-align:center">
জনাব <?php echo " "." ".$name; ?>
</td>
</tr>
<tr>
<td style="text-align:center">পিতা/স্বামী <?php echo " "." ".$fname; ?></td>
</tr>
<tr>
<td style="text-align:center">ঠিকানা <?php echo " "." ".$address; ?></td>
</tr>
<tr>
<td>কি বাবদ</td>
<td>নগদ</td>
</tr>
<tr>
<td>হাল খাজনা বাবদ</td>
<td><?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $rent);
			$rent=$output;echo $rent." "."টাকা"; ?></td>
</tr>
<tr>
<td>১৫% ভ্যাট বাবদ</td>
<td><?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $vat);
			$vat=$output;echo $vat." "."টাকা"; ?></td>
</tr>
<tr>
<td>৫% ট্যাক্স বাবদ</td>
<td><?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $tax);
			$tax=$output;echo $tax." "."টাকা"; ?></td>
</tr>
<tr>
<td>জামানত বাবদ</td>
<td><?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $pledge);
			$pledge=$output;echo $pledge." "."টাকা"; ?></td>
</tr>
<tr>
<td>মোট</td>
<td><?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $t_amount);
			$t_amount=$output;echo $t_amount." "."টাকা"; ?></td>
</tr>
<tr>
<td>মৌজার  নাম :<?php echo " ".$mouja; ?></td>
<td>জে এল নং ...........</td>
</tr>
<tr>
<td>খতিয়ান নং :<?php echo " ".$b_s_rights; ?></td>
<td>দাগ :<?php echo " ".$b_s_ideograph; ?></td>
</tr>
<tr>
<td>ভূমির পরিমাণ</td>
<td><?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $land);
			$land=$output;echo $land." "."বর্গফুট "; ?></td>
</tr>
<tr>
<td>ইজারার মেয়াদ/নবায়ন সন</td>
<td></td>
</tr>
</table>

</center>
</div>
</body>
</html>
