#!/bin/bash

composer update
# yarn install


php artisan key:generate
php artisan migrate

