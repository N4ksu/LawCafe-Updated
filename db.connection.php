
<?php
$host = '127.0.0.1';
$dbname = 'law_cafe_db';
$username = 'root';
$password = ''; 

//create connection
$conn = new mysqli($host, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  
}
?>
