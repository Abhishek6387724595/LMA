<?php 
include("ses.php");
include("../conn.php");
if(isset($_REQUEST['id'])) // for delete
{
	$id=$_REQUEST['id'];
		    $sql = "delete from question  where id='$id'";
			if(mysqli_query($connect,$sql))
			{
			   $statusMsg = "Successfully Deleted!!";
		       echo '<script>alert("'.$statusMsg.'");</script>';
			   echo "<script>window.location = 'queslist.php';</script>";	
			}
			else
			{
			   $statusMsg = "Successfully Not Deleted!!";
		       echo '<script>alert("'.$statusMsg.'");</script>';
			   echo "<script>window.location = 'queslist.php';</script>";
			}
	}
?>