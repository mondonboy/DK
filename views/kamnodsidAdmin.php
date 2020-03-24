<?php
session_start();
include("../inc/helper_function.inc.php");
$title = "Menu";
ob_start();
?>

<body>
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">BOOKING <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="book_studio.php" class="w3-bar-item w3-button">ON Studio</a>
                <a href="book_event.php" class="w3-bar-item w3-button">On Event</a>
            </div>
        </div>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">SERVICES <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="equipmentRental.php" class="w3-bar-item w3-button">GOODS</a>
                <a href="dressesRental.php" class="w3-bar-item w3-button">DHESSES</a>
            </div>
        </div>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
        <a href="login.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">LOGOUT</a>
        <div class="w3-dropdown-hover w3-right">
            <button class="w3-button w3-padding-large w3-hover-red w3-hide-small " title="More">Mr. Jane Doe <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="profile.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Manager Profile</a>
                <a href="managerProfile.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Manager Account</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px; margin-top:46px"">

<!-- The Grid -->
<div class="w3-row-padding" style="margin-top:46px"">
<div class=" w3-red">
    <h1 class="w3-jumbo w3-animate-top w3-center">ระบบยืม-คืนอุปกรณ์</h1>
</div>
<!-- Left Column -->
<div class="w3-quarter">
    <div class="w3-green w3-text-grey w3-card-4 ">

        <!-- Sidebar/menu -->
        <nav class=" w3-green  w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>

            <div class=" w3-card">
                <p class="w3-center"><img src="../img/student.png" class="w3-circle" style="height: 106px;width: 106px "alt="Avatar"></p>
                <h4 class="w3-center"><b>ข้อมูลบัญชี</b></h4>
                <p class="w3-center"><xxxxxx></xxxxxx>xxxx</p>
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

    <br>
    <!-- End Left Column -->
</div>

<!-- Right Column -->
<div class="w3-threequarter ">
    <div class="w3-container w3-black" >
        <form method="get" action="">
            <div class="w3-middle" >
                <div class="w3-row w3-margin">
                    <div class="w3-col m8 w3-padding ">
                        <h3> จัดการกำหนดสิทธิ์ </h3>
                    </div>
                </div>
            </div>
            <div class="w3-container w3-padding">
                <?php

                $header = array("ลำดับ","username","ชื่อ","นามสกุล","สถานะ","แก้ไข");
                $data[0] = array("1","b6020503844","ผกาย","บุญ","user","<button>แก้ไข</button>");
                $data[1] = array("2","b6020502058","ดิว","ทอง","user","<button>แก้ไข</button>");
                $data[2] = array("3","b6020500390","ตั้ก","กี้","user","<button>แก้ไข</button>");
                $data[3] = array("4","b6020503879","ภาสวิชญ์","ชมทิพย์","user","<button>แก้ไข</button>");

                createTable($header,$data);

                ?>

            </div>
        </form>
    </div>
    <!-- End Right Column -->
</div>

<!-- End Grid -->
</div>

<!-- End Page Container -->




</body>
<?php
$content = ob_get_clean();
require_once ("../templates/layout.php");
//require_once Router::getSourcePath()."../templates/layout.php";

?>
