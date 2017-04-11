<?php
include 'common/functions.php';

$nameList = [
    'Vlad1',
    'Dima1',
    'Petia1',
];

foreach ($nameList as $firstName) {
    printHello($firstName);
}
