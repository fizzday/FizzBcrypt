FizzBcrypt
=======
A simple library to encode and decode JSON Web Tokens (JWT) in PHP, based on firebase/jwt, add the decode() third param default 'HS256'
(JWT 无状态 restful api 认证)

Installation
------------

Use composer to manage your dependencies and download:

```bash
composer require fizzday/fizzbcrypt
```

Example
-------
```php
<?php
use Fizzday\FizzBcrypt\FizzBcrypt;

// echo FizzBcrypt::encrypt(123); // $2y$10$UxHKXIkNJkpJ6oTxrWkkL.uLQdCVeLI2Q5EDzKnOkSnaQc/L1mYHi
var_dump(FizzBcrypt::password(123)->decrypt('$2y$10$UxHKXIkNJkpJ6oTxrWkkL.uLQdCVeLI2Q5EDzKnOkSnaQc/L1mYHi'));
```