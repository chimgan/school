<?php

/**
 * Class Indigo
 */
class Indigo extends Human
{
    public $brainStrong;

    public function __construct($age, $color, $strongThink)
    {
        parent::__construct($age, $color);
        $this->brainStrong = $strongThink;
        $this->ves         *= 0.5;
        self::PI;
    }

    public function printInfo($symbol = "!!!")
    {
        $printString = "Class know you age is: '" . $this->age
            . "'<br /> and your skin color is: '" . $this->color . "'"
            . "'<br /> and your brain strong is: '" . $this->brainStrong . "'"
            . "'<br /> and your ves is: '" . $this->ves . "'"
            . $symbol;
        $printString = $this->stylingBold($printString);
        echo $printString;
    }

    protected function stylingBold($string)
    {
        return "<i>$string</i>";
    }
}

//class Indigo
//{
//    public $age;
//    public $color;
//    public $ves;
//    public static $info = "My Class!";
//    public $strongThink;
//
//    public function __construct($age, $color, $strongThink)
//    {
//        $this->age   = $age;
//        $this->color = $color;
//        $this->ves   = 60;
//        $this->strongThink = $strongThink;
//    }
//
//    public function printInfo($symbol = "!!!")
//    {
//        echo "Class know you age is: '" . $this->age
//            . "' and your skin color is: '" . $this->color . "'"
//            . $symbol;
//    }
//
//    public static function _about()
//    {
//        echo "Some info about: " . self::$info;
//    }
//}