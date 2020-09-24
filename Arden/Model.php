<?php

namespace Arden;

abstract class Model
{
    protected $data;

    public function db($sql)
    {
    	$con =  mysqli_connect("localhost", "root", "", "store");
    	// Perform query
		if ($result = mysqli_query($con, $sql)) {
		  while ($row=mysqli_fetch_assoc($result))
		  {
		    $res[] = $row;
		  }
		  return $res;
		}
		$con->close();

    }

    /**
     * @return array
     */
    abstract public function getData();
}