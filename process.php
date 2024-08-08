<?php
include("config.php");

extract($_POST);
$query = "INSERT INTO `contact-form`(`firstname` , `lastname` , `email` , `phone` ,`occupation` , `message`) VALUES ('" . $firstname . "' ,' " . $lastname . "' ,' " . $email . "' , '" . $phone . "' ,'" . $occupation . "' , '" . $message . "')";
$result = $mysqli->query($query);
if (!$result) {
    echo "Something went Wrong" . $mysqli->error;
}

echo "Thanks you for submitting your Query";
$mysqli->close();


?>