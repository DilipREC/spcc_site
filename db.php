<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "spcc_workspace"
);

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

?>
