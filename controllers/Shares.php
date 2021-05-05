<?php 

class Shares extends Controller{
    public function index()
    {
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->index(), true);
    }

    public function add()
    {
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->add(), true);
    }
}

?>