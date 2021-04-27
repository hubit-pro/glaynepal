<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'glaynepal');
if($con)
{
	echo "you are connected";
}
else
{
	echo "you are not connected";
}
?>