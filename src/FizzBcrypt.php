<?php
namespace Fizzday\FizzBcrypt;
/**
 * author<fizzday@yeah.net>
 * 密码加密解密
 * Class Bcrypt
 */
class FizzBcrypt
{
    /**
     * 密码
     * @var string
     */
    protected static $password = '';

    /**
     * 加密
     * @param $pwd  密码
     * @return bool|mixed|string
     */
    public static function encrypt($pwd = '')
    {
        if (empty($pwd)) throw new \Exception('密码不能为空');

        $hash = password_hash($pwd, PASSWORD_BCRYPT, ['cost' => 10]);

        return $hash;
    }

    /**
     * 解密验证
     * @param $pwd  密码
     * @param $hash 加密后的hash值
     * @return bool
     */
    public static function decrypt($hash = '', $pwd = '')
    {
        if (empty($hash)) throw new \Exception('hash值不能为空');

        if (empty($pwd) && empty(self::$password)) throw new \Exception('密码不能为空');

        $pwd = $pwd ? $pwd : self::$password;

        // 验证
        $res = password_verify($pwd, $hash);

        return $res;
    }

    /**
     * 设置密码
     * @param string $pwd
     * @return static
     */
    public static function password($pwd = '')
    {
        self::$password = $pwd;

        return new static();
    }
}

// echo FizzBcrypt::encrypt(123); // $2y$10$UxHKXIkNJkpJ6oTxrWkkL.uLQdCVeLI2Q5EDzKnOkSnaQc/L1mYHi
// var_dump(FizzBcrypt::password(123)->decrypt('$2y$10$UxHKXIkNJkpJ6oTxrWkkL.uLQdCVeLI2Q5EDzKnOkSnaQc/L1mYHi'));
