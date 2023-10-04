# Animal Project

## Setup
### PHP
This project uses PHP8.2. It will probably work on earlier versions as well, as it is not complex
You can download PHP from here:

https://www.php.net/downloads.php

### Composer
This project uses composer. If you do not have already you can get from here:

https://getcomposer.org/doc/00-intro.md

### Setup Using Composer
After installing PHP and composer, execute the following to have composer install everything:
```
composer update
```

## Coding Standards
To check for coding standards please run
```
./vendor/bin/phpcs src
```
Some coding issues can be fixed by running
```
./vendor/bin/phpcs src
```
## Unit Tests
Unit tests can be run via
```
./vendor/bin/phpunit tests
```
## Folder Structure
```
/src/ - Contains all source code for the project
/tests/ - Contains all unit tests for the project
```
## Usage
    php AnimalProject.php "name" "animal"
