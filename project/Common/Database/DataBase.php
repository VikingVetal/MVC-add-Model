<?php

namespace Common\Database;

use Common\Database\Connector;

class DataBase
{

    public function __construct()
    {
         $selectAll = '*';

         $sql = 'SELECT ' . $selectAll . ' FROM ' . db_name; 
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
