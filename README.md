# Laravel 10 Docker

### Docker + Laravel 10 running:
- php:8.1.18-fpm-alpine
- nginx:stable-alpine
- mariadb:10.6
- redis:alpine
- composer:latest
- node:current-alpine

### Seperate containers for:
- app
- mysql/mariadb
- php
- redis
- composer
- npm
- artisan
- cron

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


Based on [aschmelyun/docker-compose-laravel][LINK1]

[LINK1]: https://github.com/aschmelyun/docker-compose-laravel
