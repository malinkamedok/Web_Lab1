<?php
session_start();

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

if (isset($_SESSION['history'])) {
    foreach ($_SESSION['history'] as $res) {
        drawResult($res);
    }
}

?>