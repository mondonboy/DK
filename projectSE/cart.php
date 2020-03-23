<html>
<title>Cart</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<body>
<?php
session_start();

?>
    <div class="container">
        <h1 class="w3-jumbo w3-animate-top w3-center">ระบบยืม-คืนอุปกรณ์</h1>
    </div>
    <div class="container m3">
        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
            <div class="w3-container">
                <h3 class="w3-padding-64"><b>Company<br>Name</b></h3>
            </div>
            <div class="w3-bar-block">
                <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">หน้าแรก</a>
                <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">ขอยืมอุปกรณ์</a>
                <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">แสดงหมวดหมู่</a>
                <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">แสดงอุปกรณ์</a>
                <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">ประวัติการยืม</a>
            </div>
        </nav>
    </div>
    <div class="w3-container" style="margin-left: 300px">
        <form method="get" action="">
        <div class="w3-container w3-middle" style="margin: 10px">
            <div class="w3-row">
                        <div class="w3-col m8 w3-padding">
                            <input class="w3-input w3-border" type="text" placeholder="ค้นหาอุปกรณ์" name="order">
                        </div>
                        <div class="w3-col m2 w3-padding" style="margin: -4px 0px 0px -20px">
                            <button class="w3-button w3-block w3-padding-large w3-green w3-round-large" type="button" style="margin-left: 30px;">Search</button>
                        </div>
            </div>
        </div>
            <div class="w3-container w3-padding" style="margin: 10px">
                <input class="w3-checkbox" type="checkbox">แสดงอุปกรณ์ที่ว่างให้ยืม
            </div>
            <div class="w3-container w3-padding">
                <?php
                require("helper_function.inc.php");
                $header = array("ชื่ออุปกรณ์","หมวดหมู่","จำนวน","สถานะ");
                $data[0] = array("5","6","7","<button>เพิ่มลงตะกร้า</button>");
                $data[1] = array("7","8","9","<button>เพิ่มลงตะกร้า</button>");
                createTable($header,$data);
                ?>
            </div>
        </form>


</body>
</html>