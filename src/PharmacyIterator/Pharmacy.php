<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.12.15
 * Time: 14:31
 */

namespace PharmacyIterator;

use AbstractIterator\AbstractObject;

class Pharmacy extends AbstractObject
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}