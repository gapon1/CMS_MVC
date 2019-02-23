<?php


/**
 * Class DB configurate
 *
 */

class DB {
    const USER = "webdewel_cms";
    const PASS = "e#fkR202G^";
    const HOST = "webdewel.mysql.tools";
    const DB = "webdewel_cms";

    public static function connDB(){
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;

        $conn = new PDO("mysql:dbname=$db;host=$host;charset=UTF8", $user, $pass);

        return $conn;

    }

}