<?php
$email=$_post['email'];
$otp=$_post['otp'];


$to=$email;
$from="prakharpathak919@gmail.com";
$fromName="Law Connect";
$subject="OTP Authentication";
$message="Your OTP for Law Connect signup is: ".$otp;
$header='From'.$fromName.'<'.$from.'>';
if(mail($to,$subject,$message,$header)){
    $msg="Successful";
}

?>

<form action="submitotp.php" method="post">
    Enter OTP
    <input type="number" name="checkotp" placeholder="Enter OTP">
    <input type="hidden" name="otp" value="<?php echo $otp?>">
    <button type="submit">Verify</button>
</form>