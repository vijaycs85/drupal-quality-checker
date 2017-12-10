# Drupal Code Quality Checker
---

## Overview

Provides set of libraries to easily setup code quality checks based on [GrumPHP](https://github.com/phpro/grumphp) for Drupal module/theme/profile.

## Install

1. Add `vijaycs85/drupal-quality-checker` to `composer.json` or just `composer require --dev vijaycs85/drupal-quality-checker`
2. Replace `grumphp.yml` in project's root directory (not Drupal root directory) with `vendor/vijaycs85/drupal-quality-checker/grumphp.yml.dist`

That's it. Now, all tasks (listed below) run on every `git commit`.

>*Note:* As part of install, GrumPHP adds `pre-commit` hook to repository. Existing `pre-commit` might get [destroyed](https://github.com/phpro/grumphp/issues/416) when install/uninstall.

## Features

1. [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer) with Drupal standard.
2. [phpunit](https://phpunit.de)
3. [PHPLink](http://www.icosaedro.it/phplint/)
4. [YAML Lint](http://www.yamllint.com/)
5. [Composer](https://github.com/composer/composer)
6. [JSONLint](https://jsonlint.com/)
7. [PHP Copy/Paste Detector (CPD)](https://github.com/sebastianbergmann/phpcpd)

Long list of additional checks/validators available [here](https://github.com/phpro/grumphp/blob/master/doc/tasks.md#tasks-1).
