
# Laravel

Nous devons avoir `PHP` et `Composer` installés. If you are developing on macOS, PHP and Composer can be installed via Homebrew. In addition, we recommend installing Node and `NPM`.

After you have installed PHP and Composer, you may create a new Laravel project via the Composer create-project command:

`composer create-project laravel/laravel example-app`

Or, you may create new Laravel projects by globally installing the Laravel installer via Composer:

```bash
composer global require laravel/installer
laravel new example-app
```

After the project has been created, start Laravel's local development server using the Laravel's Artisan CLI serve command:

```bash
cd example-app
php artisan serve
```