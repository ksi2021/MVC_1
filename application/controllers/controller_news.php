<?php

class Controller_News extends Controller
{
    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model_News();
    }

    public function action_index(){
        $this->Add_Comment();
        $e = $this->model->get_data('news');
        $comments = $this->model->get_data('comments');
        $this->view->generate('news_view.php','template_view.php', [$e,$comments]);
    }
    public function Add_Comment(){
        if(Session::GetUser())
        {
            if($_POST)
            {
                $this->model->add_comment([$_POST['text'],Session::GetUser()['username'],Session::GetUser()['id'],$_POST['post_id']]);
            }
        }

    }
}