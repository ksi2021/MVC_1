<?php
class Model
{
	public function __construct()
    {
        $this->link = new mysqli(
            $GLOBALS['host'],
            $GLOBALS['user'],
            $GLOBALS['password'],
            $GLOBALS['database']
        );
    }
	public function get_date()
	{

	}
}

?>
