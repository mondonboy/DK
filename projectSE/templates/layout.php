<!DOCTYPE html>
<html lang="th" xmlns="http://www.w3.org/1999/html">
<head>
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
    <style>
        body {font-family: "Lato", sans-serif}
        .mySlides {display: none}
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
        body,h1 {font-family: "Montserrat", sans-serif}
        img {margin-bottom: -7px}
        .w3-row-padding img {margin-bottom: 12px}
    </style>
    <title><?= $title ?></title>
</head>
<body>
<div id="container" style="width: 90%;">
    <div id="header">
<?php include("header.inc.php"); //หาไม่เจอ จะหาที่โฟลเดอร์เดียวกัน ?>
    </div>
<div id="content">
    <?= $content ?>
</div>
<div id="footer">
    <?php include("footer.inc.php"); ?>
</div>
</div>
</body></html>
