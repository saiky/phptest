<?php

namespace Arden;

class OpeningTimesView extends View
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
            echo "<table><tr><td>Day</td><td>Time</td></tr>";
            foreach($this->data as $row) {
                    echo "<tr><td>".$row['day']."</td><td>".$row['open']."-".$row['close']."</td></tr>";
                }
            echo "</table>";
        }
        else {
            echo "No result found";
        }
    }
}