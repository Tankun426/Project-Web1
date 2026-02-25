<?php
// ไฟล์: models/UserModel.php
require_once '../config/db.php';

// ตัด $role ออกจาก parameter
function registerUser($name, $email, $password, $gender, $dob, $province) {
    global $conn;
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // ตัดช่อง role ออกจาก SQL
    $sql = "INSERT INTO users (name, email, password, gender, date_of_birth, province) 
            VALUES (?, ?, ?, ?, ?, ?)";
            
    $stmt = $conn->prepare($sql);
    // เปลี่ยนตัวย่อประเภทข้อมูลให้เหลือ 6 ตัว (s = string)
    $stmt->bind_param("ssssss", $name, $email, $hashed_password, $gender, $dob, $province);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function loginUser($email) {
    global $conn;
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}
?>