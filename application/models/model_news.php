<?php


class Model_News extends Model
{
    public function get_data()
    {
        $query = "SELECT * FROM news ORDER BY id DESC";
        $result = mysqli_query($this->link, $query);
        return $result != false ? $result : null;
    }
}