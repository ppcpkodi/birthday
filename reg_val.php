<?php
include("connection.php");
$s_name=$_POST['s_name'];
$s_email=$_POST['s_email'];
$s_phone=$_POST['s_phone'];



$query=mysqli_query($con," INSERT INTO `mail`( `s_name`, `s_email`,'$s_phone') VALUES ('','$s_name','$s_email','$s_phone')")or die(mysqli_error($con));
if($query)
{
	?>
	<script>
alert("send successful");
window.location.href="index.html";
</script>
<?php
}
else
{
	?>
	<script>
alert("Register error");
window.location.href="register.php";
</script>
<?php
}
?>