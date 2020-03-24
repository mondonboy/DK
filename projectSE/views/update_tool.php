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


    <!-- Sidebar/menu -->
    <nav class=" w3-green  w3-large w3-padding" style="z-index:3;font-weight:bold;" ><br>

        <div class=" w3-card w3-padding">
            <p class="w3-center"><img src="../img/student.png" class="w3-circle" style="height: 106px;width: 106px "alt="Avatar"></p>
            <h4 class="w3-center"><b>ข้อมูลบัญชี</b></h4>
            <p class="w3-center"><xxxxxx></xxxxxx>xxxx</p>
            <p class="w3-center">I am Admin</p>
        </div>
        <div class="w3-bar-block">
            <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin">หน้าแรก</a>
            <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin">ขอยืมอุปกรณ์</a>
            <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin">แสดงหมวดหมู่</a>
            <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin">แสดงอุปกรณ์</a>
            <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin">ประวัติการยืม</a>

        </div>
    </nav>


    <br>
    <!-- End Left Column -->
</div>

<!-- Right Column -->
<div class="w3-threequarter ">
    <div class="w3-container" >
        <h2 class="w3-center" style="color:red;">แก้ไขอุปกรณ์</h2>
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
                                    <TD class="w3-padding"> วิธีการใช้งาน : </TD>
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
            <button class="w3-button w3-padding w3-green">แก้ไข</button>
            <button class="w3-button w3-padding w3-red">ยกเลิก</button>

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
