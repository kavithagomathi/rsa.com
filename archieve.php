

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--meta tags-->
<meta http-equiv="content-language" content="en-us" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="text/html; charset=utf-8"/>

<style type="text/css">
.imagess
{

	height:90px;
	 text-align:left;
	 margin:0px 5px 2px 8px;
	float:right;
	border:none;
}
a:visited
{
color:#60F;
}
ul.right_ul
{
		margin-left:0px;padding-left:15px;
}
#right table,#right th,#right td {
    border: 1px solid #555;
    border-collapse: collapse;
    text-align:center;
}
#right table b{
font-size:110%;
}
.rdd
{
text-align: center;
    background: #f2f2f2;
    color: #000;
    font-weight: 700;
    width: 130px;
    height: 100px;
    border-radius: 100%;
box-shadow: inset 1px 0px 22px 3px #4080ca;
    font-family: 'Oswald', sans-serif;
    border: 5px solid #1f8ea3;
    margin: 5% auto;
    line-height: 110px;
}

</style>
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 50px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-top:18px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  margin-left:-40px;
  text-align:left;
  
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<?php
$conn=new PDO('mysql:host=localhost; dbname=rsa_db', 'root', '') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
  // $caption1=$_POST['caption'];
  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
	while($c == 0){
    	$i++;
    	$reversedParts = explode('.', strrev($name), 2);
    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
    	$chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
    	if($chk2 == 0){
    		$c = 1;
    		$name = $tname;
    	}
    }
}
 $move =  move_uploaded_file($temp,"upload/".$fname);
 if($move){
 	$query=$conn->query("insert into upload(name,fname)values('$name','$fname')");
	if($query){
	header("location:download1.php");
	}
	else{
	die(mysql_error());
	}
 }
}
?>
<link rel="icon" type="image/ico" href="/ico.ico"/>
<title>International Journal of Innovative Research in Science & Technologies (IJIRST)</title>
<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
<div id="wap">
<div id="page">
   <div id="top" style="background-color:#0033CC; height:150px; width:959px; margin-top:7px;">

<table width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="3" valign="top"></td></tr>

<img src="img/logo.png" height="150px;" width="150px;" style="margin-left:-810px;">

<h2 style="width:800px; margin-top:-100px; margin-left:120px;"> INTERNATIONAL JOURNAL OF INNOVATIVE RESEARCH IN SCIENCE AND TECHNOLOGIES(IJIRST) </h2>
<div style="margin-top:-20px; margin-left:70px;><p class="blink"><b>(PEER REVIEW REFERED JOURNAL, OPEN ACCESS)</b></h4>
					</b></p></div>
 <div style="margin-top:-20px; margin-left:700px;><p class="blink"><b>ISSN: XXXX - XXXX</b></h4>
					</b></p></div>
</table>
</div>
<div id="menu" style="margin-top:2px;">



<a href="index.html">Home</a>  
<a href="about.html">About Us</a>              
<a href="editor.html">Editor</a> 
<a href="archieve.php">Archieve</a>
<a href="submission.php">Submission</a>  
    
  	<li class="dropdown">
  <a href="#">More</a>
			 
	
	
	 <ul class="dropdown-content">
  
   <a href="guideliness.html">Guideliness</a>
   
   
   
    <a href="download1.php">Download</a>
    <a href="reviewer.html">Reviewer</a>
	<a href="statement.html">Statement</a>
    <a href="publisher.html">Publisher</a>
    <a href="privacypolicies.html">Privacy Policies</a>
	<a href="ethics.html">Publishing Ethics</a>
    <a href="refundpolicies.html">Refund Policies</a>
  
  </ul>
   </li>

     			
        

  
 <li class="dropdown">
 <a href="register.php">Sign Up</a>
 
 </li>
  <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
				  <ul class="dropdown-content">
  
   <a href="adminlogin.php">Admin Login</a>
   
   
   
    <a href="userlogin.php">User Login</a>
    
  </ul>
   </li>
 
 
          
</div>
        <div id="content">
<div id="left">
<h2 align="center">2024 (Volume 1 , Issue 1)</h2>



 <br />
  

<div class="last_edit">
<table border="4" width="100%" style="font-family: Geneva, Arial, Helvetica, sans-serif; color:#000000; font-size:12px;text-align: center; background-color:#FFFFFF; ">


				
					<th width="40%" align="center" style="font-size:16px; font-weight:bold;">Published Article</th>
				<th width="30%"  style="font-size:16px; font-weight:bold;">Download Article</th>
				<th width="30%"  style="font-size:16px; font-weight:bold;">Download Certificate</th>	
				
			


