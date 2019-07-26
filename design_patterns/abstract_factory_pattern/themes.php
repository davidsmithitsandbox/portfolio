<?php

/*****************************************
 * ABSTRACT FACTORY PATTERN
 ****************************************/

/*****************************************
 * FACTORIES
 ****************************************/
abstract class ThemeFactory
{
    abstract protected function createScrollbar();
    abstract protected function createWindowDecorations();
}

// FACTORIES
class Light extends ThemeFactory
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

class Dark extends ThemeFactory
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

class Theme
{
    public $scroll_bar          = '';
    public $window_decorations  = '';

    public function __construct(ThemeFactory $ThemeFactory)
    {
        $this->scroll_bar = $ThemeFactory->createScrollbar();
        $this->scroll_bar = $ThemeFactory->createWindowDecorations();
    }
}

$Light = new Theme(new Light);
$Dark  = new Theme(new Dark);