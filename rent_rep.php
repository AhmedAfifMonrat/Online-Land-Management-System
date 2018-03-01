<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['elem']))
{
$elem=$_POST['elem'];
$land_size=$_POST['land_size'];
$bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
$output = str_replace($bn_digits,range(0, 9), $land_size);
$land_size=$output;
$bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
$output = str_replace($bn_digits,range(0, 9), $elem);
$elem=$output;
$total_rent=$land_size*$elem;

$vat=(15*$total_rent)/100;
$tax=(5*$total_rent)/100;
$pledge=10000;
$total_amount=$pledge+$vat+$tax+$total_rent;
}
?>
<table border="0" style="font-size:16px" id="rent">
<tr>
<td width="143" >খাজনার হার :</td>
<td width="227" ><input type="text" id="rnt" name="rnt" onblur="fill_rent(this.value)" value="<?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯');$output = str_replace(range(0, 9),$bn_digits, $elem);$elem=$output; echo $elem; ?>" style="font-size:20px"/><span id="val" style="color:#FF0000"></span></td>
</tr>


<tr>
<td>মোট খাজনা :</td>
<td><input type="text" id="t_rent" name="t_rent" style="font-size:20px" value="<?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯');$output = str_replace(range(0, 9),$bn_digits, $total_rent);$total_rent=$output; echo $total_rent; ?>" /></td>
</tr>

<tr>
<td>ভেট (১৫%) :</td>
<td><input type="text" id="vat" name="vat" style="font-size:20px" value="<?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯');$output = str_replace(range(0, 9),$bn_digits, $vat);$vat=$output; echo $vat; ?>" /></td>
</tr>
<tr>
<td>আয়কর (৫%) :</td>
<td><input type="text" id="tax" name="tax" style="font-size:20px" value="<?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯');$output = str_replace(range(0, 9),$bn_digits, $tax);$tax=$output; echo $tax; ?>"/></td>
</tr>
<tr>
<td>দখল বাবদ বকেয়া খাজনা :</td>
<td><input type="text" id="due" name="due" style="font-size:20px" /></td>
</tr>
<tr>
<td>নিরাপত্তা জামানত :</td>
<td><input type="text" id="plge" name="plge" style="font-size:20px" value="<?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯');$output = str_replace(range(0, 9),$bn_digits, $pledge);$pledge=$output; echo $pledge; ?>" /></td>
</tr>
<tr>
<td>বিলম্ব ফি :</td>
<td><input type="text" id="due_fee" name="due_fee" style="font-size:20px" /></td>
</tr>
<tr>
<td>অনান্য :</td>
<td><input type="text" id="others" name="others" style="font-size:20px" /></td>
</tr>
<tr>
<td>সর্বমোট :</td>
<td><input type="text" id="t_amount" name="t_amount" style="font-size:20px" value="<?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯');$output = str_replace(range(0, 9),$bn_digits, $total_amount);$total_amount=$output; echo $total_amount; ?>" /></td>
</tr>



</table>

</body>
</html>
