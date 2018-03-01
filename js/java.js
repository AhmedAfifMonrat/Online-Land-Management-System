// JavaScript Document
function leaseholder_details()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("leaseholders.php");
}
function leaseholder_member()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("leaseholder.php");
}
function search_leaseholder(elem)
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	
	
	
    $("#content3").load("search_member.php",{rs:elem});
}
function send_rs(a)
{
	
	document.getElementById('content3').innerHTML='';

	$("#content3").load("leaseholder_details.php",{r_s_rights:a});
	
}
function load_lease_info(a)
{
	var rs=a.value;
	$("#show").load("khajna_report.php",{rs:rs});
}
function load_lease_info1(a)
{
	var bs=a.value;
	$("#show").load("khajna_report.php",{bs:bs});
}
function fill_rent(elem)
{
	if(elem!="")
	{   document.getElementById('val').innerHTML=" ";
		var land_size=document.getElementById('land_size').value;
		/*
		var total_rent=land_size*elem;
		var vat=(15*total_rent)/100;
		var tax=(5*total_rent)/100;
		var pledge=10000;
		var total_amount=pledge+vat+tax+total_rent;
		document.getElementById('t_rent').value=total_rent;
		document.getElementById('vat').value=vat;
		document.getElementById('tax').value=tax;
		document.getElementById('plge').value=pledge;
		document.getElementById('t_amount').value=total_amount;
		
	*/
	document.getElementById('rent').innerHTML='';

	$("#rent").load("rent_rep.php",{elem:elem,land_size:land_size});
		
	}
	else
	
	document.getElementById('val').innerHTML="*";
	
}
function lease_letter(elem)
{
	var rent=document.getElementById('rnt').value;	
	var t_rent=document.getElementById('t_rent').value;
	var vat=document.getElementById('vat').value;
	var tax=document.getElementById('tax').value;
	var plge=document.getElementById('plge').value;
	var t_amount=document.getElementById('t_amount').value;
	var year=document.getElementById('year').value;
	if(rent!="")
	{
    document.getElementById('val').innerHTML='';
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	
    $("#content3").load("lease_letter.php",{rs:elem,rent:rent,t_rent:t_rent,vat:vat,tax:tax,plge:plge,t_amount:t_amount,year:year});
	}
	else
	document.getElementById('val').innerHTML=" * Required";
}
function issue_letter(elem)
{
	
	
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("issue_letter.php",{rs:elem});
	
}
function get_member(elem)
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("approved_member.php",{rs:elem});
}

function pay_accept(elem)
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("payment_accepted.php",{rs:elem});
}
function rent_reciepts(elem)
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("rent_reciept.php",{rs:elem});
}
function show_letter(elem)
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("lease_letter_created.php",{id:elem});
}
function trans()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("transaction_records.php");
}
function daily()
{
    $("#daily").slideToggle("slow");
}

function monthly()
{
    $("#monthly").slideToggle("slow");
  }
  function transaction()
  {
	  var date1=document.getElementById('datepick').value;
	  var date2=document.getElementById('datepicker').value;
	  if(date1.length==0 || date2.length==0)
	  {
		  document.getElementById('error').innerHTML="Please select the Date Fields";
		  document.getElementById('printex').style.display='none';
		   document.getElementById('month').innerHTML="";
	  }
	  else
	 {
		 document.getElementById('error').innerHTML="";
		 document.getElementById('printex').style.display='block';
		 $("#month").load("monthly_trans.php",{date1:date1,date2:date2});
	 }
  }
  