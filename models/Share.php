<?php 

class ShareModel extends Model {
    public function index()
    {
        $this->query("SELECT * FROM shares ORDER BY create_date DESC");
        $rows = $this->recordset();
        return $rows;
    }

    public function add()
    {
        //Sanitize form
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){
            //Insert Query
            $this->query("INSERT INTO shares (title, body, link, user_id) VALUES (:title, :body, :link, :user_id)");
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_id', 1);

            $this->execute();

            //Redirect if successfully saved
            if($this->lastInsertId()){
                header('Location: ' . ROOT_PATH . 'shares');
            }
        }

        return;
    }
}

?>