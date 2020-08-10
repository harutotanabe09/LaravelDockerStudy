## :speech_balloon: Dokcer

docker-compose build --no-cache

docker-compose up -d

docker-compose down

## :droplet: PHP FPM

docker-compose exec php-fpm bash

## :outbox_tray: DB

docker-compose exec db bash

mysql -u test -ptest

#### :soon: How to Start

composer intall

#### :paperclip: How to Start Test Code

```php
php artisan test
```