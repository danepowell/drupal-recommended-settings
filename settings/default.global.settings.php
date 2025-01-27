<?php

/**
 * @file
 * Generated by Acquia Drupal Recommended Settings. Serves as an example of global includes.
 */

/**
 * An example global include file.
 *
 * To use this file, copy and rename to global.settings.php.
 */

/**
 * Include settings files in docroot/sites/settings.
 *
 * If instead you want to add settings to a specific site, see Acquia Drupal Recommended Settings includes
 * file in docroot/sites/{site-name}/settings/default.includes.settings.php.
 */
$additionalSettingsFiles = [
    // e.g,( DRUPAL_ROOT . "/sites/settings/foo.settings.php" )
];

foreach ($additionalSettingsFiles as $settingsFile) {
  if (file_exists($settingsFile)) {
        // phpcs:ignore
        require $settingsFile;
  }
}
