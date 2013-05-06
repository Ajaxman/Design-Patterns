<?php
/**
 * Class JavascriptHelperFactory
 */
class JavascriptHelperFactory implements WidgetHelperAbstractFactory
{
    public function createWidgetHelper()
    {
        return new JavascriptWidgetHelper();
    }
}