<?php
require_once "conn.php";
$nameform= $_POST['name'];
$emailform= $_POST['email'];
$phoneform= $_POST['phone'];
$name='"'.$mysqli->real_escape_string($nameform).'"';
$email='"'.$mysqli->real_escape_string($emailform).'"';
$phone='"'.$mysqli->real_escape_string($phoneform).'"';
$query = "INSERT INTO users (name,email,phone) VALUES ($name,$email,$phone)";
$result=$mysqli->query($query);
if($result){
    require "reged/reged.html"
    echo "Успех";
}else{
    echo "ПИЗДЕЦ";
}
$mysqli->close();