<?php
session_start();
if(isset($_SESSION['login'])){
    header("location.dashboart.php");
}
?>
<h3>Login Form</h3>
<form action="login.php" method="post">
    <input type="email" name="email" placeholder="Enter Email" required><br>
    <input type="password" name="password" placeholder="Enter Password" required><br>
    <button type="submit">Login</button><br>
    
</form>