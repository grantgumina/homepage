<?php
// user: dbo453893016
// host: db453893016.db.1and1.com
// db name: db453893016

$con = mysql_connect("db453893016.db.1and1.com", "dbo453893016", "fleetingmoment");
if (!$con)
{?>
    <html>
    <head></head>
    <body>
    <div align="center">
        <br />
        Could not open database connection. <?=mysql_error();?>
        <br />
        <br />
        <a href = "../index.php"> Home </a>
<?php
exit(0);
}

$db = mysql_select_db("db453893016", $con);
