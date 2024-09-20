<?php
session_start();

// ตรวจสอบว่าผู้ใช้ล็อกอินหรือไม่
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // เก็บ URL ปัจจุบันในเซสชัน
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];

    // หากยังไม่ได้ล็อกอิน ให้เปลี่ยนเส้นทางไปที่หน้า login.php
    header("Location: /private_book/pages/login/index.php");
    exit;
}
?>


<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-footer-fixed" dir="ltr" data-theme="theme-bordered" data-assets-path="/private_book/assets/" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>ระบบฐานข้อมูลเพื่อการตัดสินใจในการบริหารจัดการอุทยานแห่งชาติ</title>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="/private_book/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/private_book/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/private_book/assets/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="/private_book/assets/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" type="text/css" href="/private_book/assets/css/theme-bordered.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="/private_book/assets/css/demo.css" />
    <link rel="stylesheet" href="/private_book/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/private_book/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="/private_book/assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="/private_book/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <link rel="stylesheet" href="/private_book/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="/private_book/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="/private_book/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
    <link rel="stylesheet" href="/private_book/assets/vendor/libs/jquery-datetime-picker/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="/private_book/assets/css/my_style.css" />

    <!-- Helpers -->
    <script src="/private_book/assets/js/helpers.js"></script>
    <script src="/private_book/assets/js/template-customizer.js"></script>
    <script src="/private_book/assets/js/config.js"></script>

</head>
<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
        <div id="leftMenu"></div>
        <script src="/private_book/assets/js/leftMenu.js"></script>

<!-- Layout container -->
<div class="layout-page">
    <!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
<i class="bx bx-menu bx-sm"></i>
</a>
</div>

<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
<div class="navbar-nav align-items-center">
<div class="nav-item navbar-search-wrapper mb-0">
        <img src="/private_book/assets/img/logo/logo-dnp.png" width="45" height="45">
        <span class="d-none d-md-inline-block"><h6>ระบบฐานข้อมูลเพื่อการตัดสินใจในการบริหารจัดการอุทยานแห่งชาติ</h6></span>
</div>
</div> 

<ul class="navbar-nav flex-row align-items-center ms-auto">
<!-- User -->
    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <div class="circle-image w-px-40 h-px-40" style="background-image:url('/private_book/assets/img/logo/logo-dnp.png');"></div>
                        <!-- <img src="" alt class="w-px-40 h-auto rounded-circle"> -->
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="pages-account-settings-account.html">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <div class="circle-image w-px-40 h-px-40" style="background-image:url('../../assets/img/avatars/avatar.jpg?t=1726803042');"></div>
                                        <!-- <img src="" alt class="w-px-40 h-auto rounded-circle"> -->
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">นางสาวกิตติวรา เที่ยงกระโทก</span>
                                    <small class="text-muted">admin9</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="https://parkaccident.dnp.go.th/nprk_admin/pages/users/profile/">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">ข้อมูลส่วนตัว</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="https://parkaccident.dnp.go.th/nprk_admin/pages/password/change/">
                            <i class="bx bx-key me-2"></i>
                            <span class="align-middle">เปลี่ยนรหัสผ่าน</span>
                        </a>
                    </li>
                    <li hidden>
                        <a class="dropdown-item" href="pages-account-settings-account.html">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">ตั้งค่า</span>
                        </a>
                    </li>
                    
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/private_book/pages/login/logout.php">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">ออกจากระบบ</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->

</ul>
</div>

<!-- Search Small Screens -->
<div class="navbar-search-wrapper search-input-wrapper  d-none">
<input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
<i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
</div>
</nav> 

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h6 class="fw-bold">
<span class="text-muted fw-light">ข้อมูลหนังสือและคู่มือสำหรับเจ้าหน้าที่ /</span> ข้อมูลทั้งหมด</h6>

