<?php

class Controller_User extends Controller
{
    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model_User();
    }

    public function action_login()
    {
        $this->view->generate('login_view.php', 'template_view.php');
    }

    public function action_register()
    {
        $this->view->generate('register_view.php', 'template_view.php');
    }

    public function action_post_login()
    {
        $rez = null;
        if ($_POST) {
            foreach ($this->model->get_data() as $el){
                if($el['email'] == $_POST['email'] && $el['password'] == $_POST['password'] && $el['status'] == "admin") {
                    Session::SetUser($el);
                    $rez = json_encode(["status" => true]);break;}
            }
            if($rez != null){echo $rez;}
            else{echo json_encode(
               ["status" => false,"post" => $_POST]

            );}
        }
        else{ echo json_encode(["status" => false , 'post' => $_POST]);}

    }

    public function action_post_register()
    {
        if ($_POST) {
            foreach ($this->model->get_data() as $el){
                if($el['email'] == $_POST['email'] && $el['password'] == $_POST['password'] && $el['status'] == "admin") echo json_encode(["status" => true ]);
            }
        }
        else{ echo json_encode(["status" => false]);}

    }

    public function action_logout()
    {
        if(Session::GetUser()) unset($_SESSION['user']);
        header('Location: /');
    }
}