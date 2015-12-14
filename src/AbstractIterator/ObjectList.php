<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.12.15
 * Time: 12:54
 */

namespace AbstractIterator;


class ObjectList
{
    protected $objects = [];
    protected $index = 0;

    public function add(AbstractObject $object)
    {
        $this->objects[$this->index++] = $object;
    }

    public function remove(AbstractObject $object)
    {
        $flag = false;

        foreach ($this->objects as $k => $v) {
            if ($v->getId() == $object->getId()) {
                unset($this->objects[$k]);
                $flag = !$flag;

                ($k != $this->getCount()) && $this->pushBackObjects($k);

                $this->index--;

                break;
            }
        }

        return $flag;
    }

    // push back all object beginning from removed object index
    protected function pushBackObjects($position)
    {
        $i = $position;

        $count = $this->getCount();
        while ( $i < $count) {
            $this->objects[$i] = $this->objects[$i + 1];

            $i++;
        }

        unset($this->objects[$this->getCount() - 1]);
    }

    public function get($index)
    {
        return $this->isExist($index) ? $this->objects[$index] : null;
    }

    public function getCount()
    {
        return count($this->objects);
    }

    protected function isExist($index)
    {
        return array_key_exists($index, $this->objects);
    }
}