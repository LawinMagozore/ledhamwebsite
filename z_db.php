<?php
$con = new mysqli("localhost:3306", "ledhame1_ledhame1", "Masvingo123", "ledhame1_vogue");
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Your Website URL Goes Here
$url = "https://ledhamearthmovers.co.zw/";


//Set Blog Activation Bonus Here (It must be only Number)
$blog_bonus = "10";
//Set Article Activation Bonus Here (It must be only Number)
$art_bonus = "10";
//Set Daily Login Bonus Here (It must be only Number)
$login_bonus = "10";
//Set Currency Symbol for daily login bonus Here
$money = "$";
