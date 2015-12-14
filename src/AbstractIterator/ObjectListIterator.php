<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.12.15
 * Time: 13:10
 */

namespace AbstractIterator;


class ObjectListIterator
{
    protected $currentIndex = 0;
    protected $list = null;
    protected $current = null;

    public function __construct(ObjectList $list)
    {
        $this->list = $list;
    }

    public function next()
    {
        $object = null;

        if ($this->hasNext()) {
            $object = $this->list->get($this->currentIndex++);
        }

        $this->current = $object;

        return ($object !== null) ? $object : false;
    }

    public function current()
    {
        return $this->current;
    }

    public function hasNext()
    {
        return $this->currentIndex < $this->list->getCount();
    }


}