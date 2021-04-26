<?php
class Controller_company extends Controller
{
    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model_Company();
       
    }
    function action_about()
    {
        
        $this->view->generate('about_view.php', 'template_view.php');
    }

    function action_add()
    {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != "admin") header("Location: /user/login");

        if ($_POST) {

            $uniq = uniqid();
            $uploaddir = "images/";
            $ext = explode('/', $_FILES['img']['type']);
            $uploadfile = $uploaddir . $uniq . "." . $ext[1];
            if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile));
            $this->model->add($_POST['name'], $_POST['body'], $_POST['count'], $_POST['price'], $uploadfile, $_POST['sklad']);
            //header("location: /red_news");
        }
        $date = $this->model->Get_Tables();
        $this->view->generate('add_view.php', 'template_view.php', $date);
    }
 
    function action_products()
    {
        
        $date = $this->model->Staff($_GET['href']);
        $e = null;
        foreach ($this->model->Get_Tables() as $el){
            if($el['id'] == $_GET['href']){$e = $el;break;}
        }
        $this->view->generate('products_view.php', 'template_view.php', [$date,$e]);
    }

    function action_skladi()
    {
        $date = $this->model->Get_Tables();
        $this->view->generate('skladi_view.php', 'template_view.php', $date);
    }

    function action_add_sklad()
    {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != "admin") header("Location: /user/login");
        if ($_POST) {
            $this->model->Add_Table($_POST['name']);
        }

        $this->view->generate('AddSklad_view.php', 'template_view.php');
    }

    // function action_sklad()
    // {

    // }
}
