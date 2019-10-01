
## Requirements

Laravel 5.8 or Laravel 6.x
PHP 7.2+
MySQL (recommended) / PosgreSQL / SQLite / SQL Server



# BACKPACK

composer require backpack/crud:"4.0.*"
## you might also want to install these tools that help during development
composer require backpack/generators --dev
composer require laracasts/generators --dev



# STEP 0. create migration (in case you're starting from scratch)
php artisan make:migration:schema create_tags_table --model=0 --schema="name:string:unique"
php artisan migrate

# STEP 1. create a model, a request and a controller for the admin panel
php artisan backpack:crud tag #use singular, not plural

# STEP 2. add a route for this admin panel to routes/backpack/custom.php
php artisan backpack:add-custom-route "Route::crud('tag', 'TagCrudController');"

# STEP 3. add sidebar item to resources/views/vendor/backpack/base/inc/sidebar_content.blade.php
php artisan backpack:add-sidebar-content "<li class='nav-item'><a class='nav-link' href='{{ backpack_url('tag') }}'><i class='nav-icon fa fa-tag'></i> Tags</a></li>"

# STEP 4. go through the generated files, customize according to your needs




Доставить настроить
https://github.com/Laravel-Backpack/PermissionManager
https://github.com/svenluijten/artisan-view


МЕНЮ сайта верхнее

Главная
О Нас
Меню
Бронирование
Контакты
Корзина
Войти/Выйти
