<?php

namespace Core;

use PDO;
use App\Config;

/**
 * Base model
 *
 * PHP version 5.4
 */
abstract class Model
{

    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    protected static function getDB()
    {
        static $db = null;

        if ($db === null) {
            $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_PREFIX . 'car' . Config::DB_NAME . ';charset=utf8';
            $db = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);

            // Throw an Exception when an error occurs
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $db;
    }

    public static function query($sql, $args = [], $fetch = 'all')
    {
        $db = static::getDB();
        $sql = str_replace('{model}', static::TABLE, $sql);
        $sql = str_replace('{prefix}', Config::DB_PREFIX, $sql);
        $sql = str_replace('{dbname}', Config::DB_PREFIX . Config::DB_NAME . '.', $sql);
        $sql = str_replace('{cartera}', Config::DB_PREFIX . 'car' . Config::DB_NAME, $sql);
        preg_match_all('#\{(.*?)\}#', $sql, $match);

        foreach($match[1] as $m){
            $sql = str_replace('{'. $m .'}', Config::DB_PREFIX . $m, $sql);
        }

        
        // Binnacle::create([
        //     '-- NUEVA CONSULTA -- ' . date('Y-m-d h:i:s'),
        //     '-- SQL -- ' . $sql,
        //     '-- CONTROLADOR -- ' . Binnacle::getRoute('controller'),
        //     '-- FUNCION -- ' . Binnacle::getRoute('action'),
        //     '-- RUTA -- ' . Binnacle::getRoute('route')
        // ], false);
        
        try {
            $stmt = $db->prepare($sql);
            $stmt->execute($args);

            // Binnacle::create([
            //     '-- PDO ERROR -- FALSE'
            // ]);

            if($fetch == 'one'){
                return $stmt->fetch(PDO::FETCH_OBJ);
            }else{
                return $stmt->fetchAll(PDO::FETCH_OBJ);
            }
        }
        catch(Exception $e) {
        }
        
    }


}
