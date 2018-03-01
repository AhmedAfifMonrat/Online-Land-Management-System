<?php
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
$sql="SELECT count(*) FROM $table_name";
$result=mysql_query($sql,$con);
$row=mysql_fetch_array($result);
$records = $row[0];
if($records==0)
{
$sub_dis[]="";
$mouja[]="";
$vill[]="";
$po[]="";
}
else
{
$sql="SELECT distinct sub_district,mouja,village,post_office FROM $table_name group by sub_district";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
$sub_dis[]=$row['sub_district'];
$mouja[]=$row['mouja'];
$vill[]=$row['village'];
$po[]=$row['post_office'];
}


}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>আবেদন ফরম </title>

</head>
<body>

<span style="font-size:30px;">চট্টগ্রাম জেলা পরিষদের জায়গা একসনা ইজারার জন্য আবেদন ফরম </span>
<form name="form" id="form" method="post" enctype="multipart/form-data" action="index.php" >
<table width="701" border="0" style="font-size:25px; margin-top:20px">
  <tr>
    <td width="301">১.আবেদনকারীর নাম</td>
    <td width="400"><input type="text" name="name" style="height:25px;width:400px" required="required"/></td>
  </tr>
  <tr>
    <td>২.পিতার নাম</td>
    <td><input type="text" name="fname" style="height:25px;width:400px" required="required" /></td>
  </tr>
  <tr>
    <td>৩.মাতার নাম</td>
    <td><input type="text" name="mname" style="height:25px;width:400px" required="required" /></td>
  </tr>
  <tr>
    <td>৪.জেলা</td>
    <td>
    <select id="select" name="dis" >
    <option value="চট্টগ্রাম" style="font-size:16px">চট্টগ্রাম</option>
    </select>
    
    </td>
  </tr>
  <tr>
    <td>৫.উপজেলা</td>
    <td>
    <select name="sub_dis" required="required">
    <option>-----------Choose----------</option>
   <?php for($i=0; $i<count($sub_dis); $i++)
echo "<option id='sub_dis' name='sub_dis' value=\"".$sub_dis[$i]."\">".$sub_dis[$i]."</option>";?></select>
    </td>
  </tr>
  <tr>
    <td>৬.ডাকঘর </td>
    <td>
    <select name="po" required="required">
    <option>-----------Choose----------</option>
   <?php for($i=0; $i<count($po); $i++)
echo "<option name='po' value=\"".$po[$i]."\">".$po[$i]."</option>";?></select>

    </td>
  </tr>
  <tr>
    <td>৭.গ্রাম</td>
    <td>
    <select name="vill" required="required">
    <option>-----------Choose----------</option>
    <?php for($i=0; $i<count($vill); $i++)
echo "<option name='vill' value=\"".$vill[$i]."\">".$vill[$i]."</option>";?></select>
    </td>
  </tr>
  <tr>
    <td>৮.আবেদনকারীর পেশা</td>
    <td><input type="text" name="prof" style="height:25px;width:400px"  /></td>
  </tr>
  <tr>
    <td>৯.আবেদনকারীর মোবাইল নম্বর</td>
    <td><input type="text" name="mno" style="height:25px;width:400px" /></td>
  </tr>
  <tr>
    <td>১০.আবেদনকারীর জাতীয় পরিচয়পত্রের নম্বর</td>
    <td>
    <input type="text" name="n_id" style="height:25px;width:400px" />
    </td>
  </tr>
  <tr>
    <td>১১.এক কপি পাসপোর্ট সাইজের ছবি (সংযুক্ত করে দিতে হবে)</td>
    <td>
    <input type="file" name="pic"  />
    </td>
  </tr>
  <tr>
    <td>১২.প্রার্থিত জমির পরিমান/দৈর্ঘ্য ও প্রস্থ/শতক</td>
    <td><input type="text" name="land_size" style="height:25px;width:100px"  /> বর্গফুট /  দৈর্ঘ্য<input type="text" name="land_height" style="height:25px;width:50px"  />প্রস্থ<input type="text" name="land_width" style="height:25px;width:50px"  /><br />শতক<input type="text" name="shotok" style="height:25px; width:50px" /></td>
  </tr>
  <tr>
    <td>১৩.উপজেলা/থানার নাম</td>
    <td>
    <select name="sub_dis">
    <option>-----------Choose----------</option>
    <?php for($i=0; $i<count($sub_dis); $i++)
