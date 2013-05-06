<?php
include "WidgetHelper.php";
include "WidgetHelperAbstractFactory.php";
include "JavascriptWidgetHelper.php";
include "JavascriptHelperFactory.php";
include "BootstrapWidgetHelper.php";
include "BootstrapHelperFactory.php";
include "LoginPage.php";


//Test Javascript

$dependency = new JavascriptHelperFactory();
$page = new LoginPage($dependency);
echo $page->render('Hello Javier') . "\n<hr>";


//test bootstrap

$dependency = new BootstrapHelperFactory();
$page = new LoginPage($dependency);
echo $page->render('Its bootstrap object') . "\n<hr>";

