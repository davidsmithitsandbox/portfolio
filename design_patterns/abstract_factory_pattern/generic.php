<?php

/*****************************************
 * FACTORIES
 ****************************************/
abstract class AbstractFactory
{
    abstract public function createProductA();
    abstract public function createProductB();
}

// CONCRETE FACTORIES
class ConcreteFactory1 extends AbstractFactory
{
    public function createProductA()
    {
        return new ProductA1;
    }
    public function createProductB()
    {
        return new ProductB1;
    }
    
}

class ConcreteFactory2 extends AbstractFactory
{
    public function createProductA()
    {
        return new ProductA2;
    }
    public function createProductB()
    {
        return new ProductB2;
    }
    
}

/*****************************************
 * PRODUCTS
 ****************************************/

// AbstractProductA
abstract class AbstractProductA
{

}

class ProductA1 extends AbstractProductA
{
    public function __construct()
    {
        echo __METHOD__ . PHP_EOL;
    }
}

class ProductA2 extends AbstractProductA
{
    public function __construct()
    {
        echo __METHOD__ . PHP_EOL;
    }
}

// AbstractProductB
abstract class ProductB
{

}

class ProductB1 extends ProductB
{
    public function __construct()
    {
        echo __METHOD__ . PHP_EOL;
    }
}

class ProductB2 extends ProductB
{
    public function __construct()
    {
        echo __METHOD__ . PHP_EOL;
    }
}

/*****************************************
 * CLIENT
 ****************************************/

class Client
{
    public $product_a  = '';
    public $product_b  = '';

    public function __construct(AbstractFactory $AbstractFactory)
    {
        $this->product_a = $AbstractFactory->createProductA();
        $this->product_b = $AbstractFactory->createProductB();
    }
}

$ConcreteFactory1 = new Client(new ConcreteFactory1);
$ConcreteFactory2  = new Client(new ConcreteFactory2);