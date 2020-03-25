<?php
session_start();
include("../inc/helper_function.inc.php");
$title = "Menu";
ob_start();
?>
<div class="w3-top">
<div class="w3-bar w3-black w3-card ">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="login.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">LOGOUT</a>
    <a href="FormAdmin.php" ><button class="w3-button w3-padding-large w3-hover-red w3-hide-small w3-right" ><i class="fa fa-shopping-cart fa-fw w3-margin-right w3-large w3-text-white"></i></button>
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
                <p class="w3-center">Admin</p>
            </div>
            <div class="w3-bar-block">
                <hr>
                <a href="RentAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-hand-lizard-o fa-fw w3-margin-right w3-large w3-text-white"></i>ขอยืมอุปกรณ์</a>
                <a href="EditTypeAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-list fa-fw w3-margin-right w3-large w3-text-white"></i>แสดงหมวดหมู่</a>
                <a href="IndexAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-list fa-fw w3-margin-right w3-large w3-text-white"></i>แสดงอุปกรณ์</a>
                <a href="ListRequestAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-white"></i>แสดงคำร้องขอ</a>
                <a href="PromiseAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-white"></i>กำหนดสิทธิ์</a>
                <a href="HistoryAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-area-chart fa-fw w3-margin-right w3-large w3-text-white"></i>ประวัติการยืม</a>
                <hr>
            </div>
        </nav>
    </div>
    <!-- End Left Column -->
</div>

<!-- Right Column -->
<div class="w3-threequarter ">
    <div class="w3-container">
        <div class="w3-white w3-container w3-card w3-margin-bottom">
            <div class=" w3-green w3-padding ">
                <h2 class="w3-margin"><i class="fa fas fa-check fa-fw w3-margin-right w3-large w3-text-white"></i>บันทึกอุปกรณ์เรียบร้อย</h2>
            </div>
            <div class=" w3-container w3-padding">
                <h2 class="w3-margin w3-center"><i class="fa fa-mail-forward w3-margin-right w3-large w3-text-white"></i>รอการอนุมัติทาง E-mail</h2>
            </div>

            <div class="container w3-padding">

                    <form >
                        <table align="center" class="w3-padding-large">
                            <TR align="center">
                                <td class="w3-padding" align="center"> ผู้ยืม : </td>
                                <td class="w3-padding" align="center"> สมชาย รักดี </td>
                            </TR>
                            <TR align="center">
                                <TD class="w3-padding" align="center"> รหัสนิสิต : </TD>
                                <TD class="w3-padding" align="center"> 602050xxxx </TD>
                            </TR>
                            <TR align="center">
                                <TD class="w3-padding" align="center"> วันที่ยืม : </TD>
                                <TD class="w3-padding" align="center"> 03/07/2562 </TD>
                            </TR>
                        </table>
                        <?php
                            $header = array("รายการ","เลขครุภัณฑ์");
                            $data[0] = array("5","6");
                            $data[1] = array("5","6");
                            $data[2] = array("5","6");
                            $data[3] = array("5","6");
                            createTable($header,$data);
                        ?>
                        <p align="center"> <a href="RentAdmin.php"><label class="w3-button w3-margin w3-padding w3-round-large w3-green">ยืนยัน</label></a></p>
                    </form>


            </div>





        </div>

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
