<?php

namespace DrupalQualityChecker\Console\Command;

use Gitonomy\Git\Repository;
use GrumPHP\Configuration\GrumPHP;
use GrumPHP\Util\Filesystem;
use GrumPHP\Console\Command\ConfigureCommand as ConfigureCommandDefault;

class ConfigureCommand extends ConfigureCommandDefault
{
    const COMMAND_NAME = 'configure_drupal';

    /**
     * {@inheritdoc}
     */
    public function __construct(GrumPHP $config, Filesystem $filesystem, Repository $repository)
    {
        print_r($config);exit;
        parent::__construct($config, $filesystem, $repository);

        $this->config = $config;
        $this->filesystem = $filesystem;
        $this->repository = $repository;
    }

}
