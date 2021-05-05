<?php 

class Bootstrap{
    protected $request;
    protected $controller;
    protected $action;

    public function __construct($request)
    {
        $this->request = $request;

        if($this->request['controller']==''){
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }

        if($this->request['action'] == '') {
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }
    }

    public function createController()
    {
        //Check if controller class exist
        if (class_exists($this->controller)) {
            //Check if base Controller class is the parent of this class
            $parents = class_parents($this->controller);

            if(in_array('Controller', $parents)){
                //Check if the method/action exist
                if(method_exists($this->controller, $this->action)) {
                    //Instantiates the controller class
                    return new $this->controller($this->action, $this->request);
                } else {
                    echo '<h1>Method does not exist.</h1>';
                    return;
                }
            } else {
                echo '<h1>Base controller class does not exist.</h1>';
                return;
            }           
        } else {
            echo '<h1>Controller class does not exist.</h1>';
            return;
        }
    }
}

?>