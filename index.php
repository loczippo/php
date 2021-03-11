<?php
    // khởi tạo session
    session_start();
    // dựng cây cầu
    require_once("./mvc/Bridge.php");
    // start app
    $app = new App();
?>