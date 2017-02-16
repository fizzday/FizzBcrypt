FizzBcrypt
=======
a default php bcrypt for encrypt and decrypt(php使用bcrypt默认的加密和解密)

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