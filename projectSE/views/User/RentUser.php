<?php
try {
require_once Router::getSourcePath()."inc/helper_function.inc.php";
    $title = "Index";
    ob_start();
?>
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card ">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="login.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">LOGOUT</a>
            <a href="FormUser.php" ><button class="w3-button w3-padding-large w3-hover-red w3-hide-small w3-right" ><i class="fa fa-shopping-cart fa-fw w3-margin-right w3-large w3-text-white"></i></button></a>
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

                <div class="w3-row w3-margin">

                        <form method="get" action="">
                            <div class="w3-container w3-middle" >
                                <h2 class="w3-center">ขอยืมอุปกรณ์</h2>
                                 <div class="w3-container w3-padding">

                                    <table align="center">
                                        <?php
                                        $catagoryall = $_SESSION['catagory'];
                                        //$r=count($catagoryall);


                                        echo"<tr>";
                                        /*for($i=0;$i<count($catagoryall);$i++){


                                       }*/
                                        foreach ($catagoryall as $key => $value){
                                            echo "<td><label class='w3-button w3-red w3-margin'>{$value->getOTName()}</label></td>";
                                        }
                                        echo"</tr>";
                                        ?>
                                    </table>

                                </div>
                            </div>

                </div>
            <div class="w3-container w3-padding" style="margin: 10px">
                <input class="w3-checkbox" type="checkbox">แสดงอุปกรณ์ที่ว่างให้ยืม

            <div class="w3-container w3-padding">
                <?php
                $tool = $_SESSION['tools'];

                $header = array("ชื่ออุปกรณ์","หมวดหมู่","เลขครุภัณฑ์","สถานะ","");
                $data = array();
                $i = 0;
                foreach ($tool as $key => $value)
                {
                    $data[$i] = array($value->getOname(),Catagory::findByID($value->getObjType())->getOTName(),$value->getSerial(),$value->getStatus(),"<label class='w3-button w3-block w3-indigo w3-round' onclick='document.getElementById(\"download\").style.display=\"block\"'>รายละเอียด</label>");
                    $i = $i+1;
                }

           createTable($header,$data);
                ?>
                <div id="download" class="w3-modal w3-animate-opacity">
                    <div class="w3-modal-content" style="padding:32px">
                        <div class="w3-container w3-white">
                            <i onclick="document.getElementById('download').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
                            <h2 class="w3-wide w3-padding w3-margin">เครื่องคอมพิวเตอร์</h2>
                            <div class="w3-container">
                                <div class="w3-half">
                                    <table>
                                        <tr>
                                            <td class="w3-padding">เลขครุภัณฑ์</td><td class="w3-padding">T0001</td>
                                        </tr>
                                        <tr>
                                            <td class="w3-padding">รายละเอียดอุปกรณ์</td><td class="w3-padding">หยดทไยรนดไำยด</td>
                                        </tr>
                                        <tr>
                                            <td class="w3-padding">สิทธิการยืม</td><td class="w3-padding">ทุกคน</td>
                                        </tr>
                                        <tr>
                                            <td class="w3-padding">สถานะ</td><td class="w3-padding"><p style="color: green;font-size: 30px">ยืมได้</p></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="w3-half">
                                    <img style="width: 50%" src="../img/teacher.png">;
                                </div>
                            </div>


                            <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('download').style.display='none'"><i class="fa fa-shopping-cart"></i>เพิ่มลงตะกร้า</button>
                        </div>
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



</body>
<?php
$content = ob_get_clean();
include Router::getSourcePath()."templates/layout.php";
} catch (Throwable $e) { // PHP 7++
    echo "Access denied: No Permission to view this page";
    exit(1);
}
?>