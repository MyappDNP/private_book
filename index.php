<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-footer-fixed" dir="ltr" data-theme="theme-bordered" data-assets-path="/webDNP/assets/" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>ระบบฐานข้อมูลเพื่อการตัดสินใจในการบริหารจัดการอุทยานแห่งชาติ</title>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="/webDNP/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/webDNP/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/webDNP/assets/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="/webDNP/assets/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" type="text/css" href="/webDNP/assets/css/theme-bordered.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="/webDNP/assets/css/demo.css" />
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/jquery-datetime-picker/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="/webDNP/assets/css/my_style.css" />

    <!-- Helpers -->
    <script src="/webDNP/assets/js/helpers.js"></script>
    <script src="/webDNP/assets/js/template-customizer.js"></script>
    <script src="/webDNP/assets/js/config.js"></script>

</head>
<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
        <div id="leftMenu"></div>
        <script src="/webDNP/assets/js/leftMenu.js"></script>

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
        <img src="/webDNP/assets/img/logo/logo-dnp.png" width="45" height="45">
        <span class="d-none d-md-inline-block"><h6>ระบบฐานข้อมูลเพื่อการตัดสินใจในการบริหารจัดการอุทยานแห่งชาติ</h6></span>
</div>
</div> 
<ul class="navbar-nav flex-row align-items-center ms-auto"></ul>
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
<span class="text-muted fw-light">ข้อมูลครุภัณฑ์คอมพิวเตอร์ /</span> ข้อมูลทั้งหมด</h6>

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
            <input type="search" class="form-control date_search" placeholder="วันที่" autocomplete="off" value="" id="txt_riskreportdate" onkeyup="return false;" onkeydown="return false;">
            <button type="button" class="btn btn-outline-primary" id="btn_search">ค้นหา</button>

              <a href="index.php" class="btn btn-outline-primary">ยกเลิก</a>
            </div>
          </div>
          
          <table id="data-table" class="table border-top dataTable no-footer dtr-column table-sm table-hover">
            <thead>
              <tr>
                <th class="cell-fit">ลำดับ</th>
                <th>สำนักบริหารพื้นที่อนุรักษ์</th>
                <th>ประเภท</th>
                <th>อุทยานแห่งชาติ/วนอุทยาน</th>
                <th>ประเภทครุภัณฑ์คอมพิวเตอร์</th>
                <th>ปี พ.ศ.</th>
                <th>หมายเลขครุภัณฑ์</th>
                <th>ยี่ห้อ</th>
                <th>CPU</th>
                <th>ลักษณะการใช้งาน</th>
                <th>สถานะ</th>
              </tr>
            </thead>
            <tbody>
              <!-- Data will be loaded here -->
            </tbody>
          </table>
          

   <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/webDNP/pages/10/01/1001.php')
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

<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img01">
</div>

<div id="card_risk_pic_add" class="card p-0 me-1 border-0" style="width: 100px;" hidden>
<img class="rounded img_risk" />
<div class="card-body p-0">
<a href="#" id="btn_del" class="btn btn-xs btn-outline-danger w-100">ลบ</a>
<input name="uploadfile[]" type="file" hidden>
</div>
</div>                    </div>
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


<!-- Modal -->
<div class="modal fade" id="modalDelete" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title">ยืนยันการลบข้อมูล</h5>
    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="modal"
        aria-label="Close"
    ></button>
</div>

<div class="modal-body">
    ต้องการลบข้อมูลนี้หรือไม่?
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
        ยกเลิก
    </button>
    <button type="button" class="btn btn-success" id="btn_ok">ตกลง</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="modalAlert" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">อัพโหลดรูปภาพ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col mb-0" id="modalText">123 ทดสอบ</div>
        </div>
         
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            ปิด
        </button>
    </div>
