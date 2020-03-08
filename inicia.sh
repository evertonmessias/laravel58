#!/bin/bash
clear
function inicia_laravel() 
{
cp bkp.gitignore .gitignore
php artisan serve &
}

echo "INICIANDO O LARAVEL"
echo -n "Escolha [m]ysql ou [s]qlite : ";read op

case $op in
m) cp bkp.mysql.env .env;inicia_laravel;;
s) cp bkp.sqlite.env .env;inicia_laravel;;
*) echo "OPCAO INVALIDA !!!";;
esac
