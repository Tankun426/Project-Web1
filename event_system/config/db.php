<?php
// ไฟล์: config/db.php
$host = "localhost";
$user = "root";
$pass = ""; // รหัสผ่านตั้งต้นของ XAMPP จะว่างเปล่า
$dbname = "event_db";

$conn = new mysqli($host, $user, $pass, $dbname);

// เช็คการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// ตั้งค่าให้รองรับภาษาไทย
$conn->set_charset("utf8");
?>