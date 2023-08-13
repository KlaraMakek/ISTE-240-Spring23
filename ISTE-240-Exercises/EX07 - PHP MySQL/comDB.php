<!--
    Simple database form
    @author Klara Makek
    @version 2023, 3
    ISTE 240 EX07
-->
<?php
// Connecting

$host = "localhost";
$username = "km9654";
$password = "12345678";
$dbname = "txtCom";
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed:" . mysqli_connect_errno());
}

$sql = "CREATE TABLE comments(
    id int(4) UNSIGNED AUTO_INCREMENT PRIMARY KRY,
    name VARCHAR(25) NOT NULL,
    comments VARCHAR(60) NOT NULL,
    date datetime NOT NULL
)";

if(mysqli_query($conn, $sql)){
    echo "Table is created!";
}else{
    echo "Table can't create!" . mysqli_error($conn);
}

mysqli_close($conn);

?>