<?php
require 'db.php';
$sql = "SELECT * FROM admin_users";
$res = pg_query($conn, $sql);
if(!$res){die('Query error: '.pg_last_error($conn));}
while($row = pg_fetch_assoc($res)){
    echo 'ID: '.$row['id'].' | Username: '.$row['username'].' | Password: '.$row['password']."\n";
}
?>
