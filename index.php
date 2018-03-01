<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/style.css"  />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/java.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>জমি ইজারা </title>
</head>

<body>
<div id="wrapper">
  <div id="header">
      <h1>Lease Management System</h1>
  </div>
         <div id="main_part">
           <div id="category">
                  <div id="content1">
                       <div id="leftbar">
                               <p id="Categories" style="font-size:24px" >সার্ভে সেকশন</p>
                               <p id="solution1" onClick="hotel_info()" style="font-size:20px">জমির ইজারাদার</p>
                               <ul id="solutions1">
                               <span onClick="form()">
                               <li style="font-size:20px" >আবেদন ফরম </li>
                               </span>
                               <span onClick="khajna()"><li style="font-size:20px">খাজনা রেজিস্টার</li></span>
                               </ul>
                               <p id="solution2" onClick="restaurent_info()" style="font-size:20px">শর্তাবলী </p>
                               <ul id="solutions2">
                               <span onClick="add_restaurent()"><li style="font-size:20px">ইজারা সংক্রান্ত </li></span>
                               <span onClick="view_restaurent()"><li style="font-size:20px">খাজনা সংক্রান্ত </li></span>
                               </ul>
                              
                    </div>
                    </div>
           </div>
           <div id="display">
             <div id="content">
            

                    <h3 style="text-align:center">চট্টগ্রাম জেলা পরিষদের জায়গা একসনা ইজারার রেজিস্টার</h3>
            
             </div>
             <div id="show">
             
             
             </div>
           </div>
         </div>
</div>
</body>

</html>
 <!----------------------------LeaseHolder info insertion----------------------------->
<?php
if(isset($_POST['send']))
{
$server="localhost";
$uname="root";
$pass="";
$database="landmanagement";
$table_name="leaseholder_record";
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$vill=$_POST['vill'];
$po=$_POST['po'];
$sub_dis=$_POST['sub_dis'];
$dis=$_POST['dis'];
$prof=$_POST['prof'];
$mble=$_POST['mno'];
$land_size=$_POST['land_size'];
$bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
$output = str_replace($bn_digits,range(0, 9), $land_size);
$land_size=$output;
$height=$_POST['land_height'];
$width=$_POST['land_width'];
if(strlen($width)!=0 && strlen($height)!=0)
{
$bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
$output = str_replace($bn_digits,range(0, 9), $width);
$output1 = str_replace($bn_digits,range(0, 9), $height);
$width=$output;
$height=$output1;
$land_size=$width*$height;
}
$shotok=$_POST['shotok'];
if(strlen($shotok)!=0)
{
$landsize=$shotok;
}
$purpose=$_POST['purpose'];
$year=$_POST['year'];
$dat=$_POST['date'];
$format=date_create($dat);
$date=date_format($format,"Y-m-d");
$mouja=$_POST['mouja'];
$r_s_rights=$_POST['rskno'];
$b_s_rights=$_POST['rsdno'];
$b_s_prints=$_POST['bskno'];
$r_s_prints=$_POST['bsdno'];
$c_s_rights=$_POST['csdno'];
$c_s_prints=$_POST['cskno'];
$national_id=$_POST['n_id'];
$pic="";
//Picture Upload
if((($_FILES["pic"]["type"]=="image/gif")//specify file type which is an image.
|| ($_FILES["pic"]["type"]=="image/jpeg")
|| ($_FILES["pic"]["type"]=="image/pjpeg"))
&& ($_FILES["pic"]["size"]<8000000)) //set image size in bytes.
{
if($_FILES["pic"]["error"]>0 || $_FILES["pic"]["error"]<0 )//check whether any error in files.
{
echo "return code".$_FILES["pic"]["error"]."<br />";
}
else
{
if(file_exists("upload/".$_FILES["pic"]["name"]))// here upload is the folder where allthe images will be stored.file_exists check whether the file is already in the storage.
{
echo '<script type="text/javascript">alert("This image is already exists"); </script>';
}
else
{
move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/".$_FILES["pic"]["name"]);//move the file to the upload folder.
$pic="upload/".$_FILES["pic"]["name"];//set the image name.
}
}
}
else
{
$pic=" ";
}

//revenue Upload
if((($_FILES["revenue"]["type"]=="image/gif")//specify file type which is an image.
|| ($_FILES["revenue"]["type"]=="image/jpeg")
|| ($_FILES["revenue"]["type"]=="image/pjpeg"))
&& ($_FILES["revenue"]["size"]<8000000)) //set image size in bytes.
{
if($_FILES["revenue"]["error"]>0 || $_FILES["revenue"]["error"]<0 )//check whether any error in files.
{
echo "return code".$_FILES["revenue"]["error"]."<br />";
}
else
{
if(file_exists("upload/".$_FILES["revenue"]["name"]))// here upload is the folder where allthe images will be stored.file_exists check whether the file is already in the storage.
{
echo '<script type="text/javascript">alert("This image is already exists"); </script>';
}
else
{
move_uploaded_file($_FILES["revenue"]["tmp_name"],"upload/".$_FILES["revenue"]["name"]);//move the file to the upload folder.
$lease_report="upload/".$_FILES["revenue"]["name"];//set the image name.
}
}
}
else
{
$lease_report=" ";
}


$con=mysql_connect("$server","$uname","$pass");
if(!$con)
{
die("server not connected".mysql_error());
}
mysql_select_db($database,$con);
$sql="insert into $table_name (form_id,name,fname,mname,district,sub_district,post_office,village,mouja,profession,mobile_no,national_id,photo,land_size,r_s_rights,b_s_rights,r_s_ideograph,b_s_ideograph,year,date,land_purpose,lease_report,status) values('','$name','$fname','$mname','$dis','$sub_dis','$po','$vill','$mouja','$prof','$mble','$national_id',
'$pic','$land_size','$r_s_rights','$b_s_rights','$r_s_prints','$b_s_prints','$year','$date','$purpose','$lease_report','notissued')";
if(mysql_query($sql))
{
echo "<script type='text/javascript'>
	$('#content').load('message.php');	
	</script>
";

}



 

}
?>
<!-------------------Leaseholder finished-------------------------------------->