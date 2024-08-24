<?php
$otp=rand(00000,99999);
?>
OTP Varification

<form action="otp.php" method="post">
    <input type="email" name="email" placeholder="Enter Email" required>
    <input type="hidden" name="otp" value="<?php echo $otp?>">
    <button type="submit">Signup</button>
</form>