<?php

class Model_User extends Model
{

    public function get_data()
    {
        $query = "SELECT * FROM users";
        $result = mysqli_query($this->link, $query);
        return $result != false ? $result : null;
    }

}
