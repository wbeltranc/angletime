<?php
$autoload = include 'vendor/autoload.php';

$angle = new \BeltranC\AngleTime\Angle(22, 85);

echo $angle->shortAngle() . '<br>';
echo $angle->longAngle();