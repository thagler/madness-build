<?php
/**
 * Drush Aliases
 *
 * This file provides for the automatic generation of site aliases based
 * on the file layout and configuration of the Docker hosting environment.
 *
 * Site alias for tuned Drush usage with the 'madness' site.
 */

$host = getenv('APP_DOMAIN');

$aliases['madness'] = array(
  'uri' => $host ? $host : 'http://www.madness.vm/',
  'root' => '/var/www/build/html',
);
