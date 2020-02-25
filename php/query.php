<?php

//Query Check

//Check if it exists
if (isset($_GET['id']) && !preg_match("/[a-z]/i", $_GET['id'])) {
    //Global Variables
    global $id;
    global $unixedSnowflake;
    global $gmt;

    //Get URL query
    $id = $_GET['id'];

    //ID to unixMS using Discord's epoch
    $unixedSnowflake = ((int)$id >> 22) + 1420070400000;

    //unixMS to GMT
    $gmt = gmdate("d/m/Y H:i:s", $unixedSnowflake / 1000);
} elseif (isset($_GET['id']) && preg_match("/[a-z]/i", $_GET['id'])) {
    header('Location:index');
    exit;
}
?>
