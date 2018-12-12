#!/bin/bash


# MUST use php 7.3 to reproduce. Can probably be reproduced in older versions with another example. 

composer install -o

./vendor/bin/phpunit --bootstrap autoload.php tests
