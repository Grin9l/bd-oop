<?php

require_once 'classes.php';

$publications = array();


$con = mysqli_connect ("localhost","root","","mvc_site");
$result = mysqli_query($con,"SELECT * FROM news");

while ($row = mysqli_fetch_array($result)){
        $publications[] =  new $row['type'] ($row);
}