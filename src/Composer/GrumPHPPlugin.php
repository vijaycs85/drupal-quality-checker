<?php

namespace DrupalQualityChecker\Composer;

use GrumPHP\Composer\GrumPHPPlugin as GrumPHPPluginDefault;
use Composer\Script\Event;
use DrupalQualityChecker\Console\Command\ConfigureCommand;

class GrumPHPPlugin extends GrumPHPPluginDefault
{

    public function runScheduledTasks(Event $event)
    {
        if ($this->initScheduled) {
            $this->runGrumPhpCommand(ConfigureCommand::COMMAND_NAME);
        }
        if ($this->initScheduled) {
            $this->initGitHook();
        }
    }

}
