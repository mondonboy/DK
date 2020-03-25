<?php
try {
require_once Router::getSourcePath()."inc/helper_function.inc.php";
$title = "Index";
ob_start();
?>


<div>
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card ">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

            <a href="login.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">LOGOUT</a>
            <button class="w3-button w3-padding-large w3-hover-red w3-hide-small w3-right" ><i class="fa fa-shopping-cart fa-fw w3-margin-right w3-large w3-text-white"></i></button>

        </div>
    </div>
    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px; margin-top:46px"">

    <!-- The Grid -->
    <div class="w3-row-padding " style="margin-top:46px"">
    <div class=" w3-white w3-container w3-card w3-margin-bottom">
        <h1 class="w3-jumbo  w3-animate-top w3-center">ระบบยืม-คืนอุปกรณ์</h1>
    </div>
    <!-- Left Column -->
    <div class="w3-quarter">
        <div class="w3-green w3-container w3-card w3-margin-bottom">

            <!-- Sidebar/menu -->
            <nav class=" w3-green  w3-large " style="z-index:3;font-weight:bold;" ><br>
                <div class="">
                    <p class="w3-center"><img src="../img/student.png" class="w3-circle" style="height: 106px;width: 106px "alt="Avatar"></p>
                    <h4 class="w3-center"><b>ข้อมูลบัญชี</b></h4>
                    <p class="w3-center"><xxxxxx></xxxxxx>xxxx</p>
                    <p class="w3-center">User</p>
                </div>
                <div class="w3-bar-block">
                    <hr>
                    <a href="index.php?controller=RentAdmin&action=rentAdmin" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-hand-lizard-o fa-fw w3-margin-right w3-large w3-text-white"></i>ขอยืมอุปกรณ์</a>
                    <a href="index.php?controller=Request&action=Request" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-white"></i>แสดงคำร้องขอ</a>
                    <a href="index.php?controller=History&action=History" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-area-chart fa-fw w3-margin-right w3-large w3-text-white"></i>แสดงประวัติการยืม</a>
                    <hr>
                </div>
            </nav>
        </div>
        <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-threequarter ">
        <div class="w3-white w3-container w3-card w3-margin-bottom">
            <form method="get" action="">
                <div class="w3-container w3-middle" >
                    <div align="center"><h2>ประวัติการยืม-คืน</div>
                    <div class="w3-row w3-margin">
                        <div class="w3-col m8 w3-padding ">
                            <input class="w3-input w3-border " type="text" placeholder="ค้นหาประวัติการยืม-คืน" required name="order">
                        </div>
                        <div class="w3-col m2 w3-padding " style="margin: -4px 0px 0px -20px">
                            <button class="w3-button w3-block w3-padding-large w3-deep-orange w3-round-large" type="button" style="margin-left: 30px;">Search</button>
                        </div>
                    </div>

                    <div class="w3-container w3-padding">
                        <?php

                        $header = array("ลำดับ","รหัสประจำตัว","ชื่อ","นามสกุล","รหัสครุภัณฑ์","ชื่ออุปกรณ์","วันที่ยืม","วันที่คืน","ชื่อเจ้าหน้าที่","สถานะ");
                        $data[0] = array("1","602050xxxx","แพรว","บุญ","karu01","เม้าส์","24/03/2020","26/03/2020","พี่แก้ว","ยืม");
                        $data[1] = array("2","602050xxxx","ดิว","ทอง","karu02","ปลั๊ก","24/03/2020","28/03/2020","พี่แก้ว","ยืม");
                        $data[2] = array("3","602050xxxx","ตั้ก","แสง","karu03","จอย","24/03/2020","25/03/2020","พี่แก้ว","คืน");
                        $data[3] = array("4","602050xxxx","ปาล์ม","ชม","karu04","บอร์ด","24/03/2020","27/03/2020","พี่ตั้ก","คืน");
                        $data[4] = array("5","602050xxxx","แพรว","แพรวอิ","karu05","น็อต","24/03/2020","25/03/2020","พี่ตั้ก","คืน");
                        $data[5] = array("6","602050xxxx","แพรว","แพรวอิอิ","karu06","ไขควง","24/03/2020","26/03/2020","พี่ตั้ก","คืน");


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
</div>



</body>
<?php
$content = ob_get_clean();
require_once ("../../templates/layout.php");
//require_once Router::getSourcePath()."../templates/layout.php";

?>
