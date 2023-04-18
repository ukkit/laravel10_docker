# Laravel Docker

Docker environment for Laravel 10 (using official docker hub repositories).

### Components:

- php:8.1.18-fpm-alpine
- nginx:stable-alpine
- mariadb:10.6
- redis:alpine
- composer:latest
- node:current-alpine
- phpmyadmin:latest

### Seperate containers for:

- app
- mysql/mariadb
- php
- redis
- composer
- npm
- artisan
- cron
- phpmyadmin (on port 8081)

### Laravel packages pre-installed:

- askedio/laravel-soft-cascade
- doctrine/dbal
- guzzlehttp/guzzle
- hisorange/browser-detect
- infyomlabs/adminlte-templates
- infyomlabs/laravel-generator
- laravel/passport
- laravel/sanctum
- laravel/tinker
- laravelcollective/html
- nesbot/carbon
- rap2hpoutre/laravel-log-viewer
- spatie/laravel-permission

### Commands for artisan and composer

> docker-compose run --rm composer install

> docker-compose run --rm artisan migrate

Based on [aschmelyun/docker-compose-laravel][link1]

[link1]: https://github.com/aschmelyun/docker-compose-laravel
