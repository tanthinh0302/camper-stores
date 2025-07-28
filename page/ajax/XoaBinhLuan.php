<?php
$servername = "mysql1003.site4now.net";
$username = "abc4d5_campers";
$password = "@ThInH0302";
$dbname = "db_abc4d5_campers";
$conn = mysqli_connect($servername, $username, $password, $dbname);
	
if(!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
mysqli_query($conn,"set names utf8");


$xoaBinhLuan="DELETE FROM binhluan WHERE MaBinhLuan='".$_POST["mabinhluan"]."'";

    if(mysqli_query($conn,$xoaBinhLuan))
        echo "Xóa bình luận thành công";
    else
        echo "Đã xảy ra lỗi";
?>
