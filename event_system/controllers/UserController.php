<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../models/UserModel.php'; 

if (isset($_GET['action'])) {
    
    // ==========================================
    // ส่วนที่ 1: สมัครสมาชิก (Register)
    // ==========================================
    if ($_GET['action'] == 'register') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // ลบ $role = $_POST['role']; ออก
        $gender = $_POST['gender'];
        $dob = $_POST['date_of_birth'];
        $province = $_POST['province'];

        // ลบตัวแปร $role ออกจากฟังก์ชัน
        $is_success = registerUser($name, $email, $password, $gender, $dob, $province);

        if ($is_success) {
            echo "<script>alert('สมัครสมาชิกสำเร็จ!'); window.location.href='../views/login.php';</script>";
        } else {
            echo "<script>alert('เกิดข้อผิดพลาด หรืออีเมลนี้มีผู้ใช้งานแล้ว'); window.history.back();</script>";
        }
    }

    // ==========================================
    // ส่วนที่ 2: เข้าสู่ระบบ (Login)
    // ==========================================
    if ($_GET['action'] == 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = loginUser($email);

        if ($user && password_verify($password, $user['password'])) {
            
            $_SESSION['user_id'] = $user['uid'];
            $_SESSION['name'] = $user['name'];
            // ลบการเก็บ $_SESSION['role'] ออก

            // เด้งไปหน้า Dashboard หน้าเดียวเลย เพราะทุกคนมีสิทธิ์เท่ากัน
            echo "<script>alert('เข้าสู่ระบบสำเร็จ'); window.location.href='../views/dashboard.php';</script>";

        } else {
            echo "<script>alert('อีเมลหรือรหัสผ่านไม่ถูกต้อง กรุณาลองใหม่'); window.history.back();</script>";
        }
    }

    if ($_GET['action'] == 'logout') {
        session_destroy();
        echo "<script>alert('ออกจากระบบแล้ว'); window.location.href='../views/login.php';</script>";
    }
}
?>