<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ - Event Management</title>
    <style>
        * { box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f0f2f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background-color: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        h2 { text-align: center; color: #1c1e21; margin-top: 0; margin-bottom: 25px; font-size: 24px; }
        .form-group { margin-bottom: 20px; }
        label { font-weight: 600; color: #606770; display: block; margin-bottom: 8px; font-size: 14px; }
        input[type="email"], input[type="password"] { width: 100%; padding: 12px; border: 1px solid #dddfe2; border-radius: 6px; font-size: 16px; transition: border-color 0.3s; }
        input[type="email"]:focus, input[type="password"]:focus { outline: none; border-color: #1877f2; box-shadow: 0 0 0 2px rgba(24,119,242,0.2); }
        .btn-primary { width: 100%; background-color: #1877f2; color: white; padding: 14px; border: none; border-radius: 6px; cursor: pointer; font-size: 16px; font-weight: bold; transition: background-color 0.3s; }
        .btn-primary:hover { background-color: #166fe5; }
        .divider { height: 1px; background-color: #dadde1; margin: 25px 0; }
        .text-center { text-align: center; font-size: 14px; color: #606770; }
        .text-center a { color: #1877f2; text-decoration: none; font-weight: 600; }
        .text-center a:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <div class="card">
        <h2>เข้าสู่ระบบกิจกรรม</h2>
        <form action="../controllers/UserController.php?action=login" method="POST">
            <div class="form-group">
                <label for="email">อีเมล</label>
                <input type="email" id="email" name="email" placeholder="Email..." required>
            </div>  
            <div class="form-group">
                <label for="password">รหัสผ่าน</label>
                <input type="password" id="password" name="password" placeholder="Password..." required>
            </div>
            <button type="submit" class="btn-primary">เข้าสู่ระบบ</button>
        </form>
        
        <div class="divider"></div>
        <div class="text-center">
            ยังไม่มีบัญชีผู้ใช้? <a href="register.php">สมัครสมาชิกใหม่</a>
        </div>
    </div>

</body>
</html>