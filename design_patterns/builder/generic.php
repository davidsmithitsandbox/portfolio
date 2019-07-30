<?php

interface DirectorInterface
{
    public function setMethod1($method1);
    public function setMethod2($method2);
}

class Director implements DirectorInterface
{
    private $method1 = '';
    private $method2 = '';

    public function setMethod1($method1)
    {
        $this->method1 = $method1;
    }

    public function setMethod2($method2)
    {
        $this->method2 = $method2;
    }

    /**
     * @return string
     */
    public function getMethod1()
    {
        return $this->method1;
    }

    /**
     * @return string
     */
    public function getMethod2()
    {
        return $this->method2;
    }

}

interface BuilderInterface
{
    public function buildMethod1();
    public function buildMethod2();
}

class ConcreteBuilder1 implements BuilderInterface
{
    private $object = '';
    
    public function __construct($object)
    {
        $this->object = new $object;
    }
    public function buildMethod1()
    {
        $this->object->setMethod1('Method 1 set.');
    }

    public function buildMethod2()
    {
        $this->object->setMethod2('Method 2 set.');
    }

}