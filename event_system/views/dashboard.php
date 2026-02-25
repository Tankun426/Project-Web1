<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก - Event Management</title>
    <style>
        * { box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f0f2f5; margin: 0; }
        
        /* แถบเมนูด้านบน */
        .navbar { background-color: white; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
        .nav-brand { font-size: 20px; font-weight: bold; color: #1877f2; }
        .user-info { display: flex; align-items: center; gap: 15px; }
        .btn-logout { background-color: #e4e6eb; color: #050505; text-decoration: none; padding: 8px 16px; border-radius: 6px; font-weight: 600; font-size: 14px; transition: background-color 0.2s; }
        .btn-logout:hover { background-color: #d8dadf; }

        /* ส่วนเนื้อหาตรงกลาง */
        .container { max-width: 1000px; margin: 40px auto; padding: 0 20px; }
        .welcome-card { background-color: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); margin-bottom: 20px; }
        .welcome-card h2 { margin-top: 0; color: #1c1e21; }
        
        /* กล่องเมนูสำหรับไปหน้าอื่นๆ (เตรียมไว้ทำต่อ) */
        .menu-grid { display: flex; gap: 20px; margin-top: 20px; flex-wrap: wrap; }
        .menu-item { flex: 1; min-width: 250px; background-color: #f8f9fa; border: 1px solid #dddfe2; padding: 20px; border-radius: 8px; text-align: center; text-decoration: none; color: #1c1e21; font-weight: 600; transition: transform 0.2s, box-shadow 0.2s; }
        .menu-item:hover { transform: translateY(-3px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-color: #1877f2; color: #1877f2; }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="nav-brand">Event Management</div>
        <div class="user-info">
            <span style="font-weight: 600;">คุณ <?php echo htmlspecialchars($_SESSION['name']); ?></span>
            <a href="../controllers/UserController.php?action=logout" class="btn-logout">ออกจากระบบ</a>
        </div>
    </div>

    <div class="container">
        <div class="welcome-card">
            <h2>ยินดีต้อนรับเข้าสู่ระบบ!</h2>
            <p style="color: #606770; line-height: 1.6;">คุณสามารถค้นหากิจกรรมที่น่าสนใจเพื่อเข้าร่วม หรือจะสร้างกิจกรรมของคุณเองเพื่อชวนเพื่อนๆ มาร่วมสนุกก็ได้</p>
            
            <div class="menu-grid">
                <a href="#" class="menu-item">📅 ดูกิจกรรมทั้งหมด</a>
                <a href="#" class="menu-item">➕ สร้างกิจกรรมใหม่</a>
                <a href="#" class="menu-item">📋 กิจกรรมที่ฉันเข้าร่วม / สร้าง</a>
            </div>
        </div>
    </div>

</body>
</html>