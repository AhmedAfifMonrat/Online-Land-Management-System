// JavaScript Document
function form()
{
	document.getElementById('content').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content").load("form.php");
}
 function khajna()
 {
	 document.getElementById('content').innerHTML='';
	$("#content").load("khajna.php");
 }
 function sitakundu(){
    document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("sitakundo.php");
}
function sit_det()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("sitakundu_details.php");
	
}
function fatikchori()
{
	 document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("fatikchori.php");
}
function fat_det()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("fatikchori_details.php");
}
function mirasorai()
{
	 document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("mirasorai.php");
}
function mira_det()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("mirasorai_details.php");
}
function rawjan()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("rawjan.php");
}
function raw_det()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("rawjan_details.php");
}
function rangunia()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("rangunia.php");
}
function rangu_det()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("rangunia_details.php");
}
function hatajari()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("hatajari.php");

}
function hata_det()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("hatajari_details.php");
	
}
function sandip()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("sandip.php");
}
function sandip_det()
{
document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("sandip_details.php");	
}
function anowara()
{
document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("anowara.php");	
}
function ano_det()
{
document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("anowara_details.php");	
}
function potia()
{
document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("potia.php");	
}
function pot_det()
{
document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("potia_details.php");	
}
function chandanaish()
{
document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("chandanaish.php");	
}
function chand_det()
{
document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("chandanaish_details.php");	
}
function satkania()
{
document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("satkania.php");	
}
function sat_det()
{
document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("satkania_details.php");	
}
function lohagara()
{
document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("lohagara.php");	
}
function loha_det()
{
document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("lohagara_details.php");	
}
function boalkhali()
{
document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("boalkhali.php");	
}
function boal_det()
{
document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("boalkhali_details.php");	
}
function bashkhali()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("bashkhali.php");
}
function bash_det()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("bashkhali_details.php");
}
function mohanogor()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("mohanogor.php");
}
function moha_det()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("mohanogor_details.php");
}
function show_lease(elem)
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("mouja_details.php",{mouja:elem});
}
 function mouja_form()
{
	$("#show").load("mouja_form.php");
}
function a(id)
{
document.getElementById('search').value=document.getElementById(id).innerHTML;
$("#txtHint").hide();
$("#srch").show();
}

function show1()
{
	$("#btn1").css("background-color","#C64A03");
	$("#btn2").css("background-color","#FF3300");
	document.getElementById("btn1").checked=true;
	document.getElementById("btn2").checked=false;
}
function show2()
{
	$("#btn2").css("background-color","#C64A03");
	$("#btn1").css("background-color","#FF3300");
	document.getElementById("btn2").checked=true;
	document.getElementById("btn1").checked=false;
}
/*function check_null()
{
if(document.getElementById("btn1").checked==true)
{
var str2="hotel";

}
else if(document.getElementById("btn1").checked==false)
{
var str2="restaurent";
}
else
{
	var str2=" ";
}

alert(str2);
	
	
	
}*/

function find_hotels()
{
	document.getElementById("btn1").checked=true;
}
function find_restaurents()
{
	document.getElementById("btn1").checked=false;
}

function hotel_info()
{
	$("#solutions1").slideToggle("slow");
}
function restaurent_info()
{
	$("#solutions2").slideToggle("slow");
}
function bus_info()
{
	$("#solutions3").slideToggle("slow");
}
function flight_info()
{
	$("#solutions4").slideToggle("slow");
}
function user_info()
{
	$("#solutions5").slideToggle("slow");
}

function get_approved(a)
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("acceptance_report.php",{rs:a});
}