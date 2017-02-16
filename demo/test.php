<?php
require __DIR__.'/../src/FizzBcrypt.php';

use Fizzday\FizzBcrypt\FizzBcrypt;

// echo FizzBcrypt::encrypt(123); // $2y$10$UxHKXIkNJkpJ6oTxrWkkL.uLQdCVeLI2Q5EDzKnOkSnaQc/L1mYHi
var_dump(FizzBcrypt::password(123)->decrypt('$2y$10$UxHKXIkNJkpJ6oTxrWkkL.uLQdCVeLI2Q5EDzKnOkSnaQc/L1mYHi'));

