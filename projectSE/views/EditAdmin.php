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
                    <p class="w3-center">Admin</p>
                </div>
                <div class="w3-bar-block">
                    <hr>
                    <a href="InfoAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-white"></i>หน้าแรก</a>
                    <a href="BorrowAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-hand-lizard-o fa-fw w3-margin-right w3-large w3-text-white"></i>ขอยืมอุปกรณ์</a>
                    <a href="EditTypeAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-list fa-fw w3-margin-right w3-large w3-text-white"></i>แสดงหมวดหมู่</a>
                    <a href="IndexAdmin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-list fa-fw w3-margin-right w3-large w3-text-white"></i>แสดงอุปกรณ์</a>
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
        <div class="w3-white w3-container w3-card w3-margin-bottom">
            <div style="margin-left: 300px;">
            <form>
                <table>
                    <h1>แก้ไขอุปกรณ์ </h1> </CAPTION>
                    <tr>
                        <td> หมวดหมู่ : </td>
                        <td>
                            <select>
                                <option value="1">ก
                                <option value="2">ข
                            </select>
                        </td>
                    </tr>
                    <TR>
                        <TD> รหัสครุภัณฑ์ : </TD>
                        <TD> <input name="v" type="text"> </TD>
                    </TR>
                    <TR>
                        <TD> ชื่ออุปกรณ์ : </TD>
                        <TD> <input name="v" type="text"> </TD>
                    </TR>
                    <TR>
                        <TD> รายละเอียด : </TD>
                        <TD> <input name="v" type="text"> </TD>
                    </TR>
                    <TR>
                        <TD> วิธีการใช้งาน : </TD>
                        <TD> <input name="v" type="text"> </TD>
                    </TR>
                    <TR>
                        <TD> สิทธิ์การยืม : </TD>
                        <td>
                            <select>
                                <option value="1">ก
                                <option value="2">ข
                            </select>
                        </td>
                    </TR>
                    <TR>
                        <TD> สถานะ : </TD>
                        <td>
                            <select>
                                <option value="1">ก
                                <option value="2">ข
                            </select>
                        </td>
                    </TR>
                    <TR>
                        <TD> รูปภาพ : </TD>
                        <td>
                            <input name="v" type="file">
                        </td>
                    </TR>
                </table>
                <button class="w3-button w3-margin w3-padding w3-green w3-round-large">แก้ไข</button>
                <button class="w3-button w3-padding w3-red w3-round-large">ยกเลิก</button>
            </form>
            </div>
        </div>

        <!-- End Right Column -->
    </div>

    <!-- End Grid -->
    </div>


    <!-- End Page Container -->
    </div>




<?php
$content = ob_get_clean();
require_once ("../templates/layout.php");
//require_once Router::getSourcePath()."../templates/layout.php";

?>