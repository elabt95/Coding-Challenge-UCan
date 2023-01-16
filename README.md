## Project Title
MyStoreCan -Ecommerce website-
## Project Description
The main role of <b>MyStoreCan</b> is managing the stock of products and give the visitors the opportunity to shop any product in the stock online.
Also, its an open Source Project the you can use following the steps of installation and it's developped using HTML, CSS (Bootstrap),PHP (Laravel), Javascript (VueJS)
### Installing
```
--git clone https://github.com/elabt95/MyTestUCan.git
``` 
<p> Modify <b>.env file :</b></p>
<ul>
    <li>Add DB Name</li>
    <li>Username and Password of MySQL</li>
</ul>
<p> Install <b>Composer</b>:</p>

```
--composer install
```
<p> Install <b>VueJS</b>:</p>

```
--npm install
--npm run dev
--npm run watch
```
<p> Migrate <b>Database</b>:</p>

```
--php artisan migrate
```

### Executing program

* Run the server
```
--php artisan serve
```
* If you want to add Random data in product table 
```
--php artisan db:seed
```
### Table of Content
*<b> Add Product in CLI</b>
```
--php artisan tinker
```
* then add products with your custom values in this command
```
--DB::table('products')->insertGetId(['id'=>NULL,'name'=>'prod1','description'=>'prod1 description','price'=>'12.12','image'=>'imgprod/noimage.png','created_at'=>NOW(),'updated_at'=>NOW()]);
```
* You will get the id of inserted product and use it to add categories of the product
```
--DB::table('category_produit')->insertGetId(['id'=>NULL,'id_produit'=>'6','id_category'=>'2']);


```
### How to Use the Project
* Create your account in <b>Register</b>.
![register crp](https://user-images.githubusercontent.com/119502734/211895613-13e8bd55-9430-4427-ade6-bb2ac6e875bf.jpg)

* Login to your <b>Account</b>.
![login crp](https://user-images.githubusercontent.com/119502734/211895869-077889dc-89c1-4b50-b37f-0b43ecb2246a.jpg)

* After login you will be on <b>the product page</b> where you can see products or add a new product
![product page crp](https://user-images.githubusercontent.com/119502734/211896138-c7b7b300-33d0-41f6-abec-3283edd1d517.jpg)

* Also you can <b>manage Categories</b> by clicking on Category on the top menu
![category page crp](https://user-images.githubusercontent.com/119502734/211896372-edba56bc-4f58-440c-bcd4-552d96dcf6af.jpg)


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
