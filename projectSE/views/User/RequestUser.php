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
                <form method="get" action="">
                    <div class="w3-container w3-middle" >

                        <div class="w3-row w3-margin">

                                <h2 class="w3-center">รหัสคำร้องขอ : S0001</h2>
                            <div class="w3-center w3-margin">
                            <div class="w3-center w3-margin">รหัสนิสิต : 6020500390</div>
                            <div class="w3-center w3-margin">ผู้ยืม : นาย ก</div>
                            <div class="w3-center w3-margin">วันที่ยืม : 12/02/2563</div>
                            <div class="w3-center w3-margin">ชื่อโครงงาน : ทำงานวิทยาศาสตร์</div>
                            <div class="w3-center w3-margin">ชื่อที่ปรึกษาโครงงาน : นาย ข</div>
                            <div class="w3-center w3-margin">เหตุผล : ทำงานวิทยาศาตร์</div>
                            </div>
                            <table class="w3-table w3-striped w3-white w3-border w3-margin">
                                    <tr class='w3-green w3-center'>
                                        <th class="w3-center">ลำดับ</th>
                                        <th class="w3-center">เลขครุภัณฑ์</th>
                                        <th class="w3-center">ชื่ออุปกรณ์</th>
                                        <th class="w3-center">จำนวน</th>
                                    </tr>
                                <tr >
                                    <td class="w3-center">1</td>
                                    <td class="w3-center">T0001</td>
                                    <td class="w3-center">มืดปลอกผลไม้</td>
                                    <td class="w3-center">3</td>
                                </tr>
                            </table>
                           <div class="w3-center">
                                <button class="w3-button w3-green ">อนุมัติ</button>
                                <label class="w3-button w3-red " onclick="document.getElementById('Edit').style.display='block'">ไม่อนุมัติ</label>


                                </div>

                            <?php

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



    <!-- Edit Modal -->
    <div id="Edit" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-teal w3-center w3-padding-32">
        <span onclick="document.getElementById('Edit').style.display='none'"
              class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                <h2 class="w3-wide"><i class="fa fa-remove w3-margin-right"></i>ไม่อนุมัติคำร้องขอ</h2>
            </header>
            <div class="w3-container">
                <p><label>เหตุผลในการไม่อนุมัติ :</label></p>
                <input class="w3-input w3-border" type="text" placeholder="reason" value="">
                <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right" onclick="document.getElementById('Edit').style.display='none'">ตกลง <i class="fa fa-check"></i></button>
                <button class="w3-right w3-button w3-red w3-section" onclick="document.getElementById('Edit').style.display='none'">Close <i class="fa fa-remove"></i></button>

            </div>
        </div>
    </div>
    </body>
    <script>
        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('Edit');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
<?php
$content = ob_get_clean();
require_once ("../../templates/layout.php");
//require_once Router::getSourcePath()."../templates/layout.php";

?>