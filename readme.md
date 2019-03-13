
## Meetup Php Baires - Doctrine

Recuerden que lo bueno de esto, es la capacidad de enfocarse en la lógica de negocios orientado a objetos y dejar la persistencia de datos como problema secundario.  Dejamos de pensar en tablas, y empezamos a pensar en objetos.

Dentro de un proyecto de Laravel Doctrine y Eloquent pueden convivir los dos, incluso dependiendo de la arquitectura de nuestro proyecto, podemos tener repositorios que usen Eloquent y otros con Doctrine. 

Al pensar en objetos podemos implementar en lenguaje ubicuo de manera mas eficaz, lo cual nos permite un lenguaje común entre los programadores y los usuarios.

La definición propone nombrar las variables, métodos y clases con lenguaje del dominio de modo que sea 'autoexplicable'. Con este tipo de nombres, el código se documenta por sí mismo:

```php
$article->addComment(new Comment($article, 'Soy un comentario'));
```

¿Cuando usarlo? Cuando necesitemos dividir nuestra aplicación en pequeñas partes, seria un buen momento para probarlo. Como todo, al principio puede ser un poco confuso pero con el uso, el código queda bastante legible, desacoplado y sobretodo "navegable" (pero con esto no quiere decir que con Eloquent y phpDoc no se pueda lograr).

Repito, aunque la actualización de esquema de Base de Datos que nos ofrece Doctrine es una de sus ventajas (```php artisan doctrine:schema:update``` que nos lee nuestro archivo de Mappings y actualiza segun lo que encuentre en la Base de Datos, incluyendo las claves foráneas e indices que se necesiten), no quiere decir que las migraciones desaparezcan, se siguen usando pero con otra función. 

Como les dije no se trata de quien es mejor o peor ORM, sino de conocer otro tipo de herramientas que nos permitan resolver problemas de distintas formas y asi ampliar el espectro de conocimiento que tengamos dentro de la especialización de un lenguaje.

Tanto el tema de Oauth2 y este, son temas bastante complejos y con mucha teoría. Que en el tiempo que tenemos en las meetup queda corto, pero al menos queda como una introducción. 

Cualquier duda, estamos a la orden ya sea por aca, o tambien me pueden encontrar en el Slack de Laraveles.com 

## Install Project

1. ```composer install```
2. This package ships with a .env.example file in the root of the project. You must rename this file to just .env
3. ```php artisan key:generate```
4. Create Database: You must create your database on your server and on your .env file update.
6. ```php artisan doctrine:schema:create ```
5. Test and Play!


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
