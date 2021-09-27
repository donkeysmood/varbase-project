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

// Docksal DB connection settings.
$databases['default']['default'] = array (
    'database' => 'default',
    'username' => 'user',
    'password' => 'user',
    'host' => 'db',
    'driver' => 'mysql',
);


