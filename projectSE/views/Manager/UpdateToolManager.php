<?php
session_start();
include("../../inc/helper_function.inc.php");
$title = "Menu";
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
                        <p class="w3-center">Manager</p>
                    </div>
                    <div class="w3-bar-block">
                        <hr>
                        <a href="RentAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-hand-lizard-o fa-fw w3-margin-right w3-large w3-text-white"></i>ขอยืมอุปกรณ์</a>
                        <a href="EditTypeAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-list fa-fw w3-margin-right w3-large w3-text-white"></i>แสดงหมวดหมู่</a>
                        <a href="IndexAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-list fa-fw w3-margin-right w3-large w3-text-white"></i>แสดงอุปกรณ์</a>
                        <a href="ListRequestAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-white"></i>แสดงคำร้องขอ</a>
                        <a href="HistoryAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-area-chart fa-fw w3-margin-right w3-large w3-text-white"></i>ประวัติการยืม</a>
                        <hr>
                    </div>
                </nav>
            </div>
            <!-- End Left Column -->
        </div>


        <!-- Right Column -->
        <div class="w3-threequarter ">
            <div class="w3-white w3-container w3-card w3-margin-bottom">
                <h2 class="w3-center" >แก้ไขอุปกรณ์</h2>
                <form >
                    <table>
                        <TR>
                            <td class="w3-padding"> หมวดหมู่ : </td>
                            <td class="w3-padding">
                                <select class="w3-input w3-border w3-round-small">
                                    <option value="1">ก
                                    <option value="2">ข
                                </select>
                            </td>
                        </TR>
                        <TR>
                            <TD class="w3-padding"> รหัสครุภัณฑ์ : </TD>
                            <TD class="w3-padding"> <input  class="w3-input w3-border" name="order_number" type="text"> </TD>
                        </TR>
                        <TR>
                            <TD class="w3-padding"> ชื่ออุปกรณ์ : </TD>
                            <TD class="w3-padding"> <input class="w3-input w3-border" name="v" type="text"> </TD>
                        </TR>
                        <TR>
                            <TD class="w3-padding"> รายละเอียด : </TD>
                            <TD class="w3-padding"> <input class="w3-input w3-border" name="v" type="text"> </TD>
                        </TR>

                        <TR>
                            <TD class="w3-padding"> สิทธิ์การยืม : </TD>
                            <td class="w3-padding">
                                <select class="w3-input w3-border w3-round-small">
                                    <option value="1">ก
                                    <option value="2">ข
                                </select>
                            </td>
                        </TR>
                        <TR>
                            <TD class="w3-padding"> สถานะ : </TD>
                            <td class="w3-padding">
                                <select class="w3-input w3-border w3-round-small">
                                    <option value="1">ก
                                    <option value="2">ข
                                </select>
                            </td>
                        </TR>
                        <TR>
                            <TD class="w3-padding"> รูปภาพ : </TD>
                            <td class="w3-padding">
                                <input name="v" type="file">

                            </td>
                        </TR>
                    </table>
                    <button class="w3-button w3-padding w3-green w3-round-large w3-margin">แก้ไข</button>
                    <button class="w3-button w3-padding w3-red w3-round-large ">ยกเลิก</button>

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
require_once ("../../templates/layout.php");
//require_once Router::getSourcePath()."../templates/layout.php";

?>