<?php 
namespace Core;
use Core\Database;
class Authenticator{
  public function attempt($email, $password)
    {
        $user = App::resolve(Database::class)
            ->query('SELECT * FROM users WHERE email = :email', [
            'email' => $email
        ])->find();

        if ($user) {
          if ($user['status'] === 0) {
            return 'suspended';     
        }
 
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'id' => $user['id'],
                    'first_name' => $user['first_name'],
                    'last_name' => $user['last_name'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                ]);
      
                return true;
    
            }
        }
       
        return false;
    }

 public function login($user){
     // register user in session
       
     $oldSessionData = [
      'user' => [
        'ID' => (int) $user['id'],
        'firstname' => $user['first_name'],
        'lastname' => $user['last_name'],
           'email' => $user['email'],
           'UserType' => $user['role'],
      ]
  ];

  

    // $oldSessionData = $_SESSION['user'];
     session_regenerate_id(true);
     $_SESSION = $oldSessionData;
    
}

public function logout(){
    Session::destroy();
  
}

}