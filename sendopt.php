<?php
$authKey = "YourAuthKey";
$senderID = "HLTECH";

if(isset($_POST['submit']))
{
    $mobileNumber = $_POST['phone'];

    $message = "Wecome to HL TECH PVT LTD: ***";

    $postData = array(
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'sender' => $senderID,
        'route' => "4"
    );

$curl =  "https://control.msg91.com/api/v5/otp?template_id=&mobile=&authkey=&realTimeResponse=";

}

?>