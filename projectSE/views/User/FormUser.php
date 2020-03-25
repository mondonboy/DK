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
                        <div align="center"><h2>แบบฟอร์มการยืมอุปกรณ์</div>
                        <div class="w3-center w3-margin">ชื่อผู้ยืม: นาย ก      นามสกุล ข</div>
                        <div class="w3-center w3-margin">รหัสนิสิต: 602050XXXX</div>
                        <table class="w3-table w3-striped w3-white w3-border w3-margin">
                            <tr class="w3-green ">
                                <th>เลขครุภัณฑ์</th>
                                <th>ชื่ออุปกรณ์</th>
                                <th>ดำเนินการ</th>
                            </tr>
                            <tr>
                                <td>T001</td>
                                <td>กรรไกร</td>
                                <td><button class="w3-button">ลบ</button></td>
                            </tr>
                            <tr>
                                <td>T002</td>
                                <td>เทปกาว</td>
                                <td><button class="w3-button">ลบ</button></td>
                            </tr>
                        </table>
                        <div class="w3-center w3-margin">วันที่ขอยืม: <input type="date" ></div>
                        <div class="w3-center"><input type="checkbox" id="project"> ทำ Project <input type="checkbox" id="nonproject"> ไม่ได้ทำ Project</div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#project").click(function(){
                document.write("5555");
            });

        });

    </script>

                </form>
            </div>
            <b
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