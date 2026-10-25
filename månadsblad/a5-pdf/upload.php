<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="pt3">
<link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css" />
<?php

chdir("/home/jakob/Documents/kyrka/månadsblad/a5-pdf/");

array_map('unlink', glob("uploads/*"));
$target_dir = "/home/jakob/Documents/kyrka/månadsblad/a5-pdf/uploads";
$tmp = $_FILES["file"]["tmp_name"];

// $today = gmdate("d-M-Y");
$id = uniqid("Månadsblad-", false);

$base = "${target_dir}/${id}";
$tmp_new = "${base}.pdf";
rename($tmp, $tmp_new);

shell_exec("./script.sh '${tmp_new}' '${base}'");
?>
<div class="flex tc mw8 center justify-center">
        <a class="db ba b--black-20 shadow-4 shadow-hover pv3 mh4 ph2 no-underline underline-hover black" href="uploads/<?= $id ?>_a5.pdf" target="_blank">
            <p class="tc f3">A5, 2 per ark</p>
            <img src="a5.svg" class="w5">
        </a>
        <a class="db ba b--black-20 shadow-4 shadow-hover pv3 ph2 no-underline underline-hover black" href="uploads/<?= $id ?>_a6.pdf" target="_blank">
            <p class="tc f3">A6, 4st per ark</p>
            <img src="a6.svg" class="w5">
        </a>
</div>
</body>
</html>