<div class="card">
    <div class="card-datatable table-responsive">
      <div class="dataTables_wrapper dt-bootstrap5 no-footer">
        <div class="row ms-2 me-3">
          <div class="col-12 col-md-4 d-flex align-items-center justify-content-center justify-content-md-start gap-2">
            <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start mt-md-0 mt-3">
              <div class="dt-buttons">
                <a class="dt-button btn btn-primary" href="add.php">
                  <i class="bx bx-plus me-md-2"></i>
                  <span class="d-md-inline-block d-none">เพิ่มข้อมูล</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-8 d-flex align-items-center justify-content-end flex-column flex-md-row pe-3 gap-md-2">
            <div class="dataTables_filter">
            <input type="search" class="form-control search" placeholder="ค้นหา..." value="" id="search_input">
            <!--<input type="search" class="form-control date_search" placeholder="วันที่" autocomplete="off" value="" id="txt_riskreportdate" onkeyup="return false;" onkeydown="return false;">-->
            <button type="button" class="btn btn-outline-primary" id="btn_search">ค้นหา</button>

              <!--<a href="index.php" class="btn btn-outline-primary">ยกเลิก</a>-->
            </div>
          </div>
          
            <div class="container mt-5">

        <div class="row g-4" id="books-container">
            <!-- หนังสือแต่ละเล่มจะถูกเพิ่มที่นี่ -->
        </div>
            </div>

    <style>
        .card {
            height: 100%;
        }
        .card img {
            width: 100%; /* ให้รูปภาพมีความกว้างเต็มบัตร */
            height: 100%px; /* ตั้งค่าความสูงของรูปภาพ */
            object-fit: cover; /* ครอบรูปภาพให้พอดีกับพื้นที่โดยไม่เสียสัดส่วน */
        }
        .card-body {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-title {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            margin-top: auto;
        }
    </style>

<script>
        const csvUrl = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vRoZUrw9wt0XkZRkZWeXGlwtF30mIqsG6MKwmjhHsV_3TYjNzmI6H17Tew7oMvDoA4QwrNkC3xOws3G/pub?output=csv';
        let booksData = [];

        fetch(csvUrl)
            .then(response => response.text())
            .then(data => {
                const rows = data.split('\n').slice(1); // ตัดแถวหัวข้อทิ้ง
                booksData = rows.map(row => {
                    const cols = row.split(',');
                    return {
                        imageUrl: cols[6].trim(),
                        title: cols[4].trim(),
                        link: cols[5].trim()
                    };
                });
                displayBooks(booksData);
            })
            .catch(error => console.error('เกิดข้อผิดพลาดในการดึงข้อมูล:', error));

            function displayBooks(books) {
            const booksContainer = document.getElementById('books-container');
            booksContainer.innerHTML = ''; // ล้างเนื้อหาเดิม
            books.forEach(book => {
                const bookHtml = `
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card">
                            <img src="${book.imageUrl}" class="card-img-top" alt="${book.title}" onerror="this.onerror=null; this.src='placeholder.jpg';">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">${book.title}</h5>
                                <a href="${book.link}" class="btn btn-primary mt-auto">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                `;
                booksContainer.innerHTML += bookHtml;
            });
        }

        document.getElementById('btn_search').addEventListener('click', function() {
            const searchInput = document.getElementById('search_input').value.toLowerCase();
            const filteredBooks = booksData.filter(book => book.title.toLowerCase().includes(searchInput));
            displayBooks(filteredBooks);
        });
    </script>
          

   <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/private_book/pages/10/01/1001.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    const tableBody = document.querySelector('#data-table tbody');
                    data.forEach(row => {
                        const tr = document.createElement('tr');
                        tr.innerHTML = `
                            <td>${row.id}</td>
                            <td>${row.head}</td>
                            <td>${row.type_np}</td>
                            <td>${row.park}</td>
                            <td>${row.type_com}</td>
                            <td>${row.year_np}</td>
                            <td>${row.np_id}</td>
                            <td>${row.brand_id}</td>
                            <td>${row.cpu_id}</td>
                            <td>${row.purpose}</td>
                            <td>${row.status_np}</td>
                        `;
                        tableBody.appendChild(tr);
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script> -->

    <input type="hidden" name="hid_delete_pic" id="hid_delete_pic">
</form>
</div>
</div>

</div>                    
</div>
        <!-- / Content -->
        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
<div class="mb-2 mb-md-0">
&copy; ลิขสิทธิ์ข้อมูล ศูนย์เฝ้าระวังภัยคุกคามพื้นที่อุทยานแห่งชาติ สำนักอุทยานแห่งชาติ กรมอุทยานแห่งชาติ สัตว์ป่า และพันธุ์พืช
</div>

</div>
</footer>                    <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

</div>
<!-- / Layout wrapper -->

    <script src="/private_book/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/private_book/assets/vendor/libs/popper/popper.js"></script>
    <script src="/private_book/assets/vendor/js/bootstrap.js"></script>
    <script src="/private_book/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/private_book/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="/private_book/assets/js/menu.js"></script>
    <script src="/private_book/assets/vendor/libs/select2/select2.js"></script> 
    <script src="/private_book/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="/private_book/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="/private_book/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
    <script src="/private_book/assets/vendor/libs/moment/moment.js"></script>
    <script src="/private_book/assets/vendor/libs/datatables/jquery.dataTables.js"></script>
    <script src="/private_book/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="/private_book/assets/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
    <script src="/private_book/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
    <script src="/private_book/assets/vendor/libs/datatables-buttons/datatables-buttons.js"></script>
    <script src="/private_book/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"></script>
    <script src="/private_book/assets/vendor/libs/jquery-datetime-picker/jquery.datetimepicker.js"></script>
    <script src="/private_book/assets/js/datepicker_config.js"></script>
    <script src="/private_book/assets/js/main.js"></script>
    <script src="/private_book/assets/js/pages/menu_accident_risk.js"></script>
    <!--<script src="/private_book/pages/10/01/search.js"></script>-->

</body>


</html>