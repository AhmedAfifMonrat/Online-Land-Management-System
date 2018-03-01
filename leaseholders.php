<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
th
{
text-align:left;
padding-left:20px;
background-color:#FF3300;
width:300px;
color:#FFFFFF; 
font-size:20px;
font-weight:500;
}
td
{
padding-left:20px;
background-color:#66CCCC;
width:300px;
font-size:18px;
font-family:"Myriad Pro";
}
button
{
width:100px;
height:30px;
background-color:#006600;
font-size:16px;
color:#FFFFFF;
font-weight:700;
cursor:pointer;

}
#a
{
background-color:#FFFFFF;
}
</style>
<script type="text/javascript" src="js/java.js"></script>
</head>
<body>
<select id="lease" style="width:100px; margin-bottom:10px">
<option value="all">All</option>
<option value="5">5</option>
<option value="10">10</option>
<option value="20">20</option>
</select>
<?php
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
$sql="SELECT * from $table_name order by date asc";
$result=mysql_query($sql,$con);
  echo "<table border='0'>";
  echo "<tr>";
  echo "<th>"."নাম"."</th>";
  echo "<th>"."উপজেলা"."</th>";
   echo "<th>"."আবেদনের তারিখ"."</th>";
  echo "<th id='a'>";
  echo "</th>";
  echo "</tr>";
  while($row = mysql_fetch_array($result)) {
          echo "<tr>";
		    echo "<td>".$row['name']."</td>";
			echo "<td>".$row['sub_district']."</td>";
			echo "<td>".$row['date']."</td>";
			$status=$row['status'];
			if($status=='notissued')
			{
			echo "<td style='background-color:#ffffff;cursor:pointer'>"."<img src='images/unissued.jpg' title='Not Issued' onclick='get_approved(\"".
			$row['r_s_rights']."\")' />"."</td>";
			}
			else if($status=='pending')
			{
			echo "<td style='background-color:#ffffff;cursor:pointer'>"."<img src='images/pending.jpg' title='Pending' onclick='get_member(\"".$row['r_s_rights']."\")' />"."</td>";
			}
			else{
		
			echo "<td style='background-color:#ffffff;cursor:pointer'>"."<img src='images/approved.jpg' title='Approved' onclick='get_member(\"".$row['r_s_rights']."\")' />"."</td>";
			}
			echo "<td id='a'>"."<button onclick='send_rs(this.value)' value=\"".$row['r_s_rights']."\">বিস্তারিত </button>"."</td>";
			echo "</tr>";
			
			}
			  
  echo "</table>";
            
     ?>    
            </body>
            </html>
           
            
			
