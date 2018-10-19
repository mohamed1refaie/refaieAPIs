# refaieAPIs

Simple project made with laravel implementing 3 apis which are Register,Login and Area(returning list of the countries).

## Instructions

To Run the Project:
* Install [Laravel](https://laravel.com/docs/5.7/installation)
* Create a database locally named `ref` utf8_general_ci 
* [Download](https://github.com/mohamed1refaie/refaieAPIs/archive/master.zip) or [Clone](https://github.com/mohamed1refaie/refaieAPIs.git) the Repository.
* Rename `.env.example` file to `.env`inside your project root and fill the database information.
* Open the terminal and cd to the project root directory
* Run `composer install` or ```php composer.phar install```
* Run `php artisan key:generate`
* Run `php artisan jwt:secret`
* Check the database server is connected and alive
* Run `php artisan migrate`
* Run `php artisan serve`
#### You can now access your project at localhost:8000

## Using the APIs

Check short documantion and run the requests on postman from [here](https://documenter.getpostman.com/view/3845720/RWguwbzs)

you can run this example commands in the terminal 
### Register
`[POST] http://localhost:8000/api/register`

```
curl --request POST \
  --url http://localhost:8000/api/register \
  --header 'Content-Type: application/json' \
  --data '{"name": "REFAIE","email": "ref@test.com", "password": "123456","password_confirmation":"123456"}'
  
 ```
  
 This request returns either an error msg or the user created

### Login
`[POST] http://localhost:8000/api/register`

```curl --request POST \
  --url http://localhost:8000/api/login \
  --header 'Content-Type: application/json' \
  --data '{"email": "ref@test.com", "password": "123456"}'
  ```
  
  This request returns either an error msg or (jwt_token and the user logged)
  
  ### Area
  To be able to run this request you have to be logged in first and take the jwt_token and put it in the parms of the request
  `[GET] http://localhost:8000/api/area?token=`
  
  ```curl --request GET \
  --url 'http://localhost:8000/api/area?token=' \
  --header 'Content-Type: application/json'
  ```
  
  
## Dependencies
* [Laravel](https://laravel.com/)
* [Composer](https://getcomposer.org/)
