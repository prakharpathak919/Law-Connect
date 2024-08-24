<?php

$checkotp=$_post['checkotp'];
$otp=$_post['otp'];

if($checkotp==$otp){
    echo "OTP Verification and Signup completed";
}else{
    echo "Incorrect OTP";
}

?>