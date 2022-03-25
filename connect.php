<?php
$SERVER='localhost';
$user="root";
$pass="";
$database="binhluan";
$conn= new mysqli($SERVER, $user,$pass,$database);
if($conn) {
    mysqli_query($conn,"Set name 'utf8'");
    echo'Đã Kết nối Mysql <br>';
}
else
{
    echo"Bạn đã kết nối thất bại";
}
?>