<?php

namespace Arden;

class OpeningTimesModel extends Model
{
    public function __construct()
    {
        $sql = "SELECT * FROM openingtimes";
        $this->data = $this->db($sql);
    }

    public function getData()
    {
        return $this->data;
    }
}