<?php
if(isset($_POST['id']))
			{
			$rs=$_POST['id'];
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
$sql="SELECT l.name,l.fname,l.village,l.sub_district,l.district,l.mouja,l.b_s_rights,l.b_s_ideograph,l.land_size,l.land_purpose,l.year,l.r_s_rights,l.r_s_ideograph,l.date,l.form_id,r.rent_per_sqft,r.total_rent,r.vat,r.tax,r.pledge,r.total_amount from leaseholder_record as l inner join rent_record as r on l.r_s_rights=r.r_s_rights where l.r_s_rights='$rs'";
$result=mysql_query($sql,$con);
 while($row = mysql_fetch_array($result)) {
            
			$name=$row['name'];
			$fname=$row['fname'];
			$address=$row['village']." ,".$row['sub_district'].", ".$row['district'];
			$sd=$row['sub_district'];
 			$mouja=$row['mouja'];
			$purpose=$row['land_purpose'];
			 $year=$row['year'];
            $r_s_rights=$row['r_s_rights'];
			$land=$row['land_size'];
			$b_s_rights=$row['b_s_rights'];
			$b_s_ideograph=$row['b_s_ideograph'];
			$r_s_ideograph=$row['r_s_ideograph'];
			$t_rent=$row['total_rent'];
			$rent=$row['rent_per_sqft'];
			$vat=$row['vat'];
			$tax=$row['tax'];
			$plge=$row['pledge'];
			$t_amount=$row['total_amount'];
			$date=$row['date'];
			$date=date_create($date);
			$date=date_format($date,"d-m-Y");
			$form=$row['form_id'];
			}
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
padding-left:50px;
padding-top:5px;

}
</style>
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
<table border="0" style="font-size:20px; font-family:Arial, Helvetica, sans-serif" width="900">
<tr>
<td>নং :</td>
<td><?php echo $form." "; ?></td>
</tr>
<tr>
<td>বিষয় :</td>
<td>চট্টগ্রাম জেলা পরিষদের  <?php echo $year." "; ?>অর্থ বছরের জন্য অস্থায়ী একসনা ইজারা প্রদান প্রসঙ্গে ।</td>
</tr>
<tr>
<td>সূত্র :</td>
<td>আপনার <?php echo $date." "; ?> তারিখের আবেদন।</td>
</tr>
<tr>
<td colspan="2">উপর্যুক্ত  বিষয়ে আপনার সুত্রস্থিত আবেদনের প্রেক্ষিতে নিম্ন তপশীলক্ত ভূমি নিম্নবর্ণিত পাওনা পরিশোধ
ও শর্তাদি প্রতিপালন সাপেক্ষে সম্পূর্ণ অস্থায়ী ভিত্তিতে <?php echo $year." "; ?> অর্থ বছরের জন্য একসনা ইজারা প্রদান করা হল ।
</td>
</tr>
</table>

<table border="0" style="font-size:20px; font-family:Arial, Helvetica, sans-serif" width="900">
<tr>
<th style="text-align:left">শর্তাবলী : </th>
</tr>
<tr>
<td>১. এই ইজারা সম্পূর্ণ অস্থায়ী এবং ভবিষ্যতে কখনো স্থায়ী ইজারা হিসেবে দাবী করা যাবে না ।</td>
</tr>
<tr>
<td>২. চট্টগ্রাম জেলা পরিষদ কিংবা স্থানীয় সরকার যে কোন সময় ৩০(ত্রিশ) দিনের নোটিশে এই অস্থায়ী
ইজারা রহিত বা বাতিল করতে পারবে এবং এ জন্য কোন আদালতে কোন রকম মামলা করা বা ক্ষতিপূরণ
দাবী করা যাবে না ।</td>
</tr>
<tr>
<td>৩. কর্তৃপক্ষের নিকট সন্তোষজনক প্রতীয়মান হলে ইজারা নবায়ন করা হতে পারে। তবে ইজারা গ্রহিতাকে
অবশ্যই মেয়াদ পূর্তির ৩০ দিন পূর্বে নবায়নের জন্য আবেদন দাখিল করতে হবে। নির্দিষ্ট সময়ে নবায়ন
করা না হলে ইজারা স্বয়ংক্রিয় ভাবে বাতিল বলে গণ্য হবে।</td>
</tr>
<tr>
<td>৪. ইজারাকৃত জমিতে কোন পাকা কিংবা স্থায়ী অবকাঠামো নির্মাণ করা যাবে না ।</td>
</tr>
<tr>
<td>৫. ইজারাকৃত জমি অন্য কোন ব্যক্তি বা প্রতিষ্ঠানের নিকট কোন অবস্থাতেই সাবলেট দেয়া যাবে না ।</td>
</tr>
<tr>
<td>৬. ইজারা গ্রহীতাকে ১ বছরের খাজনা নিরাপত্তা জামানত বাবদ অগ্রিম জমা দিতে হবে ।</td>
</tr>
<tr>
<td>৭. নির্ধারিত সময়সীমার মধ্যে ইজারা মূল্য বা খাজনা পরিশোধ করা না হলে ইজারা বাতিল বলে গণ্য হবে ।</td>
</tr>
<tr>
<td>৮. ভবিষ্যতে কর্তৃপক্ষ অন্য কোন শর্ত আরোপ করার ক্ষমতা সংরক্ষণ করে ।</td>
</tr>
<tr>
<td>৯. ইজারাগ্রহীতা উপর্যুক্ত  যে কোন শর্ত ভঙ্গ করলে কর্তৃপক্ষ বিনা নোটিশে ইজারা বাতিল পূর্বক জমি
ফেরত নেয়ার অধিকার সংরক্ষণ করে ।</td>
</tr>