<?php
			$query=$conn->query("select * from upload order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
			?>
			<tr>
			
				<td style="font-size:12px; color:#000000;">
					&nbsp;<?php echo $name ;?>
				</td>
				<td>
				
					<button class="alert-success" style="margin-left:-40px;"><a style=" font-weight:bold;" href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Article</a></button>
				</td>
				<td>
				
					<button class="alert-success" style="margin-right:50px;" ><a style=" font-weight:bold;" href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Certificate</a></button>
				</td>
			</tr>
			<?php }?>
</table>

				
				
	



 


 
 
 

 <br />
 
  </div>


<!--



<center><font color="red">Special issue On : </font><a href="sicfp11.html">&quot;Recent Trends in Wireless and Mobile Networks &quot;</a><sup> New</sup><br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="sicfp10.html">&quot;Network Technologies, Applications and Systems &quot;</a><sup> New</sup></center><br />
-->

</div>
</div>
<div id="right">
<div class="menu_right">
<h2 align="center" style="background:url(img/h2.gif);">Articles Accepted</h2><br /> 

<table border="4" width="210" style="font-size:12px;">
              
<tr>
<td style="text-align: left;">Research papers </td>
</tr>
<tr>
<td style="text-align: left;">Survey papers </td></tr>
<tr>
<td style="text-align: left;">Review papers </td></tr>
<tr>
<td style="text-align: left;">Comparative studies </td></tr>
<tr>
<td style="text-align: left;">Case studies </td></tr>
<tr>
<td style="text-align: left;;">Thesis/ Dissertation chapters</td>
</tr>


</table>
</ul>
</div><br />

<div>
<table border="4" style=" color:#000000; font-size:12px;text-align: center;  ">



<tr >
<th style="text-align: left;" >Time taken to publish</th>



<td>3 Days</td>
</tr>


<tr>
<th style="text-align: left;">Time taken to complete review</th>

<td>1 Day</td>

</tr>
<tr>	
<th style="text-align: left;">Time taken  for decision  (Accept/Reject/Revision)</th>

<td>1 Day</td

></tr>
<tr>
<th style="text-align: left;">Submission deadline</th>
<td>25th of <br>every month</td>
</tr>




</tr>
</center>

</table>
</div>

<h2 align="center" style="background:url(img/h2.gif);">Health Table</h2><br />
<table width="100%" style="font-size:12px;">
<tr>

<td><b>Volume </b><br /> 1</td>
<td><b>Issue </b><br /> 1</td>
</tr>
<tr>

<td><b>Articles</b><br /> 0</td>
<td><b>Article waived </b><br /> 0</td>
</tr>
</table>






<h2 align="center" style="background:url(img/h2.gif);">Publication details</h2><br />

<ul class="right_ul" style="color: #0033CC; margin-top:-3px; font-size:12px; font-weight:bold;">



<li >Monthly Publication</li>
<li>E-Certificate</li> 

<li>Membership details</li>
<li>Call for Reviewer/ Editorial board member</li> 
<li>DOI for every accepted articles</li>
<li>Article Template/ Copyright form</li> 

<li>Indexing/ Author Guidelines</li>
<li>Aim & Scope/ Home/ Archievesr</li> 
<li>Payment Gateway(UPI-QR)</li> 

</ul>








<!--<div class="rdd" ><span style="font-size:44px;">34</span></div>-->

</div>
<script type="text/javascript">
(function(){
 var hexacode = ['#ffff00', '#ff0000', '#00ff00', '#0000ff', '#ffffff'],
 el =document.getElementById("blink").style,
 counter = -1,
 hexalen = hexacode.length;
 function auto(){
  el.color = hexacode[counter = ++counter % hexalen];
 }
 setInterval(auto, 100);
})();
</script>

<script type="text/javascript">
(function(){
 var hexacode = ['#ffff00', '#ff0000', '#00ff00', '#0000ff', '#ffffff'],
 el =document.getElementById("blink1").style,
 counter = -1,
 hexalen = hexacode.length;
 function auto(){
  el.color = hexacode[counter = ++counter % hexalen];
 }
 setInterval(auto, 100);
})();
</script>

</div>
<div class="clear"></div>

<div id="footer">


<table width="100%" >
<tr><td height="auto" colspan="2"  align="center">

<font color="white" size="2" style="
    padding-left: 145px; margin-right:200px;">
	
	
	Copyright&copy;2024 - RS Research Academy. All rights reserved.</font><br></td>
    </tr>
</table>


</div>

</div>
</div>

</div>
</body>
</html>