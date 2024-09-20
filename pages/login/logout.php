<?php
session_start();
session_unset(); // ลบข้อมูลทั้งหมดในเซสชัน
session_destroy(); // ทำลายเซสชัน

// นำผู้ใช้กลับไปยังหน้า index.php
header("Location: /private_book/index.php");
exit;
?>
