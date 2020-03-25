<?php
try {
    require_once Router::getSourcePath()."inc/helper_function.inc.php";
    $title = "EditType";
    ob_start();
    ?>
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card ">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="login.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">LOGOUT</a>
            <a href="FormAdmin.php" ><button class="w3-button w3-padding-large w3-hover-red w3-hide-small w3-right" ><i class="fa fa-shopping-cart fa-fw w3-margin-right w3-large w3-text-white"></i></button></a>
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
                        <p class="w3-center"><img src="./img/student.png" class="w3-circle" style="height: 106px;width: 106px "alt="Avatar"></p>
                        <h4 class="w3-center"><b>ข้อมูลบัญชี</b></h4>
                        <?php
                        $member = $_SESSION['member'];
                        echo "<p class=\"w3-center\">{$member->getKuID()}</p>";
                        echo "<p class=\"w3-center\">".$member->getFirstname()." ".$member->getLastname()."</p>";
                        ?>
                    </div>
                    <div class="w3-bar-block">
                        <hr>
                        <a href="index.php?controller=RentAdmin&action=rentAdmin" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-hand-lizard-o fa-fw w3-margin-right w3-large w3-text-white"></i>ขอยืมอุปกรณ์</a>
                        <a href="index.php?controller=EditType&action=editType" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-list fa-fw w3-margin-right w3-large w3-text-white"></i>จัดการหมวดหมู่ / อุปกรณ์</a>
                        <a href="index.php?controller=Request&action=Request" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-white"></i>จัดการคำร้องขอ</a>
                        <a href="index.php?controller=Promise&action=Promise" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-white"></i>จัดการสิทธ์</a>
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
                        <h2 class="w3-center">แสดงหมวดหมู่</h2>
                        <a href="" class="w3-right"><button class="w3-round-large w3-margin w3-padding w3-red"><i class="fa fa-remove fa-fw w3-margin-right w3-large w3-text-white"></i></button></a>
                        <a href="" class="w3-right"><button class="w3-round-large w3-margin w3-padding w3-blue"><i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-white"></i></button></a>
                        <a href="" class="w3-right"><button class="w3-round-large w3-margin w3-padding w3-orange"><i class="fa fa-plus fa-fw w3-margin-right w3-large w3-text-white "></i></button></a>
                        <div class="w3-container w3-padding">

                                <table align="center">
                                    <?php
                                    $catagoryall = $_SESSION['catagory'];
                                    echo "<tr>";

                                    foreach ($catagoryall as $key => $value){
                                        echo "<td><label class='w3-button w3-red w3-margin'>{$value->getOTName()}</label></td>";
                                    }
                                    echo"</tr>";
                                    ?>
                                </table>

                        </div>
                    </div>
            </div>
            <div class="w3-white w3-container w3-card w3-margin-bottom">
                <?php

                $header = array("ชื่ออุปกรณ์","หมวดหมู่","เลขครุภัณฑ์","สถานะ","","","");
                $data = array();
                $tool = $_SESSION['tools'];

                $i=0;
                foreach ($tool as $key => $value)
                {
                    $data[$i] = array($value->getOname(),Catagory::findByID($value->getObjType())->getOTName(),$value->getSerial(),ToolStatus::findByID($value->getStatus())->getOSStatus()
                    ,"<label class='w3-button w3-padding w3-blue'>เพิ่มลงตะกร้า</label>","<a href='index.php?controller=Tool&action=addItem'><label class='w3-button w3-padding w3-orange'>แก้ไข</label></a>","<a><label class='w3-button w3-padding w3-red'>ลบ</label></a>");
                    $i = $i+1;
                }

                createTable($header,$data);
                ?>


            </div>

                </form>

            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
    </div>



    </body>
    <?php
$content = ob_get_clean();
include Router::getSourcePath()."templates/layout.php";
} catch (Throwable $e) { // PHP 7++
    echo "Access denied: No Permission to view this page";
    exit(1);
}
?>