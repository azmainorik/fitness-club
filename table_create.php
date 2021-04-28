 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness_club";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE trainer (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
train_from VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
gender  VARCHAR(50) NOT NULL,
start_time VARCHAR(50) NOT NULL,
finish_time VARCHAR(50) NOT NULL,
age INT(100) NOT NULL,
Training_day VARCHAR(50) NOT NULL


)";

if ($conn->query($sql) == TRUE) {
    echo "Table trainer created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}





// sql to create table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL

)";

if ($conn->query($sql) == TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE membership (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
type VARCHAR(30) NOT NULL,
price VARCHAR(50) NOT NULL,
steam VARCHAR(50) NOT NULL,
locker VARCHAR(50) NOT NULL

)";



if ($conn->query($sql) == TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}



$sql = "CREATE TABLE admin (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
AdminID VARCHAR(30) NOT NULL,

password VARCHAR(50) NOT NULL

)";

if ($conn->query($sql) == TRUE) {
    echo "Table admin created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}



$sql = "CREATE TABLE opentime (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
gender VARCHAR(30) NOT NULL,
stime VARCHAR(50) NOT NULL,
etime VARCHAR(50) NOT NULL,
day VARCHAR(50) NOT NULL

)";



if ($conn->query($sql) == TRUE) {
    echo "Table opentime created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}






$conn->close();


?> 