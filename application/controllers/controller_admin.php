<?php

class Controller_Admin extends Controller
{
    public function __construct()
    {
        $this->view = new View();
        if (Session::GetUser()) {
            switch (Session::GetUser()['status']) {
                case "admin":
                    break;

                case "user":
                    header("Location: http://localhost:8080/");
                    break;
            }
        } else {
            header("Location: http://localhost:8080/");
        }


    }

    public function action_index()
    {
        $this->view->generate('Admin/login_view.php', 'Admin/template_view.php');
    }

    public function action_portfolio()
    {
        $this->view->generate('Admin/portfolio_view.php', 'Admin/template_view.php');
    }


}
