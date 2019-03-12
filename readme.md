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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Doctrine

1. Logical domain keeps separate from the presentational logic:

The main is the software industry is how you co-relate your logical and how that logical part full-fill the presentation part for the user.

In many ORM if you will use then you will find that there are strict rule of that, that you have to use particular way only for the particular presentation but in Doctrine both the things are kept separated you can make your full logical first and then you decide what the view or in presentation you want or vice-versa.
2. Easily enforcement of Business rules:

Each application has some business logic that on which terms and conditions application should be work according to the requirements.

So, same there is also with the Doctrine the business rules consist of rules and processes around how the application should work. Knowing when and where to put the business rules little bit a tricky.

This business logic should be kept in the controller. Normally you will see the logic like this in the controller:

This is a easiest way to use the business logic in ORM which the only Doctrine have none other.

3. Doctrine behavior support:

All behaviors supported in Doctrine ORM are well supported by the ORM designers. You have to just write the definition once in a code and everywhere you can refer to the same again and again.

You can also configure the behavior of these function by going into the config file and do changes as per your convenience.

By using ORM design you can create the behaviors in a minute. You have to select the options according to the value and that will be assigned to your definition behavior it’s so easy in the Doctrine that easily defined behaviors get assigned to the project.
4. Inheritance:

Inheritance is again the great feature implemented in this ORM. With ORM design you will not get any problem in implementing the inheritance. ORM designers wizard gives easy and great way to do so.
5. MVC framework:

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