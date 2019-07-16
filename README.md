# Contact-Package for LARAVEL


<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/github/issues/janaka531/contact-package.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/github/stars/janaka531/contact-package.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img  src="https://img.shields.io/github/forks/janaka531/contact-package.svg" alt="License"></a>
<a href="https://packagist.org/packages/laravel/framework"><img  src="https://img.shields.io/github/license/janaka531/contact-package.svg
" alt="License"></a>

</p>

## Installation Steps

### 1. Require the Package

After creating your new Laravel application you can include the contact package with the following command:

```bash
composer require chuti/contact
```

### 2. Add the DB Credentials & APP_URL

Next make sure to create a new database and mail credentials to add your database and mail credentials to your .env file:

```
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=USERNAME
MAIL_PASSWORD=PASSWORD
MAIL_ENCRYPTION=tls
```

<hr>

Run php migrate command after set database details.

<hr>

You will also want to update your website URL inside of the `APP_URL` variable inside the .env file:

```
APP_URL=http://localhost:8000
```


### 3. Run your application

```
php artisan serve
```


### 4. Publish views and config files

If you want to customize view files and config files you can do it with following command

```
php artisan vendor:publish
```

Then select you want to publish.