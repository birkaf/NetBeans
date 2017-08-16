<?php
/**
 * Description of User
 *
 * @author AlekseevNote
 */
namespace App\Models;

use App\Model;

class User extends Model {
    //public static $table = 'users';
    const TABLE = 'users';
    public $email;
    public $name;
    
   
    //put your code here
}
