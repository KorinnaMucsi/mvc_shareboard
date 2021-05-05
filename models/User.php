<?php 

class UserModel extends Model {
    public function register()
    {
        //Sanitize form
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        

        if(isset($post['submit'])){
            $password = md5($post['password']);
            //Insert Query
            $this->query("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);

            $this->execute();

            //Redirect if successfully saved
            if($this->lastInsertId()){
                header('Location: ' . ROOT_PATH . 'users/login');
            }
        }

        return;
    }
}

?>