## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## SETUP

<p>
  Install xammp server with > php7.0. <br />
  Create database named larticle in MySQL.<br />
  In your .env file, add the database name and passwod.<br />
  terminal@project_location- npm install<br />
  To start your laravel back-end, enter the line from the terminal@project_location-<br/>
  php artisan serve
  Enter the following line from the terminal@project_location-<br/>
  php artisan migrate<br />
  This will create an empty table for articles.<br />
  To add dummy data to articles table, enter the following command-<br />
  php artisan db:seed<br />
  This adds 30 dummy records to the articles table.<br />
  Use Postman application and try GET, POST, PUT, DETE operations on project/api/article(s)/{req_type}.
</p>