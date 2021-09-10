#!/bin/bash

if [ ! -f composer.json ]; then
    echo "Please make sure to run this script from the root directory of this repo."
    exit 1
fi

composer install

echo "Copying .env.example to .env"
cp .env.example .env

echo "generating encryption key"
php artisan key:generate

#echo "Running Migrations"
#php artisan migrate

#echo "Running Faker"
#php artisan db:seed --class=StateSeeder

echo "Application Ready"
php artisan serve
# npm install
# npm run dev
