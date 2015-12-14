<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.12.15
 * Time: 12:53
 */

namespace AbstractIterator;


abstract class AbstractObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}