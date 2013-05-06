<?php
/**
 * TODO move to namespaces
 */
include "Preferences.php";

$preferences = Preferences::getInstance();
$preferences->setProperty( "name", "javier" );
$preferences->setProperty( "age", "99" );
$preferences->setProperty( "major", "Software" );

print_r($preferences);

unset($preferences);
echo "<hr>" . PHP_EOL;
$preferencesSecond = Preferences::getInstance();
print_r($preferencesSecond);
echo "<hr>" .  PHP_EOL;
print("My major is: " . $preferencesSecond->getProperty( "major" ));