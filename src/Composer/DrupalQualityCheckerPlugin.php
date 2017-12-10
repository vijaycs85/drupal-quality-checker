<?php

namespace DrupalQualityChecker\Composer;

use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Plugin\PluginInterface;
use DrupalQualityChecker\Console\Command\ConfigureDrupalCommand;
use GrumPHP\Composer\GrumPHPPlugin;
use Composer\Script\Event;

class DrupalQualityCheckerPlugin extends GrumPHPPlugin implements PluginInterface, EventSubscriberInterface
{
    const PACKAGE_NAME = 'vijaycs85/drupal-quality-checker';

    public function runScheduledTasks(Event $event)
    {
        parent::runScheduledTasks($event);
        if ($this->initScheduled) {
            $this->runGrumPhpCommand(ConfigureDrupalCommand::COMMAND_NAME);
        }
    }

}
