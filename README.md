# Laravel Docker

Docker environment for Laravel 10 (using official docker hub repositories).

## Components

- php:8.1.18-fpm-alpine
- nginx:stable-alpine
- mariadb:10.6
- redis:alpine
- composer:latest
- node:current-alpine
- phpmyadmin:latest

## Seperate containers for

- app
- mysql/mariadb
- php
- redis
- composer
- npm
- artisan
- cron
- phpmyadmin (on port 8081)

## Laravel packages pre-installed

- [askedio/laravel-soft-cascade][askedio]
- [barryvdh/laravel-debugbar][laravel-debugbar]
- [doctrine/dbal][dbal]
- [guzzlehttp/guzzle][guzzle]
- [hisorange/browser-detect][browser-detect]
- [infyomlabs/adminlte-templates][adminlte-templates]
- [infyomlabs/laravel-generator][laravel-generator]
- [laravel/passport][passport]
- [laravel/sanctum][sanctum]
- [laravel/tinker][tinker]
- [laravel\telescope][telescope]
- [laravelcollective/html][html]
- [nesbot/carbon][carbon]
- [rap2hpoutre/laravel-log-viewer][laravel-log-viewer]
- [spatie/laravel-permission][laravel-permission]

## How To

1. Clone repository

    ```bash
    git clone git@github.com:ukkit/laravel10_docker.git
    ```

2. Copy .env.example to .env and modify according to your environment (make sure database host set to DB_HOST=mysql)

    ```bash
    cp src/.env.example src/.env
    ```

3. Build & run environment

    ```docker
    docker-compose up -d --build
    docker-compose run --rm composer install
    docker-compose run --rm artisan migrate
    docker-compose run --rm artisan key:generate
    ```

4. Stop environment

    ```docker
    docker-compose down
    ```

Based on [aschmelyun/docker-compose-laravel][link1]

[link1]: https://github.com/aschmelyun/docker-compose-laravel
[askedio]: https://github.com/Askedio/laravel-soft-cascade
[laravel-debugbar]: https://github.com/barryvdh/laravel-debugbar
[dbal]: https://github.com/doctrine/dbal
[guzzle]: https://github.com/guzzle/guzzle
[browser-detect]: https://github.com/hisorange/browser-detect
[adminlte-templates]: https://github.com/InfyOmLabs/adminlte-templates
[laravel-generator]: https://github.com/InfyOmLabs/laravel-generator
[passport]: https://github.com/laravel/passport
[sanctum]: https://github.com/laravel/sanctum
[tinker]: https://github.com/laravel/tinker
[telescope]: https://github.com/laravel/telescope
[html]: https://github.com/LaravelCollective/html
[carbon]: https://github.com/briannesbitt/Carbon
[laravel-log-viewer]: https://github.com/rap2hpoutre/laravel-log-viewer
[laravel-permission]: https://github.com/spatie/laravel-permission
