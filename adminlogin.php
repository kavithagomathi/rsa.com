
<?php
 //session_start();
 //$_SESSION['uname']=$_POST[uname];
include("dbconnection.php");
?>
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

  
   <style>
        *,
        *:before,
        *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        
        .form-header {
            font-size: 18px;
            border-bottom: 1px solid #f4f4f4;
            padding: 10px 0;
        }
        
        body {
            font-family: arial, verdana;
            font-size: 15px;
        }
        
        .wrapper {
            padding: 0 25px;
            width: 710px;
            border: 1px solid #666;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
            border-top: 3px solid #3c8dbc;
        }
		
		form {
		margin: 30px 0;
		}
        
        .form-label {
            float: left;
            width: 150px;
        }
        
        .form-row {
            margin: 12px 0;
        }
        
        .form-field {}
        
        input,
        textarea,
        select {
            width: 500px;
            height: 28px;
            border: 1px solid #d2d6de;
            padding: 2px 8px;
        }
        
        textarea {
            height: 50px;
        }
        
        input[type=radio],
        input[type=checkbox] {
            width: 20px;
            color: red;
            height: 14px;
        }
        
        input[type=submit],
        input[type=reset] {
            width: 100px;
            margin-right: 50px;
			background-color: #3c8dbc;
			border-color: #367fa9;
			color: #ffffff;
			cursor: pointer;
        }
		input[type=submit]:hover,
        input[type=reset]:hover {
		    background-color: #367fa9;
        }

        
        .form-field:after {
            content: '';
            display: block;
            clear: both;
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
<div style="margin-top:-20px; margin-left:70px;><p class="blink"><b>(PEER REVIEW REFEREED JOURNAL, OPEN ACCESS)</b></h4>
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


 <br />
  
<h2 align="center"> Admin Login</h2>


<div class="last_edit" style="background:#FFFFFF; height:900px;">



		<script language="javascript">

  function check()
  {
   if(document.getElementById("uname").value =="")
   {
    alert('Please Enter User name !!'); 
    document.getElementById("uname").focus();
    return false;
   }
   if(document.getElementById("password").value =="")
   {
    alert('Please Enter Password !!'); 
    document.getElementById("password").focus();
    return false;
   } 
   
   }
   </script>
<body>
    <div class="wrapper" style="width:690px;"  >
       
        <form action="" method="post" name="frm_login" id="frm_login" enctype="multipart/form-data">


            <div class="form-row">
                <div class="form-label">User Name</div>
                <div class="form-field">
                    <input type="text" name="uname" id="uname" placeholder="User Name" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-label">Password</div>
                <div class="form-field">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-label"> &nbsp; </div>
                <div class="form-field">
                    <input type="reset" name="reset" />
                   <input type="submit" id="submitMain" name="submitMain" value="Login" Onclick="return check(this.form)"; />
				
                </div>
            </div>
        </form>
    </div>
		
				
	<?php
 if(isset($_POST['submitMain']))
 {
   $user =$_POST['uname'];
   $password=$_POST['password'];
   
   $query = mysql_query("SELECT * FROM adminlogin WHERE username = '$user' AND password = '$password' ")
   or die(mysql_error());
   if(mysql_num_rows($query)>0)
   {
     $_SESSION['user']=$user;
     echo "<script>window.location='adminhome.php';</script>";
   }
   else
   {
     echo '<div align="center"><strong><font color="#FF0000">User Name & Password not match !!</font></Strong></div>';
   }
}
@mysql_close($con);
?>



<ul class="right_menu">

<!--<li><b>Special issue On : <a href="http://airccse.org/journal/sicfp19-2.html" target="blank">"Cloud Computing: Services and Architecture"</a></b></li>-->




 <br />
</ul>





 
 
 


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
<td style="text-align: left;">Thesis/ Dissertation chapters</td>
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
<th style="text-align: left;">Time taken  for decision (Accept/Reject/Revision)</th>

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