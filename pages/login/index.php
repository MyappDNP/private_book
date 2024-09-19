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
    <link rel="stylesheet" href="/private_book/css/menu_authen.css" />
    <!-- Helpers -->
    <script src="/private_book/assets/js/helpers.js"></script>
    <script src="/private_book/assets/js/template-customizer.js"></script>
    <script src="/private_book/assets/js/config.js"></script>
</head>
<body>
 <!-- Content -->
 <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                            <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a class="app-brand-link gap-2">
                                <img src="../../assets/img/logo/logo-dnp.png" width="100" class="navbar-brand-image">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">ยินดีต้อนรับ</h4>
                        <p class="mb-4">กรุณาลงชื่อเข้าใช้บัญชีของคุณ</p>

<form id="formAuthentication" class="mb-3" method="POST" action="login.php">
    <div class="mb-3">
        <label for="email" class="form-label">ชื่อผู้ใช้งาน</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="กรอกชื่อผู้ใช้งาน" autofocus />
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">รหัสผ่าน</label>
            <a href="../password/forgot/">
                <small>ลืมรหัสผ่าน?</small>
            </a>
        </div>
        <div class="input-group input-group-merge">
            <input type="password" id="password" class="form-control" name="password" placeholder="กรอกรหัสผ่าน" aria-describedby="password" />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
    </div>
    <div class="mb-3" hidden>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember-me" id="remember-me" />
            <label class="form-check-label" for="remember-me"> จดจำรหัสผ่านไว้ </label>
        </div>
    </div>
    <div class="mb-3">
        <input type="submit" value="ลงชื่อเข้าใช้งาน" class="btn btn-primary d-grid w-100" name="btn_submit">
    </div>
</form>

                    </div>
                </div>
                <!-- /Register -->
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

<!-- Modal -->
<div class="modal fade" id="modalDelete" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
</div>
</div>
</div>

<div class="modal fade" id="modalAlert" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
</div>
</div>
</div>

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
    <script src="/private_book/assets/js/menu_authen.js"></script>
    <!--<script src="/private_book/pages/10/01/search.js"></script>-->



</body>


</html>