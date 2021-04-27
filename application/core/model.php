<?php

class Model
{
	 protected $link;
	 public function __construct()
    {
        $this->link = mysqli_connect($GLOBALS['host'],$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['database']);
    }

    // метод выборки данных
//	public function get_data()
//	{
//		// todo
//	}
}