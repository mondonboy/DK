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
                <form method="get" action="">
                    <div class="w3-container w3-middle" >
                        <h2 class="w3-center">แสดงหมวดหมู่</h2>
                        <a href="" class="w3-right"><button class="w3-round-large w3-margin w3-padding w3-red"><i class="fa fa-remove fa-fw w3-margin-right w3-large w3-text-white"></i></button></a>
                        <a href="" class="w3-right"><button class="w3-round-large w3-margin w3-padding w3-blue"><i class="fa fa-pencil fa-fw w3-margin-right w3-large w3-text-white"></i></button></a>
                        <a href="" class="w3-right"><button class="w3-round-large w3-margin w3-padding w3-orange"><i class="fa fa-plus fa-fw w3-margin-right w3-large w3-text-white "></i></button></a>
                        <div class="w3-container w3-padding">

                                <table align="center">
                                    <?php
                                    for ($i=0;$i<10;$i++)
                                    {
                                        echo "<tr>";
                                        $j=0;
                                        do{
                                                echo "<td><button class='w3-green w3-padding w3-margin w3-round-xxlarge'>อุปกรณ์คอมพิวเตอร์</button></td>";
                                                $i++;
                                                $j++;
                                        }while($j<4);
                                        echo "</tr>";
                                    }
                                    ?>
                                </table>

                        </div>
                    </div>
            </div>
            <div class="w3-white w3-container w3-card w3-margin-bottom">
                <?php

                $header = array("ชื่ออุปกรณ์","หมวดหมู่","เลขครุภัณฑ์","สถานะ","");
                $data[0] = array("5","6","7","ยืมได้","<button>เพิ่มลงตะกร้า</button>");
                $data[1] = array("7","8","9","ยืมได้","<button>เพิ่มลงตะกร้า</button>");
                $data[2] = array("7","8","9","ยืมได้","<button>เพิ่มลงตะกร้า</button>");
                $data[3] = array("7","8","9","ยืมได้","<button>เพิ่มลงตะกร้า</button>");
                $data[4] = array("7","8","9","ยืมได้","<button>เพิ่มลงตะกร้า</button>");
                $data[5] = array("7","8","9","ยืมได้","<button>เพิ่มลงตะกร้า</button>");
                $data[6] = array("7","8","9","ยืมได้","<button>เพิ่มลงตะกร้า</button>");
                $data[7] = array("7","8","9","ยืมได้","<button>เพิ่มลงตะกร้า</button>");
                $data[8] = array("7","8","9","ยืมได้","<button>เพิ่มลงตะกร้า</button>");
                $data[9] = array("7","8","9","ยืมได้","<button>เพิ่มลงตะกร้า</button>");
                $data[10] = array("7","8","9","ยืมได้","<button>เพิ่มลงตะกร้า</button>");
                $data[11] = array("7","8","9","ยืมได้","<button>เพิ่มลงตะกร้า</button>");

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