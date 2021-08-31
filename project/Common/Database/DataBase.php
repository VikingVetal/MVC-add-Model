<?php

namespace Common\Database;

use Common\Database\Connector;

class DataBase
{
    protected $db;


    public function __construct()
    {

    }

//    public function query($sql, $params = []) {
//        $stmt = $this->db->prepare($sql);
//        if (!empty($params)) {
//            foreach ($params as $key => $val) {
//                $stmt->bindValue(':'.$key, $val);
//            }
//        }
//        $stmt->execute();
//        return $stmt;
//    }
}