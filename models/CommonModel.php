<?php
use Medoo\Medoo;

class CommonModel
{
    public $formDataName;
    public $errorArr = [];
    public $valid = true;

    public $db;

    const DEVELOPER_USER_GROUP_ID = 1;
    const USER_USER_GROUP_ID = 2;

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function setAttributes()
    {
        foreach ($_POST[$this->formDataName] as $attribute => $value) {
            $this->$attribute = $value;
        }
    }

    public function validateUniqueInput($attribute)
    {
        $this->validateTextInput($attribute);
        if ($this->valid) {
            $prevRecord = $this->db->select(
                'user',
                "id",
                [
                    $attribute => $this->$attribute
                ]
            );
            if ($prevRecord) {
                $this->valid = false;
                $this->errorArr[$attribute] = ucfirst($attribute) . ' is not unique';
            }
        }
    }

    public function validateTextInput($attribute)
    {
        if (!isset($this->$attribute) || $this->$attribute == '') {
            $this->valid = false;
            $this->errorArr[$attribute] = ucfirst($attribute) . ' can not be empty';
        } else {
            $this->errorArr[$attribute] = false;
        }
    }

    public function currentDate($time = null)
    {
        if (is_null($time)) $time = time();
        return date('Y-m-d H:i:s', $time);
    }
}
