<?php
class Model_Stuff extends Model
{
	public function Staff()
	{
		$query = "SELECT * FROM products WHERE name = '$name'";
		$result = mysqli_query($this->link, $query);
		return $result;
	}

}

?>
