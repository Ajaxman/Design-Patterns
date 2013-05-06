<?php
class JavascriptWidgetHelper implements WidgetHelper
{
    public function generateHtml( $text )
    {
        return "<div class='Jquery-Javascript-button'>{$text}</div>";
    }
}