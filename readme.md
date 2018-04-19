<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Development of Laravel 

Before Developing  of laravel developer should consider the topics below: 

Design The DB architecture 

Relationship 

Restriction 


## Very UseFull Commands 

Laravel provide sophisticated "**artisan**" command line tool to generate and maintain the code 


#### Database Connection

Edit .env file 


### PHP artisan Command List - 


`php artisan` (to find all available commands)

`php artisan migrate —help` (give possible migrate options)

`php artisan make:model  {name} -m ` (To create particular model)

`php artisan make:controller Buyer/BuyerController -r` (to create particular Controller)

`php artisan routes:list` (To check API end points)

`php artisan make:migration category_product_table --create=category_product `

( Pivot table Naming Conventions should be carefully. Convention- model_model (alphabetical order separated by _ ) 



### Laravel Factory, Migrate, Seeds


A Faker Library to generate Fake data using factory files 

`php artisan make:factory {name} —model={model}`

`php artisan migrate `

`php artisan db:seed`



## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
