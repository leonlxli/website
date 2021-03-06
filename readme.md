# The Nano Center

Laravel 5.6

## Installation

```
composer install
cp .env.example .env
php artisan key:generate
php artisan storage:link
```

Fill out your database information in .env then run the database migrations

```
php artisan migrate
```

## Post Installation

Once installed, setup the default roles and permissions via the command:

```
php artisan init:roles
```

You can add yourself as an administrative user with the command

```
php artisan make:admin
```

Finally, you can populate your database with fake data by using

```
php artisan db:seed
```

## Assets

### Fonts

Fonts are loaded by typekit, use a local development domain of thenanocenter.vm or localhost These domains are whitelisted.