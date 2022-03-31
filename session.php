<?php
    session_start();
    if (isset($_SESSION['uname']))
    {
    $uname = htmlspecialchars($_SESSION['uname']);
    $fname = htmlspecialchars($_SESSION['fname']);
    $lname = htmlspecialchars($_SESSION['lname']);
    echo "Welcome back $uname.<br>
    Your full name is $fname $lname.<br>";
    }
    else echo "Please <a href=authenticate2.php>click here</a> to log in.";

?>