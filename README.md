# Summary

This repository implements technical task from Gelato

# Installation Instrutions:
docker-compose up --d --build

# Inside php container:
composer install
php bin/console doctrine:migration:migrate
php bin/console doctrine:fixture:load

# Usage:
http://localhost:8080/checkout?sku=A
