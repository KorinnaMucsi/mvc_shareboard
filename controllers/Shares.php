<?php 

class Shares extends Controller{
    public function index()
    {
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->index(), true);
    }

    public function add()
    {
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: ' . ROOT_PATH . 'shares');
        }
        
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->add(), true);
    }
}

?>