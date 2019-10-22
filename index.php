<?php
$autoload = include 'vendor/autoload.php';

$angle = new \BeltranC\AngleTime\Angle(12, 31);

echo "Short Angle: " . $angle->shortAngle() . '<br>';
echo "Long Angle: " . $angle->longAngle();