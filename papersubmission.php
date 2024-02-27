
<?php

	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die('could not connect:'.mysql_error());
	}
	mysql_select_db("rsa_db",$con);

	$qry="select * from papersubmission where submissionid=(select max(submissionid) from papersubmission)";
	
                  $result=mysql_query($qry,$con);
	$row=mysql_fetch_array($result);
	$or=$row['submissionid'];
if(!empty($or))
{
$tem= ++$or;
$temp="$tem";
}
else
{
$temp='SID'."001";
}
?>

<?php

include_once 'dbconnection.php';
if(isset($_POST['submit']))
{    
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	//$file_size = $_FILES['file']['size'];
//$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	//$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	  


	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
	extract($_POST);
	   	
		$suffix=$_POST['suffix'];
	 $name=$_POST['name'];
     $designation=$_POST['designation'];
 $dept=$_POST['dept'];
  $uni=$_POST['uni'];
   $article=$_POST['article'];
    $atype=$_POST['atype']; 
	$author=$_POST['author'];
	 $subid=$_POST['subid'];

$sql="INSERT INTO papersubmission(suffix,name,designation,dept,uni,article,atype,author,file,submissionid) VALUES('$suffix','$name','$designation','$dept','$uni','$article','$atype','$author','$final_file','$subid')";
		
		mysql_query($sql);
		
		?>
		<script>
		alert('Successfully Papersubmitted');
        window.location.href='papersubmit.php?success';
        </script>
		<script>
		alert('Your Submission ID Is:<?php echo $temp ; ?>');
        window.location.href='papersubmit.php?success';
        </script>
		<?php
	}
	
	
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='papersubmit.php?fail';
        </script>
		<?php
	}
}


?>
<div class="form-row">
                <div class="form-label"> Your Submission ID Is:</div>
                <div class="form-field">
                    <input type="text" name="subid" readonly="readonly"value="<?php echo $temp ; ?>" />
                </div>
            </div>