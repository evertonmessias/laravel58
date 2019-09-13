#!/bin/bash
cp bkp.env .env
cp bkp.gitignore .gitignore
php artisan serve &
