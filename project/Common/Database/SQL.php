<?php

namespace Common\Database;

class SQL extends Connector
{
    protected $tableName;

    /**
     * @param mixed $tableName
     */
    public function setTableName($tableName): void
    {
        $this->tableName = $tableName;
    }

    public function execute()
    {

    }

}