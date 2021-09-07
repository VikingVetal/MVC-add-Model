<?php

namespace Common\Database;

class Insert extends SQL
{
    protected $tableName;
    protected $data= [];


    public function getInsert()
    {
        return 'INSERT INTO' . $this->tableName . '('. impolode(',', array_keys($this->data)) . ') VALUES (' . impolode(',', array_values($this->data)) . ')';
    }

//    /**
//     * @param mixed $tableName
//     */
//    public function setTableName($tableName): void
//    {
//        $this->tableName = $tableName;
//    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }


}
//$result .= $key . '="' . $value . '"';

//INSERT INTO Product (type, model, maker)
//VALUES ('PC', 1157, 'B');