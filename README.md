## Laravel Travel API

This is laravel Api project for Travel Agency where we can use CRUD operations.

## Packages that are used in this project:
- [cviebrock/eloquent-sluggable](https://packagist.org/packages/cviebrock/eloquent-sluggable)
we have used this package to take care of slug generation and make sure that the slug is unique.
- [sanctum](https://laravel.com/docs/11.x/sanctum) package for authentication

## List of API Endpoints

1. **/api/v1/user**: Get the authenticated user information
2. **/api/v1/travel**: List all the travels
3. **/api/v1/travel/{travel:slug}/tours**: List all the tours of particular travel
4. **/api/v1/admin/travel**: store new travel 
5. **/api/v1/travel/{travel}**: delete the travel
6. **/api/v1/admin/travel/{travel}/tours**: store new tour in particular travel
7. **/api/v1/admin/travel/{travel}**: Update the travel
8. **/api/v1/admin/logout**: Logout the user
9. **/api/v1/login**: Login the user
> Note: We have used **auth:sanctum** middleware for authentication. So, we have to pass the token in the header of request.
>> <br> For registration of new user, we have used artisan seeder command php artisan db:seed where the email is "test@example.com" and password is "password" for demonstration purposes 

## How to run the project

First of all you have to make sure that your computer have **composer** and local server such as **XAMPP**
Then follow these steps:
1. Download the project as zip file or clone it
    1. `git clone https://github.com/AliKDeveloper/Travel-API.git`
2. Open the project from IDE such as VS Code or PhpStorme and run the following commands inside the terminal:
    1. `composer install`
    2. `cp .env.example .env`
    3. `php artisan key:generate`
    4. `php artisan migrate`
3. run the project `php artisan serve`
4. Finally, use an application like **Postman** or **Insomnia** to test the project.
