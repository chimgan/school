<?php
include "Human.php";
include "Indigo.php";

$humanFirst = new Human(31, 'Black');
$humanFirst->printInfo('???');

echo "<br /><br /><br />";

Human::_about();
Human::$info;

echo "<br /><br /><br />";

$indigoFirst = new Indigo(16, 'Black', 99);
$indigoFirst->printInfo('***');


echo "<br /><br /><br />";
echo Indigo::PI;