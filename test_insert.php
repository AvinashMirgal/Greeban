<?php
include("connect.php");
$query = "INSERT INTO test VALUES ('avi_mirgal@gmail.com', 'yashu', '1112223334', '1/4 patil chawl')";
$data = mysqli_query($con, $query);
if($data)
{
    echo "Data inserted into database";
}
?>