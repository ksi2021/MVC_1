<?php


class Model_News extends Model
{
    public function get_data($table)
    {
        $query = "SELECT * FROM {$table} ORDER BY id DESC";
        //var_dump($query);
        $result = mysqli_query($this->link, $query);
        return $result != false ? $result : null;
    }

    public function add_comment($data)
    {
        $query = "INSERT INTO `comments` (`id`,`text`,`author`,`user_id`,`news_id`) VALUES (NULL,'{$data[0]}', '{$data[1]}','{$data[2]}','{$data[3]}')";
        $result = mysqli_query($this->link, $query);
//        var_dump($query);
//        var_dump($result);
//        die();

    }
    public function delete_comment($id){
        $query = "DELETE FROM `comments` WHERE `id`={$id}";
        $result = mysqli_query($this->link, $query);
    }
}