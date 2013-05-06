<?php
/**
 * Class BootstrapHelperFactory
 */
class BootstrapHelperFactory implements WidgetHelperAbstractFactory
{
    public function createWidgetHelper()
    {
        return new BootstrapWidgetHelper();
    }
}