</div>
</div>
</div>

    <script src="/webDNP/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/webDNP/assets/vendor/libs/popper/popper.js"></script>
    <script src="/webDNP/assets/vendor/js/bootstrap.js"></script>
    <script src="/webDNP/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/webDNP/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="/webDNP/assets/js/menu.js"></script>
    <script src="/webDNP/assets/vendor/libs/select2/select2.js"></script> 
    <script src="/webDNP/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="/webDNP/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="/webDNP/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
    <script src="/webDNP/assets/vendor/libs/moment/moment.js"></script>
    <script src="/webDNP/assets/vendor/libs/datatables/jquery.dataTables.js"></script>
    <script src="/webDNP/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="/webDNP/assets/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
    <script src="/webDNP/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
    <script src="/webDNP/assets/vendor/libs/datatables-buttons/datatables-buttons.js"></script>
    <script src="/webDNP/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"></script>
    <script src="/webDNP/assets/vendor/libs/jquery-datetime-picker/jquery.datetimepicker.js"></script>
    <script src="/webDNP/assets/js/datepicker_config.js"></script>
    <script src="/webDNP/assets/js/main.js"></script>
    <script src="/webDNP/assets/js/pages/menu_accident_risk.js"></script>
    <!--<script src="/webDNP/pages/10/01/search.js"></script>-->

<!--ช่องค้นหาใน รายชื่อต่างๆ-->
<script>
    // สร้าง URL ตามค่าการค้นหา
    function url_search() {
        var search = document.querySelector('.search').value;
        var date_search = document.querySelector('.date_search').value;
        var url = "/webDNP/pages/10/01/1001.php";

        if (search) {
            url += "?search=" + encodeURIComponent(search);
        }

        if (date_search) {
            url += (search ? "&" : "?") + "date=" + encodeURIComponent(date_search);
        }

        return url;
    }

    // ฟังก์ชันแสดงข้อมูลในตาราง
    function renderTable(data) {
        const tableBody = document.querySelector('#data-table tbody');
        tableBody.innerHTML = '';  // ล้างข้อมูลเก่าออกจากตาราง

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
    }

    // เมื่อหน้าเว็บโหลดเสร็จ
    document.addEventListener('DOMContentLoaded', function() {
        fetch(url_search())  // เรียกฟังก์ชันเพื่อดึงข้อมูลทั้งหมดในตอนแรก
            .then(response => response.json())
            .then(data => {
                renderTable(data);  // เรียกฟังก์ชันเพื่อแสดงข้อมูลในตาราง
            })
            .catch(error => console.error('Error:', error));
    });

    // เมื่อผู้ใช้คลิกปุ่มค้นหา
    document.querySelector('#btn_search').addEventListener('click', function(event) {
        event.preventDefault(); // ป้องกันการรีเฟรชหน้า
        fetch(url_search())  // เรียกข้อมูลใหม่ตามค่าที่กรอก
            .then(response => response.json())
            .then(data => {
                renderTable(data);  // อัพเดตข้อมูลในตาราง
            })
            .catch(error => console.error('Error:', error));
    });

    // เมื่อผู้ใช้กดปุ่ม Enter ในช่องค้นหา
    document.querySelectorAll('input[type=search]').forEach(input => {
        input.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();  // ป้องกันการส่งฟอร์ม
                fetch(url_search())  // เรียกข้อมูลใหม่ตามค่าที่กรอก
                    .then(response => response.json())
                    .then(data => {
                        renderTable(data);  // อัพเดตข้อมูลในตาราง
                    })
                    .catch(error => console.error('Error:', error));
            }
        });
    });

    $(function() {
        $('.select2').each(function() {
            var e = $(this);
            e.wrap('<div class="position-relative"></div>'), e.select2({
                dropdownParent: e.parent()
            });
        });
    });

    function modal_delete(id) {
        $("#modalDelete").modal('show');
        $("#modalDelete #btn_ok").click(function () {
            $("#form_delete #hid_id_delete").val(id);
            $("#modalDelete").modal('hide');
            $("#form_delete").submit();
        });
    }

    function modal_alert(title, text) {
        $("#modalAlert #modalTitle").html(title);
        $("#modalAlert #modalText").html(text);
        $("#modalAlert").modal('show');
    }
</script>




</body>


</html>