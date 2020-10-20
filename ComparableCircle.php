<?php

include "Circle.php";
include "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();

        if ($this->getRadius() > $circleOtherRadius) {
            return 1;
        }  else if($this->getRadius() < $circleOtherRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}