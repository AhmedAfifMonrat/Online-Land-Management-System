<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$input="৪৫৬";
echo $input."<br />";
$bn_digits=array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); 
$output = str_replace($bn_digits,range(0, 9), $input);
echo $output;
/*$fuc="12-11-2013";
$dat=date_create($fuc);
$date=date_format($dat,"Y-m-d");
echo $date."<br ?>";
$dt="2013-2014";
$a=strcspn($dt,"-");
echo $a."<br ?>";
$b=substr($dt,$a+1);
echo $b;
echo strlen(250);
echo "<br />";
  $dat='12/01/2013';
  $format=date_create($dat);
  $date=date_format($format,"d-m-Y");
  echo $date;
  */
?>
</body>
</html>
</body></html>