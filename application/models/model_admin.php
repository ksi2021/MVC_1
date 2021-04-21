<?php
class Model_Admin extends Model{

    public function get_portfolio(){
        $query = "SELECT * FROM portfolio";
        $result = mysqli_query($this->link,$query);
        return $result;
    }

    public function delete($id,$table){
        $query = "DELETE FROM {$table} WHERE id={$id}";
        $result = mysqli_query($this->link,$query);
        return $result;
    }

    public function get_record($id,$table)
    {
        $query = "SELECT * FROM {$table} WHERE id={$id}";
        $result = mysqli_query($this->link,$query);
        return mysqli_fetch_assoc($result);
    }

    public function add_record($table,$params,$values){
        $query = "INSERT INTO {$table} {$params} VALUES ({$values})";
        $result = mysqli_query($this->link,$query);
    }

    public function update_record($table,$params,$values){
        $query = "UPDATE {$table} SET {$params} WHERE {$values}";
        $result = mysqli_query($this->link,$query);
    }
}