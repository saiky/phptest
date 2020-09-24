<?php

namespace Arden;

class ProductsView extends View
{
    public function __construct($data = null)
    {
        if($data) {
            $this->data = $data;
        }
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function render() {
        // Render opening times
        if(count($this->data)>0){
            echo "<table><tr><td>Name</td><td>Price</td><td>Image</td></tr>";
            foreach($this->data as $row) {
                    echo "<tr><td>".$row['name']."</td><td>$".$row['price']."</td><td><img src='".$row['images']."' width='100px'></td></tr>";
                }
            echo "</table>";
        }
        else {
            echo "No result found";
        }

        
    }
}