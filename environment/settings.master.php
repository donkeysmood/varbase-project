<?php

/**
 * @file
 * Local development override configuration feature.
 *
 * To activate this feature, copy and rename it such that its path plus
 * filename is 'sites/example.com/settings.local.php', where example.com
 * is the name of your site. Then, go to the bottom of
 * 'sites/example.com/settings.php' and uncomment the commented lines that
 * mention 'settings.local.php'.
 */

$databases['default']['default'] = array (
'database' => 'ID360565_uitvaart',
'username' => 'ID360565_uitvaart',
'password' => 'cmE59ir9P1Km25H825Wz',
'prefix' => '',
'host' => 'ID360565_uitvaart.db.webhosting.be',
'port' => '3306',
'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
'driver' => 'mysql',
);
