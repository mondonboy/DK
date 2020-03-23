<?php

try {
    if (!isset($_SESSION['member']) || !is_a($_SESSION['member'],"Member"))
    {
        header("Location: " . Router::getSourcePath() . "index.php");

    }
session_start();
require_once Router::getSourcePath()."inc/helper_function.inc.php";

    $title = "Menu";
    ob_start();
?>

<body>

    <div class="container">
        <h1 class="w3-jumbo w3-animate-top w3-center">ระบบยืม-คืนอุปกรณ์</h1>
    </div>
    <div class="container m3">
        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
            <div class="w3-container">
                <p class="w3-center"><img src="student.png" class="w3-circle" style="height: 106px;width: 106px "alt="Avatar"></p>
                <h4 class="w3-center"><b>ข้อมูลบัญชี</b></h4>
                <p class="w3-center">xxxxxxxxxx</p>
                <p class="w3-center">I am Admin</p>
            </div>
            <div class="w3-bar-block">
                <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">หน้าแรก</a>
                <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">ขอยืมอุปกรณ์</a>
                <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">แสดงหมวดหมู่</a>
                <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">แสดงอุปกรณ์</a>
                <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">ประวัติการยืม</a>
            </div>
        </nav>
    </div>
    <div class="w3-container" style="margin-left: 300px">
        <form method="get" action="">
        <div class="w3-container w3-middle" style="margin: 10px">
            <div class="w3-row">
                        <div class="w3-col m8 w3-padding">
                            <input class="w3-input w3-border" type="text" placeholder="ค้นหาอุปกรณ์" name="order">
                        </div>
                        <div class="w3-col m2 w3-padding" style="margin: -4px 0px 0px -20px">
                            <button class="w3-button w3-block w3-padding-large w3-green w3-round-large" type="button" style="margin-left: 30px;">Search</button>
                        </div>
            </div>
        </div>
            <div class="w3-container w3-padding" style="margin: 10px">
                <input class="w3-checkbox" type="checkbox">แสดงอุปกรณ์ที่ว่างให้ยืม
            </div>
            <div class="w3-container w3-padding">
                <?php

                $header = array("ชื่ออุปกรณ์","หมวดหมู่","จำนวน","สถานะ");
                $data[0] = array("5","6","7","<button>เพิ่มลงตะกร้า</button>");
                $data[1] = array("7","8","9","<button>เพิ่มลงตะกร้า</button>");
                createTable($header,$data);
                ?>
            </div>
        </form>
<?php
$content = ob_get_clean();

include Router::getSourcePath()."templates/layout.php";
} catch (Throwable $e) { // PHP 7++
    echo "Access denied: No Permission to view this page";
    exit(1);
}
?>