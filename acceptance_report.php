<?php
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
            
			
			$sd=$row['sub_district'];
		
			$mouja=$row['mouja'];
			
			$purpose=$row['land_purpose'];
			$year=$row['year'];
			$land=$row['land_size'];
			$bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $land);
			$land=$output;
			$r_s_rights=$row['r_s_rights'];
			$b_s_rights=$row['b_s_rights'];
			$r_s_ideograph=$row['r_s_ideograph'];
			$b_s_ideograph=$row['b_s_ideograph'];
			
			}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<style type="text/css">
#desc td
{
padding-left:60px;
padding-top:5px;

}
#rent td
{
padding-left:30px;
padding-top:5px;

}
</style>
<script type="text/javascript" src="js/java.js"></script>
</head>

<body>
<h1 style="font-family:'Myriad Pro'; font-size:30px; color:#006600">Acceptance Period</h1>
<form>
<table cellspacing="0" border="1" style="margin-top:20px">
<tr>
<td width="400" style="text-align:center;font-size:24px">তপশীল</td>
<td width="400" style="text-align:center; font-size:24px">খাজনার বিবরণ </td>
</tr>
<tr valign="top">
<td>
<table border="0" style="font-size:25px" id="desc">
<tr valign="top">
<td>উপজেলা :</td>
<td><?php echo $sd; ?></td>
</tr>
<tr>
<td>মৌজা :</td>
<td><?php echo $mouja; ?></td>
</tr>
<tr>
<td>আর.এস খতিয়ান নম্বর :</td>
<td><?php echo $r_s_rights; ?></td>
</tr>
<tr>
<td>আর.এস দাগ নম্বর :</td>
<td><?php echo $r_s_ideograph; ?></td>
</tr>
<tr>
<td>বি.এস খতিয়ান নম্বর :</td>
<td><?php echo $b_s_rights; ?></td>
</tr>
<tr>
<td>বি.এস দাগ নম্বর :</td>
<td><?php echo $b_s_ideograph; ?></td>
</tr>
<tr>
<td>জমির পরিমান :</td>
<td><?php echo $land." বর্গফুট"; ?><input type="hidden" value="<?php echo $land; ?>" id="land_size"  /></td>
</tr>
<tr>
<td>জমির ধরন :</td>
<td><?php echo $purpose; ?></td>
</tr>
<tr>
<td><input type="hidden" name="year" id="year" value='<?php echo $year; ?>' /></td>
</tr>
</table>
</td>
<td>
<table border="0" style="font-size:22px" id="rent">
<tr>
<td width="140">খাজনার হার :</td>
<td width="250"><input type="text" id="rnt" name="rnt" onblur="fill_rent(this.value)" value="" style="font-size:16px"/><span id="val" style="color:#FF0000"></span></td>
</tr>


<tr>
<td>মোট খাজনা :</td>
<td><input type="text" id="t_rent" name="t_rent" style="font-size:16px" /></td>
</tr>

<tr>
<td>ভেট (১৫%) :</td>
<td><input type="text" id="vat" name="vat" style="font-size:16px" /></td>
</tr>
<tr>
<td>আয়কর (৫%) :</td>
<td><input type="text" id="tax" name="tax" style="font-size:16px" /></td>
</tr>
<tr>
<td>দখল বাবদ বকেয়া খাজনা :</td>
<td><input type="text" id="due" name="due" style="font-size:16px" /></td>
</tr>
<tr>
<td>নিরাপত্তা জামানত :</td>
<td><input type="text" id="plge" name="plge" style="font-size:16px" /></td>
</tr>
<tr>
<td>বিলম্ব ফি :</td>
<td><input type="text" id="due_fee" name="due_fee" style="font-size:16px" /></td>
</tr>
<tr>
<td>অনান্য :</td>
<td><input type="text" id="others" name="others" style="font-size:16px" /></td>
</tr>
<tr>
<td>সর্বমোট :</td>
<td><input type="text" id="t_amount" name="t_amount" style="font-size:16px" /></td>
</tr>

<tr>
<td><input type="hidden" name="year" id="year" value='<?php echo $year; ?>' /></td>
</tr>
</table>

</td>
</tr>
</table>
<button type="button" id="btn" value="<?php echo $r_s_rights; ?>" style="margin-top:10px; background-color:#FF3300; color:#FFFFFF; height:30px; cursor:pointer" onclick="lease_letter(this.value)">Create Lease Letter</button>
</form>
</body>
</html>
