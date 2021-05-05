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

    public function login()
    {
        //Sanitize form
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);        

        if(isset($post['submit'])){
            $password = md5($post['password']);
            //Select Query for the logged in user
            $this->query("SELECT * FROM users WHERE email = :email AND password = :password");
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);

            $row = $this->singleRecord();
            var_dump($row);
            //Redirect if successfully logged in
            if($row){
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = [
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'email' => $row['email']
                ];
                header('Location: ' . ROOT_PATH . 'shares');
            } else {
                echo "Incorrect login parameters.";
            }
        }

        return;
    }

    public function logout()
    {
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();

        header('Location: ' . ROOT_PATH);
    }
}

?>