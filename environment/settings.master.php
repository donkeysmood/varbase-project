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
'database' => 'ID249619_donkeys',
'username' => 'ID249619_donkeys',
'password' => 'Giveme144',
'prefix' => '',
'host' => 'ID249619_donkeys.db.webhosting.be',
'port' => '3306',
'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
'driver' => 'mysql',
);
