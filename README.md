# Drupal Code Quality Checker
---

## Overview

Provides set of libraries to easily setup code quality checks based on [GrumPHP](https://github.com/phpro/grumphp) for Drupal module/theme/profile.

>*Note:* This library is aimed to help contributed/custom Drupal module/theme/profile hosted in individual git repository.


## Install

1. Add `vijaycs85/drupal-quality-checker` to `composer.json` (like [here](https://github.com/vijaycs85/modal_config/blob/8.x-1.x/composer.json#L21)) or just `composer require --dev vijaycs85/drupal-quality-checker`
2. Replace `grumphp.yml` in project's root directory (not Drupal root directory) with `vendor/vijaycs85/drupal-quality-checker/grumphp.yml.dist`

That's it. Now, all tasks (listed below) run on every `git commit`.

>*Note:* As part of install, GrumPHP adds `pre-commit` hook to repository. Existing `pre-commit` might get [destroyed](https://github.com/phpro/grumphp/issues/416) when install/uninstall.

## Features

1. [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer) with Drupal standard.
2. [PHPLint](http://www.icosaedro.it/phplint/)
3. [YAML Lint](http://www.yamllint.com/)
4. [Composer](https://github.com/composer/composer)
5. [JSONLint](https://jsonlint.com/)
6. [PHP Copy/Paste Detector (CPD)](https://github.com/sebastianbergmann/phpcpd)

Long list of additional checks/validators available [here](https://github.com/phpro/grumphp/blob/master/doc/tasks.md#tasks-1).

## Sample

### Pass
![drupal-quality-checker-pass](https://user-images.githubusercontent.com/1220029/33808392-62b90710-dddd-11e7-9d0e-08f82e6e85b1.png)

### Fail
![drupal-quality-checker-fail](https://user-images.githubusercontent.com/1220029/33808391-62a4daec-dddd-11e7-8cf5-9c6b37f89893.png)


## Demo
Implemented in [Modal Configuration](https://github.com/vijaycs85/modal_config) module.
