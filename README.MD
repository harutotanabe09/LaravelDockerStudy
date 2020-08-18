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

---

:deciduous_tree: AWS Elastic Beanstalk

https://dev.classmethod.jp/articles/elastic-beanstalk-laravel-speed-deploy/

#### 設定 -> セキュリティ -> EC2 キーペアを設定

```bash
$  sudo chmod 777 /var/app/current/storage/logs/
$  cd /var/app/current
$  cp .env.example .env
$  php artisan key:generate
```

---