echo "<option name='sub_dis' value=\"".$sub_dis[$i]."\">".$sub_dis[$i]."</option>";?></select>
    </td>
  </tr>
  <tr>
    <td>১৪.মৌজা </td>
    <td>
    <select name="mouja">
    <option>-----------Choose----------</option>
	<?php for($i=0; $i<count($mouja); $i++)
echo "<option name=\"".$mouja[$i]."\" value=\"".$mouja[$i]."\">".$mouja[$i]."</option>";?></select></td>
  </tr>
  <tr>
    <td>১৫.আর.এস খতিয়ান নম্বর</td>
    <td><input type="text" name="rskno" style="height:25px;width:400px"  /></td>
  </tr>
  <tr>
    <td>১৬.আর.এস দাগ নম্বর</td>
    <td><input type="text" name="rsdno" style="height:25px;width:400px"  /></td>
  </tr>
  <tr>
    <td>১৭.বি.এস খতিয়ান নম্বর</td>
    <td><input type="text" name="bskno" style="height:25px;width:400px"  /></td>
  </tr>
  <tr>
    <td>১৮.বি.এস দাগ নম্বর</td>
    <td><input type="text" name="bsdno" style="height:25px;width:400px"  /></td>
  </tr>
  <tr>
  <td>১৯. সি.এস দাগ নম্বর</td>
  <td><input type="text" name="cskno" style="height:25px;width:400px" /></td>
  </tr>
  <tr>
  <td>২০. সি.এস খতিয়ান নম্বর</td>
  <td><input type="text" name="csdno" style="height:25px;width:400px" /></td>
  </tr>
  
  <tr>
    <td>২১.অর্থসন(..১২-..১৩)</td>
    <td><input type="text" name="year" style="height:25px;width:200px"  /><span style="font-size:14px"> (ex: 1999-2000)</span></td>
  </tr>
  <tr>
    <td>২২.তারিখ </td>
    <td><input type="text" name="date" style="height:25px;width:200px" /><span style="font-size:14px"> (ex: 12-11-2010)</span></td>
  </tr>
  <tr>
    <td>২৩.জমির ধরন</td>
    <td>
    <input type="text" name="land_type" style="height:25px;width:400px"  />
  </tr>
  <tr>
    <td>২৪.ইজারা প্রার্থিত জমির চৌহাদ্দি</td>
    <td>
    <input type="text" name="land_area" style="height:25px;width:400px"  />
    </td>
  </tr>
  <tr>
    <td>২৫.জায়গার উপর কোন ঘর বা অবকাঠামো বা গাছপালা আছে কিনা</td>
    <td>
    <input type="text" name="land_obj" style="height:25px;width:400px"  /></td>
  </tr>
  <tr>
    <td>২৬.জায়গাটি বর্তমানে অন্য কাহারো দখলে আছে কিনা</td>
    <td>
    <input type="text" name="land_posses" style="height:25px;width:400px"  />
    </td>
  </tr>
  <tr>
    <td>২৭.অন্যের দখলে থাকলে তার নাম ও ঠিকানা</td>
    <td>
    <input type="text" name="possesor_name" style="height:25px;width:400px"  />
    </td>
  </tr>
  <tr>
    <td>২৮.প্রার্থিত জমি কোন কাজে ব্যবহার হইবে</td>
    <td><input type="text" name="purpose" style="height:25px;width:400px"  /></td>
  </tr>
  <tr>
    <td>২৯.বিগত বছরের খাজনার রশিদ সংযুক্ত (যদি নবায়নের জন্য আবেদন করা হয়)</td>
    <td><input type="file" name="revenue"  /></td>
  </tr>
  <tr>
    <td colspan="2">
    <input type="checkbox" id="check" value="agree"  />
    আমি এই মর্মে অঙ্গীকার করিতেছি যে, উপরে বর্ণিত সকল তথ্যাদি সম্পূর্ণ সত্য এবং কোন তথ্য গোপন করি নাই। যদি কোন তথ্য অসত্য/মিথ্যা মর্মে প্রমাণিত হয়, তবে আমার বিরুদ্ধে যে কোন আইনগত শাস্তিমূলক ব্যবস্থা গ্রহণ করা যাইবে</td>
  </tr>
  
</table>
<input type="submit" name="send" id="send" value="সংরক্ষণ করুন" style="margin-top:20px; margin-bottom:20px; height:25px; width:100px; background-color:#CC3300; color:#FFFFFF; cursor:pointer; font-weight:700; text-transform:capitalize" />
</form>
</body>
</html>
