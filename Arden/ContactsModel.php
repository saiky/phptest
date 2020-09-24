<?php

namespace Arden;

class ContactsModel extends Model
{
    public function __construct()
    {
        $sql = "SELECT * FROM contacts";
        $this->data = $this->db($sql);
    }

    public function getData()
    {
        return $this->data;
    }
}