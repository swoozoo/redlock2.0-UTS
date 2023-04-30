<?php
$servername = "172.18.0.2";
$username = "root";
$password = "root";
$dbname = "redlock";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Nama, Alamat, Jabatan FROM users";
$result = $conn->query($sql);

$usercounter = 0;
while ($row = $result->fetch_assoc()){
    $usercounter++;
}

if ($result->num_rows > 0) {
    echo "Total Users: " . $usercounter;
    echo "ID  ";
    echo "Nama  ";
    echo "Alamat  ";
    echo "Jabatan";
    echo "</br>";
    while($row = $result->fetch_assoc()) {
        echo $row["ID"] . "  ";
        echo $row["Nama"] . "  ";
        echo $row["Alamat"] . "  ";
        echo $row["Jabatan"] . "  ";
        echo "</br>";
    }
} else {
    echo "No results";
}
$conn->close();
?>