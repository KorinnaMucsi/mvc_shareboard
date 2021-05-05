<?php 

abstract class Controller {
    protected $action;
    protected $request;

    public function __construct($action, $request)
    {
        $this->action = $action;
        $this->request = $request;
    }

    public function executeAction()
    {
        return $this->{$this->action}();
    }

    public function returnView($viewmodel, $fullview)
    {
        $view = "views/" . get_class($this) . "/$this->action.php";
        if  ($fullview){
            require_once('views/main.php');
        } else {
            require_once($view);
        }
    }
}

?>