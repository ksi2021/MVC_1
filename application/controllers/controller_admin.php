<?php

class Controller_Admin extends Controller
{
    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model_Admin();
        if (Session::GetUser()) {
            switch (Session::GetUser()['status']) {
                case "admin":
                    break;

                case "user":
                    header("Location: http://localhost/");
                    break;
            }
        }
        else {
            header("Location: http://localhost/");
        }


    }

    public function action_index()
    {
        $this->view->generate('Admin/main_view.php', 'Admin/template_view.php');
    }
    public function action_delete(){
        if($_POST){

            switch ($_POST['type']){
                case 'portfolio':
                    $e =  $this->model->delete($_POST['id'],$_POST['type']);
                    echo "<script> window.location.pathname = '/admin/portfolio/';</script>";

                case 'news':
                    $e =  $this->model->delete($_POST['id'],$_POST['type']);
                    echo "<script> window.location.pathname = '/admin/news/';</script>";

                default:
                    break;
            }

        }
        echo "<script> window.location.pathname = '/admin/';</script>";

    }
    public function action_portfolio()
    {
        if($_POST)
        {
            $this->model->add_record('portfolio','(Year,Name,Info)',"{$_POST['year']} , {$_POST['title']}, {$_POST['text']}");
        }
        $data = $this->model->get_portfolio();
        $this->view->generate('Admin/portfolio_view.php', 'Admin/template_view.php' , $data);
    }

    public function action_news()
    {
        if($_POST)
        {
            $date = date('d:m:Y H:i');
            ($this->model->add_record('`news`','(`id`,`title`,`text`,`date`,`author`,`author_id`)',"NULL,'{$_POST['title']}' , '{$_POST['text']}', '{$date}','{$_SESSION['user']['username']}','{$_SESSION['user']['id']}'"));

        }
        $data = $this->model->get_news();
        $this->view->generate('Admin/news_view.php', 'Admin/template_view.php' , $data);
    }

    public function action_edit(){
        if($_GET && !empty($_GET['table']) && !empty($_GET['id'])){
            switch ($_GET['table']){
                case 'portfolio':
                    if($_POST){$this->model->update_record('`portfolio`',"`Year`='{$_POST['year']}',`Name`='{$_POST['title']}',`Info`='{$_POST['info']}'","`id`={$_POST['id']}");}
                    $e = $this->model->get_record($_GET['id'],$_GET['table']);
                    $this->view->generate('Admin/portfolioEdit_view.php','Admin/template_view.php',$e);
                    break;

                case "news":
                    if($_POST){$this->model->update_record('`news`',"`title`='{$_POST['title']}',`author`='{$_POST['author']}',`text`='{$_POST['info']}'","`id`={$_POST['id']}");}
                    $e = $this->model->get_record($_GET['id'],$_GET['table']);
                    $this->view->generate('Admin/newsEdit_view.php','Admin/template_view.php',$e);
                    break;
                default:
                    header('Location: /admin/');
            }
        }
        else{header('Location: /admin/');}
    }





}
