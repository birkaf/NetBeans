<?php

namespace App;

/**
 * Description of Model
 *
 * @author AlekseevNote
 */
class Model {
    
    const TABLE = '';
    public static function findAll(){
        $db = new Db();
        return $db->query(
                'SELECT * FROM ' . static::TABLE,
                self::class//'\App\Models\User'
                );
    }    //put your code here
}
