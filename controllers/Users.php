<?php 

class Users extends Controller {
    public function register()
    {
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->register(), true);
    }
}

?>