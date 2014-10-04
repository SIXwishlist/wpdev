<?php
$dsn = 'mysql:host=127.0.0.1;dbname=wpdev;';
$user = 'wpdev';
$password = 'hunkydory1971!';
try
{
$dbh = new PDO($dsn, $user, $password);
}
catch (PDOException $e)
{
echo 'Connection failed: ' . $e->getMessage();
}
?>