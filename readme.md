## Install Project

1. ```composer install```
2. This package ships with a .env.example file in the root of the project. You must rename this file to just .env
3. ```php artisan key:generate```
4. Create Database: You must create your database on your server and on your .env file update.
5. Test!


## Doctrine

1. ```composer require "laravel-doctrine/orm:1.4.*"```
2. ``` php artisan vendor:publish --tag="config"```
3. See ``` App\Artitcle ```
4. ``` composer require laravel-doctrine/fluent```
5. See ``` App\Doctrine\Mappings\ArticleMapping ```
6. See ``` App\Http\Controllers\ArticleController ```
7. See ``` ArticleRepository ```
8. See ``` BasicPersistRepository ```

## Advantages

* Logical domain keeps separate from the presentational logic:

The main is the software industry is how you co-relate your logical and how that logical part full-fill the presentation part for the user.

In many ORM if you will use then you will find that there are strict rule of that, that you have to use particular way only for the particular presentation but in Doctrine both the things are kept separated you can make your full logical first and then you decide what the view or in presentation you want or vice-versa.

* Easily enforcement of Business rules:

Each application has some business logic that on which terms and conditions application should be work according to the requirements.

So, same there is also with the Doctrine the business rules consist of rules and processes around how the application should work. Knowing when and where to put the business rules little bit a tricky.

This business logic should be kept in the controller. Normally you will see the logic like this in the controller:

This is a easiest way to use the business logic in ORM which the only Doctrine have none other.

* Doctrine behavior support:

All behaviors supported in Doctrine ORM are well supported by the ORM designers. You have to just write the definition once in a code and everywhere you can refer to the same again and again.

You can also configure the behavior of these function by going into the config file and do changes as per your convenience.

By using ORM design you can create the behaviors in a minute. You have to select the options according to the value and that will be assigned to your definition behavior it’s so easy in the Doctrine that easily defined behaviors get assigned to the project.

* Inheritance:

Inheritance is again the great feature implemented in this ORM. With ORM design you will not get any problem in implementing the inheritance. ORM designers wizard gives easy and great way to do so.

* MVC framework:

You can use Doctrine ORM with any MVC framework for the project use. In ORM designers there is an explicit support for the 2 most used MVC frameworks that are Symfony and Zend framework.

Use of any other MVC framework is also very east in the Doctrine you have to just choose the option “without MVC” at the start of your project.
The feature of Doctrine ORM 2.5 :

1. Doctrine 2.5 require minimum PHP 5.4 and dropping support for PHP 5.3
2. PostLoad events now triggered after associations are loaded
3. Embeddable Objects supports creating multiple PHP objects from one database table.
4. Second-Level-Cache: objects cache in Memcache, Redis, Riak, MongoDB etc.
5. Support for ManyToMany associations
6. Add new contains() expression criteria : For like SQL condition
7. Allow configuring Index flags


After looking at these major advancements and features in the Doctrine ORM we can say that Doctrine is the best ORM system available till now with the MVC framework that can be implemented with any technology.

By taking these reasons in the mind we will suggest  you use Doctrine ORM only for the exchange of data between the incompatible system and language.
