<?php 
class User{
	
	private $pdo;

	public function __construct($pdo){
		$this->pdo = $pdo;
	}

	public function signup(){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$pwhash = password_hash($password, PASSWORD_DEFAULT);

		$stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");

		$stmt->execute([':username' => $username]
			);

 		$row = $stmt->fetchAll();
 
            if(!empty($row)) {

                if($row[0]['Username'] == $username) {
                    //var_dump($row[0]);
                    echo "The username " . $username . " not available";
                    echo "Use a difference username or try <a href='index.php'>loging in</a>";
                //header('Location: index.php');
                }
            
            } else {
                $stmt = $this->pdo->prepare("INSERT INTO users (username, password) values (:username, :password)");
      
                $stmt->execute(array(
                ':username' => $username,
                ':password' => $pwhash,
                )); 
                //header('Location: index.php');
            }      
        }		
 
}