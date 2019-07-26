<?php

/*****************************************
 * FACTORIES
 ****************************************/
abstract class Factory
{
    abstract public function createScrollbar();
    abstract public function createWindowDecorations();
}

// FACTORIES
class LightTheme extends Factory
{
    public function createScrollbar()
    {
        return new LightThemeScrollbar;
    }
    public function createWindowDecorations()
    {
        return new LightThemeWindowDecorations;
    }
    
}

class DarkTheme extends Factory
{
    public function createScrollbar()
    {
        return new DarkThemeScrollbar;
    }
    public function createWindowDecorations()
    {
        return new DarkThemeWindowDecorations;
    }
    
}

/*****************************************
 * PRODUCTS
 ****************************************/

// SCROLLBARS
abstract class ScrollBars
{

}

class LightThemeScrollbar extends ScrollBars
{
    public function __construct()
    {
        echo __METHOD__ . PHP_EOL;
    }
}

class DarkThemeScrollbar extends ScrollBars
{
    public function __construct()
    {
        echo __METHOD__ . PHP_EOL;
    }
}

// WINDOW DECORATIONS
abstract class WindowDecorations
{

}

class LightThemeWindowDecorations extends WindowDecorations
{
    public function __construct()
    {
        echo __METHOD__ . PHP_EOL;
    }
}

class DarkThemeWindowDecorations extends WindowDecorations
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
    public $scroll_bar          = '';
    public $window_decorations  = '';

    public function __construct(Factory $Factory)
    {
        $this->scroll_bar = $Factory->createScrollbar();
        $this->scroll_bar = $Factory->createWindowDecorations();
    }
}

$LightTheme = new Client(new LightTheme);
$DarkTheme  = new Client(new DarkTheme);