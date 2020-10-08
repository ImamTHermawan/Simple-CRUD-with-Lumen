# Simple CRUD with Lumen

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Simple CRUD with Lumen is an project service product where user can create product with the product detail like name, price and description. User also can update product based on product ID, view product list, get specific product based on ID and also user can delete product based on product ID.

## Getting Started

You can try this REST API from your localhost or with this link : [https://radiant-plateau-61127.herokuapp.com/](https://radiant-plateau-61127.herokuapp.com/)


## Prerequisites

```PHP ^7.2.5```
```Laravel/Lumen-framework 7.0```


## Installing

Make sure you have been install Laravel/Lumen-framework before, and have required PHP version on your laptop or computer. 
After you clone this repository to your laptop or computer, 

Please run this, to install all the dependencies as specified in the composer.lock file

        composer install
    
and this command to regenerates the list of all classes that need to be included in the project

        composer dump-autoload

after that you need to create new file name **.env** and setup your **.env** like database name, database username and database password, 
and create new database manually in your database. Don't forget to run this command to create table in your database after you create your database and setup your environment.

      php artisan migrate

and the last command is this command to seeding database.

      php artisan db:seed

## Routes List

* Method GET    ```/api/v1/product```       to get all product list.
* Method GET    ```/api/v1/product/{id}```  to get product based on product ID.
* Method POST   ```/api/v1/product```       to create product.
* Method PUT    ```/api/v1/product/{id}```  to update product based on product ID.
* Method DELETE ```/api/v1/products/{id}``` to delete product based on product ID.


## API DOCUMENTATION

* [LOCAL API DOCUMENTATION](https://documenter.getpostman.com/view/11108135/TVRj4nbN)
* [DEPLOY API DOCUMENTATION](https://documenter.getpostman.com/view/11108135/TVRj4nkA)

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
