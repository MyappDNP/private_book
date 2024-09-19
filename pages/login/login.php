<?php
require 'vendor/autoload.php';

use Google\Client;
use Google\Service\Sheets;

session_start();

if (isset($_POST['btn_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ตั้งค่า Google Client
    $client = new Client();
    $client->setAuthConfig('credentials.json');
    $client->addScope(Sheets::SPREADSHEETS_READONLY);

    // สร้างบริการ Google Sheets
    $service = new Sheets($client);

    // ใส่ ID ของ Spreadsheet ของคุณ
    $spreadsheetId = '1dRwcM5EljmXpt1YGZ9EDi2wHT2YdA2Ec28N0HJ5ngMY';
    $range = 'Sheet1!D2:E';  // สมมติว่าข้อมูลผู้ใช้เริ่มจาก A2 ถึง B (A = username, B = password)

    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();

    if (empty($values)) {
        echo "ไม่พบข้อมูลใน Google Sheets";
    } else {
        $isValidUser = false;
        foreach ($values as $row) {
            if ($row[0] === $username && $row[1] === $password) {
                $isValidUser = true;
                break;
            }
        }

        if ($isValidUser) {
            $_SESSION['username'] = $username;
            echo "ล็อกอินสำเร็จ!"; // หรือเปลี่ยนเป็น redirect ไปที่หน้าอื่น
        } else {
            echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        }
    }
}
?>
