<?php 

class Users extends Controller {
    public function register()
    {
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->register(), true);
    }

    public function login()
    {
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->login(), true);
    }

    public function logout()
    {
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->logout(), true);
    }
}

?>