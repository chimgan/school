<?php

/**
 * Class Human
 */
class Human
{
    public $age;
    public $color;
    public $ves;
    public static $info = "My Class!";
    const PI = 3.14;

    public function __construct($age, $color)
    {
        $this->age   = $age;
        $this->color = $color;
        $this->ves   = 60;
    }

    public function __destruct()
    {

    }

    public function printInfo($symbol = "!!!")
    {
        $printString = "Class know you age is: '" . $this->age
            . "'<br /> and your skin color is: '" . $this->color . "'"
            . $symbol;
        $printString = $this->stylingBold($printString);
        echo $printString;
    }

    public static function _about()
    {
        echo "Some info about: "
            . self::$info;
    }

    protected function stylingBold($string)
    {
        return "<strong>$string</strong>";
    }
}
