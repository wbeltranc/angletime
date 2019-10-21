# AngleTime
Calculate the angle hand in php

### Requirements
* PHP 7

### Composer install

```
composer require beltranc/angletime:dev-master
```

### Simple Usage

```
$angle = new \BeltranC\AngleTime\Angle(22, 85);

echo 'Short Angle: ' . $angle->shortAngle();
echo 'Long Angle: ' . $angle->longAngle();
```
