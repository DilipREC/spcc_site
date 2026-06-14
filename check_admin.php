<?php
require 'db.php';
$sql = "SELECT * FROM admin_users";
$res = mysqli_query($conn, $sql);
if(!$res){die('Query error: '.mysqli_error($conn));}
while($row = mysqli_fetch_assoc($res)){
    echo 'ID: '.$row['id'].' | Username: '.$row['username'].' | Password: '.$row['password']."\n";
}
?>
