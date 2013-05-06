<?php
/**
 * Class BloggsCommsManager
 */
class BloggsCommsManager extends CommsManager
{
    public function getHeaderText()
    {
        return "Bloggs cal header call";
    }

    public function getApptEncoder()
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText()
    {
        return "bloggs cal footer call";
    }
}