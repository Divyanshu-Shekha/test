 <?php
include("db1.php");
if(isset($_GET['x']))
{
	$sno=$_GET['x'];
$x="delete from notes where sno='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
	header("location:delete view for notes.php");
}
else
{
	echo"not deleted";
}
}
?>