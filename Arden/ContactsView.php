<?php

namespace Arden;

class ContactsView extends View
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
    	// Set Form view
    	echo '<form >';
    	echo '<div class="form-group"><label>Name</label> <input type="text" name="name"> </div>';
    	echo '<div class="form-group"><label>Email</label><input type="email" name="email"> </div>';
    	echo '<div class="form-group"><label>Address</label><input type="text" name="address"> </div>';
    	echo '<div class="form-group"><label>Message</label><textarea name="message" rows="5" cols="20"></textarea> </div>';
    	echo '<button type="submit" class="btn btn-default">Submit</button>';
    	echo '</form>';
    	
        // Render opening times
        if(count($this->data)>0){
        	
            echo "<table><tr><td>Name</td><td>Email</td><td>Address</td><td>Message</td></tr>";
            foreach($this->data as $row) {
                    echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['address']."</td><td>".$row['message']."</td></tr>";
                }
            echo "</table>";
        }
        else {
            echo "No result found";
        }
    }
}