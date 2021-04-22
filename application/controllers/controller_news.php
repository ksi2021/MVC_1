<?php

class Controller_News extends Controller
{
    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model_News();
    }

    public function action_index(){
        $e = $this->model->get_data();
        $this->view->generate('news_view.php','template_view.php', $e);
    }
}