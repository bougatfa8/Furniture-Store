


<?php
$con = mysqli_connect('localhost','root','','r_d');
//mysqli_connect_db($con,'adminpanel');

if($con){
	echo "connected";
}
else{
	echo "no connection found, please check conn.php";
}



?>