<?php
/**
 * Class LoginPage
 */
class LoginPage
{

    private $widgetFactory;

    public function __construct(WidgetHelperAbstractFactory $factory)
    {
        $this->widgetFactory = $factory;
    }

    public function render( $text )
    {
        $helper = $this->widgetFactory->createWidgetHelper();
        return $helper->generateHtml($text);
    }
}