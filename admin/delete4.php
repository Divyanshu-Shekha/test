 <?php
include("db1.php");
if(isset($_GET['x']))
{
	$sno=$_GET['x'];
$x="delete from signup where sno='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
	header("location:delete view for signup.php");
}
else
{
	echo"not deleted";
}
}
?>