<?php
session_start();
include("../inc/helper_function.inc.php");
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
                        <p class="w3-center">I am Admin</p>
                    </div>
                    <div class="w3-bar-block">
                        <hr>
                        <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-white"></i>หน้าแรก</a>
                        <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-hand-lizard-o fa-fw w3-margin-right w3-large w3-text-white"></i>ขอยืมอุปกรณ์</a>
                        <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-list fa-fw w3-margin-right w3-large w3-text-white"></i>แสดงหมวดหมู่</a>
                        <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-list fa-fw w3-margin-right w3-large w3-text-white"></i>แสดงอุปกรณ์</a>
                        <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-white"></i>กำหนดสิทธิ์</a>

                        <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-margin"><i class="fa fa-area-chart fa-fw w3-margin-right w3-large w3-text-white"></i>ประวัติการยืม</a>
                    </div>
                </nav>

            </div>
            <br>
            <!-- End Left Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-threequarter ">
            <?php
            // ข้อมูล
            $datas[] = array('มกราคม', 20);
            $datas[] = array('กุมภาพันธ์', 40);
            $datas[] = array('มีนาคม', 60);
            $datas[] = array('เมษายน', 80);
            $datas[] = array('พฤษภาคม', 100);
            $datas[] = array('มิถุนายน', 50);

            // ค่าสูงสุด
            $max_value = 100;
            // ความสูงของกราฟแท่ง (แต่ละแท่ง)
            $bar_height = 16;
            // ความกว้างรวมของกราฟ
            $graph_width = 300;
            // ระยะห่างของแต่ละกราฟและ padding ของกรอบ
            $padding_width = 10;
            // ความกว้างของ label ด้านซ้าย
            $label_width = 55;
            // จำนวนคอลัมน์ของ grid
            $grid_cols = 5;

            // จำนวนแถวของ grid
            $grid_rows = floor(count($datas) / 2);
            // ความสูงของกราฟ
            $graph_height = (($bar_height + $padding_width) * count($datas)) + (3 * $padding_width);
            // ความกว้างของกราฟ
            $gw = $graph_width - $label_width - (2 * $padding_width);
            $_v = $max_value / $grid_cols;
            ?>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
            "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xml:lang="th" lang="th" xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <title>กราฟแท่งแนวนอนด้วย CSS</title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            </head>
            <body>
            <?php
            // css
            $graphs[] = '<style type="text/css">';
            $graphs[] = 'div#demo{border:2px solid #666;background-color:#EFEFEF;width:'.$graph_width.'px;height:'.$graph_height.'px;position:relative;}';
            $graphs[] = 'div#demo *{margin:0;padding:0;font-family:Helvetica,Geneva,sans-serif;font-size:9px;}';
            $graphs[] = 'div#demo > dl.graph-grid{margin-left:'.($label_width + $padding_width).'px;}';
            $graphs[] = 'div#demo > dl.graph-grid > dd{border-bottom:1px solid #C4C4C4;float:left;height:'.($graph_height / $grid_rows).'px;width:'.$gw.'px;}';
            $graphs[] = 'div#demo > dl.graph-grid > dt{position:absolute;height:'.$graph_height.'px;top:0;border-left:1px solid #C4C4C4;}';
            $graphs[] = 'div#demo > dl.graph-grid > dt > span{border-right:1px dotted #C4C4C4;float:left;width:'.(($gw - $grid_cols) / $grid_cols).'px;height:'.($graph_height - $padding_width).'px;position:relative;}';
            $graphs[] = 'div#demo > dl.graph-grid > dt > span > span{position:absolute;bottom:0;left:0;margin-bottom:-1.2em;margin-left:'.($gw / $grid_cols / 2).'px;width:'.($gw / $grid_cols).'px;text-align:center;}';
            $graphs[] = 'div#demo > dl.graph-data{position:absolute;top:0;margin:'.$padding_width.'px;}';
            $graphs[] = 'div#demo > dl.graph-data > dd{display:table;margin-bottom:10px;clear:both;}';
            $graphs[] = 'div#demo span.label-row{float:left;width:'.$label_width.'px;line-height:'.$bar_height.'px;}';
            $graphs[] = 'div#demo span.bar-graph{border-color:#E96AE8 #9A2B99 #000000 #E96AE8;border-width:1px;border-style:solid;float:left;}';
            $graphs[] = 'div#demo span.value-graph{float:right;margin-right:5px;height:'.$bar_height.'px;line-height:'.$bar_height.'px;}';
            $graphs[] = '</style>';
            // วาดกราฟ
            $graphs[] = '<div id="demo">';
            $graphs[] = '<dl class="graph-grid">';
            for ($i = 1; $i < $grid_rows; $i++) {
                $graphs[] = '<dd></dd>';
            }
            $graphs[] = '<dt>';
            for ($i = 0; $i < $grid_cols; $i++) {
                $graphs[] = '<span><span>'.((1 + $i) * $_v).'</span></span>';
            }
            $graphs[] = '</dt>';
            $graphs[] = '</dl>';
            $graphs[] = '<dl class="graph-data">';
            foreach ($datas AS $items) {
                $w = (($gw - 2) * $items[1]) / $max_value;
                $graphs[] = '<dd><span class="label-row">'.$items[0].'</span><span><span class="bar-graph" style="width:'.$w.'px;background-color:#D438D2;"><span class="value-graph">'.$items[1].'</span></span></span></dd>';
            }
            $graphs[] = '</dl>';
            $graphs[] = '</div>';
            echo implode("\n", $graphs);
            ?>
            </body>
            </html>
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
require_once ("../templates/layout.php");
//require_once Router::getSourcePath()."../templates/layout.php";

?>