<?php


class Dancer
{
    public $name;
    public $gender;
    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}