<?php

include 'vendor/autoload.php';

use PharmacyIterator\Pharmacy;
use PharmacyIterator\PharmacyList;
use PharmacyIterator\PharmacyListIterator;

$pharmacy = new Pharmacy();
$pharmacy->setId(1);
$pharmacy->setName('Lviv pharmacy');

$pharmacy1 = new Pharmacy();
$pharmacy1->setId(2);
$pharmacy1->setName('Volochisk pharmacy');

$pharmacyList = new PharmacyList();
$pharmacyList->add($pharmacy);
$pharmacyList->add($pharmacy1);

//$pharmacyList->remove($pharmacy1);


$pharmacy2 = new Pharmacy();
$pharmacy2->setId(3);
$pharmacy2->setName('Kiev pharmacy');

$pharmacy3 = new Pharmacy();
$pharmacy3->setId(4);
$pharmacy3->setName('Rivne pharmacy');

$pharmacyList->add($pharmacy2);
$pharmacyList->add($pharmacy3);

//$pharmacyList->remove($pharmacy2);


$pharmacyListIterator = new PharmacyListIterator($pharmacyList);

while ($pharmacyCurrent = $pharmacyListIterator->next()) {
    echo $pharmacyCurrent->getName(), "\n";
}



