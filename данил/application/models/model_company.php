<?php
class Model_Company extends Model
{
	public function add($name, $body, $count, $price, $path,$sklad)
	{
		$query = "INSERT INTO products (`name`, `body` ,`price`, `count`,`image`,`sklad_id`) VALUES('$name','$body','$price','$count','$path','$sklad')";
		$result = mysqli_query($this->link, $query);
		return $result;
	}

	public function Staff($id)
	{
		$query = "SELECT * FROM products WHERE id={$id}";
		$result = mysqli_query($this->link, $query);
		return $result;
	}

	public function Get_Tables(){
		$query = "SELECT * FROM tables";
		$result = mysqli_query($this->link, $query);
		return $result;
	}
	public function Add_Table($name){
		$query = "INSERT INTO tables (name) VALUES({$name})";
		$result = mysqli_query($this->link, $query);
		return $result;
	}
}
