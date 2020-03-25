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
        <br>
        <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-threequarter ">
        <div class="w3-white w3-container w3-card w3-margin-bottom">

                <div class="w3-container w3-middle" >

                    <div class="w3-row w3-margin">



                        <a class="container" style="margin-left: 300px;">
                            <div align="center">
                                <table>
                                    <h1> ยืนยันการยืม </h1>
                                    <tr>
                                        <td>ชื่อ-นามสกุล ผู้ยืม : นาย ภาสวิชญ์  ชมทิพย์</td>
                                        <td style="padding: ">   รหัสนิสิต : 6205064131 </td>
                                    </tr>
                                    <tr>
                                        <td> วันที่ยืม : </td>
                                        <td> 24/03/2020 </td>
                                    </tr>
                                    <tr>
                                        <td> เหตุผลในการยืม : </td>
                                        <td> barbarbarbarbarbarbarbar </td>
                                    </tr>

                                </table>
                                <div class="w3-container w3-padding">
                                    <?php

                                    $header = array("ลำดับ","รหัสครุภัณฑ์","ชื่ออุปกรณ์");
                                    $data[0] = array("1","karu01","เม้าส์");
                                    $data[1] = array("2","karu02","บอร์ด");
                                    $data[2] = array("3","karu03","แม็ก");
                                    $data[3] = array("4","karu04","แฟรชไดร์ฟ");



                                    createTable($header,$data);
                                    ?>

                                </div>
                                <button class="w3-button w3-green w3-round-large w3-margin">ยืนยัน</button>
                                <a href="IndexUser.php" <button class="w3-button w3-red w3-round-large">แก้ไข</button></a>
                    </div>
                </div>
        </div>
        </form>
    </div>
    <!-- End Right Column -->
</div>

<!-- End Grid -->
</div>

<!-- End Page Container -->
</div>




<?php
$content = ob_get_clean();
require_once ("../../templates/layout.php");
//require_once Router::getSourcePath()."../templates/layout.php";

?>
