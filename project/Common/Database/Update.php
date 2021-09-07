<?php

namespace Common\Database;

class Update extends Where
{
    protected $tableName;
    protected $columnsName;

    public function getUpdate()
    {
        return ' UPDATE '. $this->tableName . ' SET ' . $this->setData() . $this->getWhere();
    }


    protected function setData($arr)
    {
        $result = null;

        foreach ($arr as $key=> $value){
            if(!empty($result)){
                $result .= ',';
            }
            $result .= $key . '=' . $value;
        }
        return $result;
    }


}
//$result .= $key . '="' . $value . '"';



//UPDATE table SET column1 = expression1, column2 = expression2,     ... [WHERE conditions];