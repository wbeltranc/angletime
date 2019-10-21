<?php
/**
 * Copyright (C) 2019 BeltranC
 *
 * @package         AngleTime
 * @category        Class
 * @author          Will Beltran
 * @license         http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace BeltranC\AngleTime;

class Angle {
    /**
     * @var int
     */
    protected $hour;
    /**
     * @var int
     */
    protected $minute;

    /**
     * Angle constructor.
     * @param $hour
     * @param $minute
     */
    public function __construct($hour, $minute){
		$this->hour = $hour;
		$this->minute = $minute;

		if ($this->hour < 0 || $this->minute < 0 || $this->hour >12 || $this->minute > 60){
			echo "Please enter an hour between the range 0 and 12 and the minutes between the range 0 and 60";
			die;
		}

		if ($this->hour == 12)
			$this->hour = 0;

		if ($this->minute == 60)
			$this->minute = 0;
	}

    /**
     * @return float|int
     */
    public function shortAngle(){
		return 6 * $this->minute;
	}

    /**
     * @return float|int
     */
    public function longAngle(){
		$shortAngle = 6 * $this->minute;
		return 360 - $shortAngle;
	}
}