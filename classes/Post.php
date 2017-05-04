<?php

class Post{
	private $pdo;

	public function __construct($pdo){
		$this->pdo = $pdo;
	}

	public function getAllPosts(){

		$stmt = $this->pdo->prepare("SELECT * FROM Posts");
		$stmt->execute();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $row;
	}

	public function removePost(){
		$post = $_GET['id'];

		$stmt = $this->pdo->prepare("DELETE FROM posts WHERE id = :post ");
        $stmt->execute([':post' => $post]); 		
	}

	public function createPost(){
		$title = $_POST['title'];
		$postcontent = $_POST['postcontent'];
		$user = $_SESSION['username'];

        if (isset($_POST['title']) &&
            isset($_POST['postcontent'])){

			$stmt = $this->pdo->prepare("INSERT INTO posts (Title, Content, User) values (:title, :content, :user)");
            $stmt->execute(array(
                ':title' => $title,
                ':content' => $postcontent,
                ':user' => $user
            ));  
        }

	}
	public function listAllJson($data)
  	{
    	return json_encode($data);
  	}	
}