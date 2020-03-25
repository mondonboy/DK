<?php
$title = "Shopping Cart";
try {
ob_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<h1>ระบบยืม-คืนอุปกรณ์</h1>
<form method="POST" name="loginform" action=<?= Router::getSourcePath() . "index.php?controller=Member&action=login" ?>>
  <br />
    <fieldset>

        <div  class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Username</span>
            </div>
            <input  class="form-control" type="text" name="username" id="username" required />
        </div>
        <div  class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Password</span>
            </div>
            <input class="form-control" type="password" name="password" id="password" required/>

        </div>
        <button type="submit" class="btn btn-outline-primary" onclick="checkLogin()">Login</button>
        <button type="reset" class="btn btn-outline-secondary">Cancel</button>

    </fieldset>
</form>
    <?php

    $content = ob_get_clean();

    include Router::getSourcePath()."templates/layout.php";
} // -- try
catch (Throwable $e) {
    ob_clean(); // ล้าง output เดิมที่ค้างอยู่จากการสร้าง page
    echo "Access denied: No Permission to view this page";
    exit(1);
}
?>
