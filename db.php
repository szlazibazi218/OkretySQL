<?php
$host = '127.0.0.1';
$user = 's257';
$password = 'C3stl1poLose';
$database = 'dbs257';

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
}
?>
