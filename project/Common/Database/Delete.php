<?php

namespace Common\Database;

class Delete extends Where
{
    protected $tableName;

//    /**
//     * @param mixed $tableName
//     */
//    public function setTableName($tableName): void
//    {
//        $this->tableName = $tableName;
//    }


    public function getDeleteString()
    {
        return 'DELETE FROM ' . $this->tableName . $this->getWhere() ;
    }
}
//DELETE FROM products WHERE product_id=1;