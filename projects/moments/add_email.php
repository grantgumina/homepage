<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../css/metro-bootstrap.css">
    <title>Moments</title>
</head>
<body>
<br /><br />
<div id="content">
    <div class="hero-unit">
<?php
include("db.php");
/**
 * Created by IntelliJ IDEA.
 * User: grant
 * Date: 2/2/13
 * Time: 7:57 PM
 * To change this template use File | Settings | File Templates.
 */

$email = mysql_real_escape_string(strip_tags($_POST['email']));
$email = addSlashes($email);

$emails = mysql_query("SELECT * from email");

if (!array_search($email, mysql_fetch_array($emails)))
{
    $sql = "INSERT INTO email(email) VALUES ('" . $email ."')";

    if (!mysql_query($sql,$con))
    {
        die('Error: ' . mysql_error());
    }
?>
    <h1>Thanks for your interest! We'll let you know when we launch.</h1>
<?php
}
else
{
?>
    <h1>Uh-oh! Looks like you're already signed up for notifications. We appreciate then enthusiasm though!</h1>
<?php
}
?>
</div>
</div>
</body>
</head
</html>
