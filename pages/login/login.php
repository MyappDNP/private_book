<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // โหลดข้อมูล CSV
    $csvUrl = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vT6fGnQkaVEra_SR_KymGaQ2_pHOBVo6qCCC_Jqnt7zO9lr7LMSgiv4DtF8-ngkcMG-vBn1VZuhGkIk/pub?gid=0&single=true&output=csv';
    $csvData = file_get_contents($csvUrl);
    $rows = array_map('str_getcsv', explode("\n", $csvData));
    
    // รับค่าจากฟอร์ม
    $username = $_POST['username'];
    $password = $_POST['password'];

    $isValidUser = false;
    foreach ($rows as $row) {
        if (count($row) < 2) continue;
        if ($row[3] === $username && $row[4] === $password) {
            $isValidUser = true;
            break;
        }
    }

    if ($isValidUser) {
        // เริ่มเซสชันและบันทึกข้อมูลผู้ใช้
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // ตรวจสอบ redirect_url
        $redirectUrl = isset($_POST['redirect_url']) ? $_POST['redirect_url'] : '/private_book/index.php';
        error_log("Redirecting to: $redirectUrl"); // ดูใน error log

        // เปลี่ยนเส้นทาง
        header("Location: $redirectUrl");
        exit; // ใช้ exit หลัง header
    } else {
        echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
}
?>
