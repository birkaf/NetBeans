<?php
namespace App;
class Db
{
    protected $dbh;
    public function __construct() {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=lesson','root','');
    }
    /*
     * $params (':a' => $a)
     */
    public function execute($sql, $params=[]){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }
    public function query($sql, $class,$params=[]){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if(false !== $res){
            return $sth->fetchAll(\PDO::FETCH_CLASS,$class);   
        }
        return [];
    }
}
  