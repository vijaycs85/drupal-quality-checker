<?php

namespace DrupalQualityChecker\Composer;

use Composer\Script\Event;
use GrumPHP\Util\Filesystem;

class DrupalConfig
{
    /**
     * Copy Drupal config file to root directory.
     */
    public static function copy(Event $event)
    {
        $filesystem = new Filesystem();

        $vendorDir = $event->getComposer()->getConfig()->get('vendor-dir');
        $config_source = getcwd() . '/grumphp.yml.dist';
        $config_dest =  $vendorDir . '/../grumphp.yml';
        $filesystem->copy(
          self::noramlizePath($config_source),
          self::noramlizePath($config_dest)
        );
    }

    /**
     * @param $path
     *
     * @return string
     */
    private static function noramlizePath($path)
    {
        return strtr($path, '/', DIRECTORY_SEPARATOR);
    }

}
