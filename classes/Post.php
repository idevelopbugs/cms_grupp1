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
    public function getPost()
    {
        $postId = (int) $_GET['id'];
        
        $stmt = $this->pdo->prepare("SELECT * FROM Posts WHERE id = :postId");
        $stmt->execute([
            ':postId' => $postId
        ]);
        $post = $stmt->fetch();
        return $post;
    }

	public function removePost(){
		$post = $_GET['id'];

		$stmt = $this->pdo->prepare("DELETE FROM posts WHERE id = :post ");
        $stmt->execute([':post' => $post]);
        
        $stmt = $this->pdo->prepare("DELETE FROM Likes WHERE Postid = :post ");
        $stmt->execute([':post' => $post]);
        
        header('Location: ../index.php?message=Post deleted!');
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
    
    public function editPost()
    {
        $postId = (int) $_GET['id'];
        
        if (isset($_POST['title']) &&
            isset($_POST['postcontent'])) {
            $title = $_POST['title'];
            $postcontent = $_POST['postcontent'];

            $stmt = $this->pdo->prepare("UPDATE Posts SET Title = :title, Content = :content WHERE id = :postId");

            $stmt->execute(array(
                ':title' => $title,
                ':content' => $postcontent,
                ':postId' => $postId
            ));
        } else {
            echo 'nothing here';
        } 
    }
    
    public function getPostLikes($id) {
        $postId = $id;
        $username = $_SESSION['username'];
        
        $stmt = $this->pdo->prepare("SELECT * FROM likes WHERE Postid = :postId && User = :username");
        
        $stmt->execute(array(
            ':postId' => $postId,
            ':username' => $username
        ));
        
        $like = $stmt->fetch();
        return $like;
    }
    
    public function likePost()
    {
        $postId = (int) $_GET['id'];
        $username = $_SESSION['username'];
        
        $stmt = $this->pdo->prepare("INSERT INTO likes (Postid, User) values (:postId, :username)");
        
        $stmt->execute(array(
            ':postId' => $postId,
            ':username' => $username
        )); 
    }
    
	public function listAllJson($data)
  	{
    	return json_encode($data);
  	}	
}