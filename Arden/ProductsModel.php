<?php

namespace Arden;


class ProductsModel extends Model
{
    public function __construct()
    {
        
        $sql = "SELECT * FROM products limit 5";
        $this->data = $this->db($sql);

    }

    public function getData()
    {
        return $this->data;
    }


}