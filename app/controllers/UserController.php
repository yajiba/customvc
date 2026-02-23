<?php
require_once 'app/models/UserModel.php';
class UserController extends Controller
{
   
    public function index()
    {
        // Handle the 'user' route (no parameters)
        $this->view('user');
    }

    public function userbyID($id)
    {
        // Handle the 'user/:id' route with the $id parameter
        $user = UserModel::getUserById($id);
        $data = [
            'users' => $user

        ];
        echo json_encode($data);
       /*  $this->view('userlist', ['users' => $user]); */
    }
    public function list_of_users() {
        $user = UserModel::userList();
        $data = [
            'count' => count($user),
            'users' => $user
        ];
        // echo json_encode($data);
      $this->view('userlist', ['data' => $data]); 
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = UserModel::login($_POST);
            if($login) {
                $_SESSION['logged-in'] = $login;
                header('Location: '.BASE_URL);
             }else{
                $_SESSION['error'] = "Username or password is Incorrect";
             }
        }
        $this->view('login');
    }
    public function logout()
    {
       unset($_SESSION['logged-in']);
       
        header('Location: '.BASE_URL);  // Redirect to a different page
        exit; 
       
    }

 
}

