-- after creation of the database larapics on phpmyadmin
php artisan migrate:install


-- creating Image model & migration
 php artisan make:model Image -m
 -- after specifying table columns in create_images_table
 php artisan migrate


-- creating factory for Image
php artisan make:factory ImageFactory
-- after making factory inside of tinker
> Image::factory(3)->create()
(to create 3 images)
--or
php artisan migrate:fresh --seed


-- file storage, inside of .env
FILESYSTEM_DISK=public
php artisan storage:link
-- inside of tinker
Storage::makeDirectory('images')
$subFolder = date('Y/m/d')
Storage::makeDirectory('images/' . $subFolder)


-- creating blade components
php artisan make:component Icon
php artisan make:component Ui/Button


-- Authentication Scaffolding
composer require laravel/ui
php artisan ui bootstrap --auth

-- user roles
php artisan make:migration add_role_to_users

--policies
php artisan make:policy ImagePolicy -m Image