</table>

<table cellspacing="0" border="1" style="margin-top:20px">
<tr>
<td width="400" style="text-align:center;font-size:24px">তপশীল</td>
<td width="400" style="text-align:center; font-size:24px">খাজনার বিবরণ </td>
</tr>
<tr valign="top">
<td>
<table border="0" style="font-size:18px" id="desc">
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
<td><?php echo $land." বর্গফুট"; ?></td>
</tr>
<tr>
<td>জমির ধরন :</td>
<td><?php echo $purpose; ?></td>
</tr>

</table>
</td>
<td>
<table border="0" style="font-size:18px" id="rent">
<tr>
<td>খাজনার হার :</td>
<td><?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $rent);
			$rent=$output; echo $rent." টাকা প্রতি শতক/বর্গফুট "; ?> </td>
</tr>
<tr>
<td>মোট খাজনা :</td>
<td><?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $t_rent);
			$t_rent=$output; echo $t_rent." টাকা"; ?></td>
</tr>
<tr>
<td>ভেট (১৫%) :</td>
<td><?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $vat);
			$vat=$output; echo $vat." টাকা"; ?></td>
</tr>
<tr>
<td>আয়কর (৫%) :</td>
<td><?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $tax);
			$tax=$output; echo $tax." টাকা"; ?></td>
</tr>
<tr>
<td>দখল বাবদ বকেয়া খাজনা :</td>
<td>..............টাকা</td>
</tr>
<tr>
<td>নিরাপত্তা জামানত :</td>
<td><?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $plge);
			$plge=$output; echo $plge." টাকা"; ?></td>
</tr>
<tr>
<td>বিলম্ব ফি :</td>
<td>..............টাকা</td>
</tr>
<tr>
<td>অনান্য :</td>
<td>..............টাকা</td>
</tr>
<tr>
<td>সর্বমোট :</td>
<td><?php $bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
            $output = str_replace(range(0, 9),$bn_digits, $t_amount);
			$t_amount=$output; echo $t_amount." টাকা"; ?></td>
</tr>
<tr>
<td>কথায়</td>
<td>..............টাকা</td>
</tr>

</table>
</td>
</tr>
</table>

<table width="800">
<tr>
<td colspan="2">পত্র প্রাপ্তির ০৭(সাত) দিনের মধ্যে উল্লেখিত খাজনা চট্টগ্রাম জেলা পরিষদে জমা দিয়ে সীলযুক্ত রশিদ গ্রহন
এবং চুক্তিপত্র সম্পাদনের স্বার্থে ৩০০/- (তিনশত) টাকা মূল্যমানের নন-জুডিশিয়াল স্ট্যাম্প দাখিল
করার জন্য আপনাকে অনুরোধ করা হল ।</td>
</tr>
<tr>
<td>&nbsp;</td>
<td style="float:right">প্রধান নির্বাহী কর্মকর্তা<br />
জেলা পরিষদ, চট্টগ্রাম ।</td>
</tr>
</table>

<table>
<tr valign="top">
<td rowspan="3" width="200">
প্রাপক:
</td>
<td width="300">
জনাব <?php echo " "." ".$name; ?>
</td>
</tr>
<tr>
<td>পিতা/স্বামী <?php echo " "." ".$fname; ?></td>
</tr>
<tr>
<td>ঠিকানা <?php echo " "." ".$address; ?></td>
</tr>
</table>
</div>

</body>
</html>
