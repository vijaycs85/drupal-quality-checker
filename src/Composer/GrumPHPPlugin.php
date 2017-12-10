<?php

namespace DrupalQualityChecker\Composer;

use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Plugin\PluginInterface;
use GrumPHP\Composer\GrumPHPPlugin as GrumPHPPluginDefault;
use Composer\Script\Event;
use DrupalQualityChecker\Console\Command\ConfigureCommand;

class GrumPHPPlugin extends GrumPHPPluginDefault implements PluginInterface, EventSubscriberInterface
{
    const PACKAGE_NAME = 'vijaycs85/drupal-quality-checker';

    public function runScheduledTasks(Event $event)
    {
        parent::runScheduledTasks($event);
        if ($this->initScheduled) {
            $this->runGrumPhpCommand(ConfigureCommand::COMMAND_NAME);
        }
    }

}
