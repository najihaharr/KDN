
<?php
$db_name = "f34ee";
$mysql_user = "f34ee";
$mysql_pass = "f34ee";
$server_name = "localhost";

$con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
echo "";

if(!$con)
{
die("Connection Error...".mysqli_connect_error());
}

else
{
echo "";
}
?>
