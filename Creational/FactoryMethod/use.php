<?php
include "ApptEncoder.php";
include "CommsManager.php";
include "BloggsApptEncoder.php";
include "BloggsCommsManager.php";

$manager = new BloggsCommsManager();
print_r($manager->getApptEncoder()->encode());