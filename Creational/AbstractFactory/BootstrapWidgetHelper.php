<?php
/**
 * Class BootStrapwidgetHelper
 */
class BootstrapWidgetHelper implements WidgetHelper
{
    public function generateHtml( $text )
    {
        return "<div class='ui-widget' style='color:brown;'>{$text}</div>";
    }
}