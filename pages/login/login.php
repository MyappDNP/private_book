<?php
require __DIR__ . '/vendor/autoload.php'; // ใช้ Composer สำหรับติดตั้ง Google Client Library

use Google\Client;
use Google\Service\Sheets;

session_start();

function getSheetData() {
    $client = new Client();
    $client->setApplicationName('Your Application Name');
    $client->setScopes([Sheets::SPREADSHEETS_READONLY]);
    $client->setAuthConfig(__DIR__ . '/../assets/credentials.json'); // ปรับเส้นทางให้ตรงกับที่เก็บไฟล์จริง

    $service = new Sheets($client);
    $spreadsheetId = '1dRwcM5EljmXpt1YGZ9EDi2wHT2YdA2Ec28N0HJ5ngMY'; // ID ของ Google Sheets
    $range = 'Sheet1!A:B'; // ช่วงของข้อมูลที่ต้องการดึง (ปรับให้ตรงกับข้อมูลจริง)

    try {
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        return $response->getValues();
    } catch (Exception $e) {
        echo 'เกิดข้อผิดพลาดในการดึงข้อมูล: ' . $e->getMessage();
        return null;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = getSheetData(); // ดึงข้อมูลผู้ใช้งานและรหัสผ่านจาก Google Sheets

    if ($users === null) {
        echo "ไม่สามารถดึงข้อมูลผู้ใช้งานได้";
        exit();
    }

    foreach ($users as $user) {
        if ($username === $user[0] && $password === $user[1]) { // สมมติว่าข้อมูลอยู่ในคอลัมน์ A และ B
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header('Location: dashboard.php'); // เปลี่ยนเส้นทางหลังจากเข้าสู่ระบบสำเร็จ
            exit();
        }
    }
    echo "ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง";
}
?>
