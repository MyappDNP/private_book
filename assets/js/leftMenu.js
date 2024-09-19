const layoutMenuHTML = `
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="#" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="/webDNP/assets/img/logo/logo-dnp.png" width="45" height="45">
      </span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2">ระบบงาน</span>
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <li class="menu-item active">
      <a href="#" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        หน้าหลัก
      </a>
    </li>

    <li class="menu-item">
      <a href="#" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-data"></i>
        ระบบงานอำนวยการ
      </a>
      <ul class="menu-sub">
        <li class="menu-item"><a href="/webDNP/pages/01/01" class="menu-link"><i class="menu-icon tf-icons bx bx-group"></i>ข้อมูลบุคลากร</a></li>
        <li class="menu-item"><a href="/webDNP/pages/01/02" class="menu-link"><i class="menu-icon tf-icons bx bx-building-house"></i> ข้อมูลครุภัณฑ์และสิ่งก่อสร้าง</a></li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="#" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-data"></i>
        ระบบงานแผนงานอุทยานแห่งชาติ
      </a>
      <ul class="menu-sub">
        <li class="menu-item"><a href="/webDNP/pages/02/01" class="menu-link"><i class="menu-icon tf-icons bx bx-money-withdraw"></i>ข้อมูลงบประมาณ</a></li>
        <li class="menu-item"><a href="/webDNP/pages/02/02" class="menu-link"><i class="menu-icon tf-icons bx bx-notepad"></i>ข้อมูลแผนงานและโครงการ</a></li>
        <li class="menu-item"><a href="/webDNP/pages/02/03" class="menu-link"><i class="menu-icon tf-icons bx bx-map-pin"></i>ข้อมูลหน่วยพิทักษ์อุทยานแห่งชาติและจุดสกัด</a></li>
        <li class="menu-item"><a href="/webDNP/pages/02/04" class="menu-link"><i class="menu-icon tf-icons bx bx-archive-in"></i>ข้อมูลการจัดเก็บเงินอุทยานแห่งชาติ</a></li>
        <li class="menu-item"><a href="/webDNP/pages/02/05" class="menu-link"><i class="menu-icon tf-icons bx bx-food-menu"></i>ข้อมูล ACF (Activities Criteria Formats)</a></li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="#" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-data"></i>
        ระบบงานอนุรักษ์ทรัพยากร
      </a>
      <ul class="menu-sub">
        <li class="menu-item"><a href="/webDNP/pages/03/01" class="menu-link"><i class="menu-icon tf-icons bx bx-shield-alt"></i>ข้อมูลคดี</a></li>
        <li class="menu-item"><a href="/webDNP/pages/03/02" class="menu-link"><i class="menu-icon tf-icons bx bx-book-reader"></i>ข้อมูลจัดตั้ง ขยาย และเพิกถอนพื้นที่อุทยานแห่งชาติและวนอุทยาน</a></li>
        <li class="menu-item"><a href="/webDNP/pages/03/03" class="menu-link"><i class="menu-icon tf-icons bx bx-leaf"></i>ข้อมูลทั่วไปของวนอุทยาน</a></li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="#" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-data"></i>
        ระบบงานจัดการทรัพยากร
      </a>
      <ul class="menu-sub">
        <li class="menu-item"><a href="/webDNP/pages/04/01" class="menu-link"><i class="menu-icon tf-icons bx bx-landscape"></i>ข้อมูลการขออนุญาตดำเนินกิจการเพื่อการท่องเที่ยวที่เป็นประโยชน์หรือกิจการพิเศษในอุทยานแห่งชาติและวนอุทยาน</a></li>
        <li class="menu-item"><a href="/webDNP/pages/04/02" class="menu-link"><i class="menu-icon tf-icons bx bx-video-recording"></i>ข้อมูลการขออนุญาตการถ่ายทำภาพยนตร์ วีดิทัศน์หรือสารคดี การถ่ายภาพ และการจัดกิจกรรมในพื้นที่อุทยานแห่งชาติและวนอุทยาน</a></li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="#" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-data"></i>
        ระบบงานจัดการท่องเที่ยวและนันทนาการ
      </a>
      <ul class="menu-sub">
        <li class="menu-item"><a href="/webDNP/pages/05/01" class="menu-link"><i class="menu-icon tf-icons bx bxs-tree"></i>ข้อมูลทั่วไปของอุทยานแห่งชาติ</a></li>
        <li class="menu-item"><a href="/webDNP/pages/05/02" class="menu-link"><i class="menu-icon tf-icons bx bxs-landscape"></i>ข้อมูลแหล่งท่องเที่ยวอุทยานแห่งชาติและวนอุทยาน</a></li>
        <li class="menu-item"><a href="/webDNP/pages/05/03" class="menu-link"><i class="menu-icon tf-icons bx bx-home"></i>ข้อมูลบ้านพักอุทยานแห่งชาติ</a></li>
        <li class="menu-item"><a href="/webDNP/pages/05/04" class="menu-link"><i class="menu-icon tf-icons bx bxs-megaphone"></i>ข่าวกิจกรรมในอุทยานแห่งชาติ</a></li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="#" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-data"></i>
        ระบบงานพัฒนาอุทยานแห่งชาติ
      </a>
      <ul class="menu-sub">
        <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bx-book-content"></i>ข้อมูลแบบแปลนและสิ่งก่อสร้าง</a></li>
        <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bx-trash"></i>ข้อมูลปริมาณขยะในอุทยานแห่งชาติและวนอุทยาน</a></li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="#" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-data"></i>
        ระบบงานวิจัยและพัฒนานวัตกรรมอุทยานแห่งชาติ
      </a>
      <ul class="menu-sub">
        <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bxs-detail"></i>ข้อมูลแผนการบริหารจัดการพื้นที่อุทยานแห่งชาติ</a></li>
        <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bx-file-blank"></i>ข้อมูลงานวิจัยในอุทยานแห่งชาติ</a></li>
        <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bxs-florist"></i>ข้อมูลทรัพยากรชีวภาพ (พันธุ์พืช/พันธุ์สัตว์)</a></li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="#" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-data"></i>
        ระบบงานจัดการอุทยานแห่งชาติทางทะเล
      </a>
      <ul class="menu-sub">
        <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bxs-ship"></i>ข้อมูลทรัพยากรธรรมชาติทางทะเล</a></li>
        <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bx-swim"></i>ข้อมูลแหล่งดำน้ำในเขตอุทยานแห่งชาติทางทะเล</a></li>
        <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bx-water"></i>ข้อมูลแหล่งท่าเรือลอยน้ำ/ทุ่น</a></li>
      </ul>
    </li>

                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-data"></i>
                            ระบบงานกู้ภัยอุทยานแห่งชาติ
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a href="9-1.html" class="menu-link"><i class="menu-icon tf-icons bx bxs-car-crash"></i>ข้อมูลการเกิดอุบัติเหตุ/ภัยพิบัติในอุทยานแห่งชาติ</a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bx-cross"></i>ข้อมูลลานจอดเฮลิคอปเตอร์ในอุทยานแห่งชาติ</a></li>
                        </ul>
                    </li> 

                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-data"></i>
                            ระบบงานเฝ้าระวังภัยคุกคามพื้นที่อุทยานแห่งชาติ
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bx-bar-chart-square"></i>ข้อมูลสถิตินักท่องเที่ยว</a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bxs-bus-school"></i>ข้อมูลสถิติยานพาหนะ</a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bx-braille"></i>ข้อมูลสถิติจุดความร้อนในพื้นที่อุทยานแห่งชาติ</a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bxs-flame"></i>ข้อมูลสถิติไฟป่าในพื้นที่อุทยานแห่งชาติ</a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bxs-binoculars"></i>ข้อมูลช้างป่าในอุทยานแห่งชาติ</a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bxs-plane-take-off"></i>ข้อมูลภารกิจการบินอากาศยานไร้คนขับ</a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bx-walk"></i>ข้อมูลระบบ SMART PATROL (ที่เกี่ยวข้องกับปัจจัยคุกคาม)</a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bxs-no-entry"></i>ข้อมูลติดตามพื้นที่บุกรุกในอุทยานแห่งชาติ</a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><i class="menu-icon tf-icons bx bxs-megaphone"></i>ข่าวประชาสัมพันธ์</a></li>
                        </ul>
                    </li> 

    <li class="menu-item">
      <a href="#" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user"></i>
        ผู้ใช้งานระบบ
      </a>
      <ul class="menu-sub">
        <li class="menu-item"><a href="#" class="menu-link">ผู้ใช้งานระบบ</a></li>
      </ul>
    </li>

    <li class="menu-item">
      <a href="#" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bxs-report"></i>
        รายงาน
      </a>
      <ul class="menu-sub">
        <li class="menu-item"><a href="#" class="menu-link">สรุปยอดอุบัติเหตุ</a></li>
        <li class="menu-item"><a href="#" class="menu-link">สรุปยอดประเภทอุบัติเหตุ</a></li>
        <li class="menu-item"><a href="#" class="menu-link">สรุปยอดผู้บาดเจ็บเล็กน้อย/สาหัส/ตาย</a></li>
      </ul>
    </li>
  </ul>
</aside>
`;

// Append the menu to the desired container in your HTML
document.getElementById('leftMenu').innerHTML = layoutMenuHTML;

// เพิ่ม event listener ให้กับลิงก์ทั้งหมดในเมนู
const menuLinks = document.querySelectorAll('#layout-menu .menu-link');
menuLinks.forEach(link => {
  link.addEventListener('click', function() {
    // ลบคลาส 'active' ออกจากรายการเมนูทั้งหมด
    document.querySelectorAll('#layout-menu .menu-item').forEach(item => {
      item.classList.remove('active');
    });

    // เพิ่มคลาส 'active' ให้กับรายการเมนูที่ถูกคลิก
    this.closest('.menu-item').classList.add('active');
  });
});