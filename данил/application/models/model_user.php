<?php
class Model_User extends Model
{
	public function get_data()
	{
		$query = 'SELECT * FROM news';

        $result = mysqli_query($this->link, $query);
        return $result;

	}

	public function email_is_exist($email){
		$query = "SELECT * FROM users WHERE email = '$email'";
		$result = mysqli_query($this->link, $query);
		return $result->num_rows == 0 ? true:false;
	}

	public function register($email,$username,$password){
		$query = "INSERT INTO users (`password`, `email` ,`role`, `username`) VALUES('$password','$email','user','$username')";
		$result = mysqli_query($this->link, $query);
		return $result;
	}

	public function login($pass,$email)
	{
		$query = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
		$result = mysqli_query($this->link, $query);
		return $result;
	}
}

?>
