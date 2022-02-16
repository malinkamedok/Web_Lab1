<?php

session_start();
$startTime = microtime(true);
date_default_timezone_set("Europe/Moscow");
$time = date("Y-m-d H:i:s");


function checkY($y) {
    if (!isset($_GET['y'])) return false; 
    $y = floatval($_GET['y']);
    return in_array($y, array(-2, -1.5, -1, -0.5, 0, 0.5, 1, 1.5, 2), false);
}
  
function checkX($x)  {
    if (!isset($_GET['x'])) return false;
    $x = str_replace(",", ".", $x);
    $x = floatval($x);
    return is_numeric($x) && $x >= -5 && $x <= 5;
}

function checkR($r) {
    if (!isset($_GET['r'])) return false;
    $r = intval($r);
    return in_array($r, array(1,2,3,4,5), false);
}

function checkMainArea($x, $y, $r) {
    if ($x >= 0 && $y >= 0 && $x + $y <= $r) {
        return 'true';
    }
    if ($x >= 0 && $y <= 0 && $x * $x + $y * $y <= $r * $r) {
        return 'true';
    }
    if ($x <= 0 && $y <= 0 && $y <= -$r && $x <= -$r) {
        return 'true';
    }
    return 'false';
}

function checkValues($x, $y, $r) {
    return  checkX($x)&&
            checkY($y) &&
            checkR($r);
}

function drawResult($result)
{    ?>
    <div class="table-line">
        <div class="x"><?php echo $result[0] ?></div>
        <div class="y"><?php echo $result[1] ?></div>
        <div class="r"><?php echo $result[2] ?></div>
        <div class="time"><?php echo $result[3] ?></div>
        <div class="time-stamp"><?php echo $result[4] ?></div>
        <div class="hit"><?php echo $result[5] ?></div>
    </div>
    <?php
}

$x = $_GET['x'];
$y = $_GET['y'];
$r = $_GET['r'];

if (checkValues($x, $y, $r)) {
    $area = checkMainArea($x, $y, $r);
    $work_time = round(microtime(true) - $startTime, 7) * 1000;
    $ans = array($x, $y, $r, $time, $work_time, $area);
    drawResult($ans);

    if (!isset($_SESSION['history'])) {
        $_SESSION['history'] = array();
    }

    array_push($_SESSION['history'], $ans);

} else {
    http_response_code(400);
}

?>

