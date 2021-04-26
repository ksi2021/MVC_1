<?php
class Controller_User extends Controller
{
    function __construct()
	{
		$this->model = new Model_User();
		$this->view = new View();
	}

    function action_index()
    {
        $message = null;
        if($_POST)
        {
            if( strip_tags($_POST['user'])&& strip_tags($_POST['pass']) && strip_tags($_POST['email']))
            {
                    if(!$this->model->email_is_exist(strip_tags($_POST['email']))){
                        $message = "email is exist";
                        goto a;
                          
                          
                    }
                    else{
                        
                        if($this->model->register(strip_tags($_POST['email']),strip_tags($_POST['pass']),strip_tags($_POST['user'])))
                        {header('Location: /user/login');}
                      
                    }
            }
            return 0;
        }
        a:
        $this->view->generate('login_view.php', 'template_view.php',$message);
    }

    function action_login()
    {   
        $message = null;
        if(isset($_POST))
        {   if(isset($_POST['pass']) && isset($_POST['email']))
            if(strip_tags($_POST['pass']) && strip_tags($_POST['email']))
            {
                $log =$this->model->login(htmlspecialchars(strip_tags($_POST['pass'])),htmlspecialchars(strip_tags($_POST['email'])));
                
                if($log->num_rows == 1)
                {
                    foreach($log as $el)
                    $_SESSION['user'] = $el;
                    
                    
                        header('Location: /company/skladi');
                }
                else{
                    $message = "incorrect data";
                    goto b;
                }
            }
        }
       // $e = ($this->model->email_is_exist("test@mail.ru"));
        
          //  var_dump($e);
        
        b:
        $this->view->generate('register_view.php', 'template_view.php',$message);
    }

    function action_logout()
    {
       
        session_destroy();
        // echo "<script>
        // document.location.pathname = '/user/login';
        // </script>";
        return header('Location: /user/login');
        
     
    }
}
