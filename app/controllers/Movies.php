<?php namespace App\Controllers;

use App\Models\Usermodel;

class Movies extends BaseController
{
        public function __construct(){
            $db = db_connect();
            helper('html');
            $session 	= session();
            $this->userModel = new Usermodel($db);
        }

        public function index() {
               $this->login();
               }

        public function login(){
                echo view("signin");
        }

        public function signinn() {
                $username      = $this->request->getPost('username');
                $password   = $this->request->getPost('password');
                $username= stripslashes($username);
                $password = stripslashes($password);

                

               $result = $this->userModel->clientLogin($username, $password);



               if($result) {
                    
                    $arr = array(
                        'username' => $username,
                        'logged_in'	=> TRUE
                    );

                    $this->session->setFlashdata($arr);
                    $name = $this->session->getFlashdata('username');
                    return redirect()->to('list/'.$name);

                } else {
                  
                    return redirect()->route('login');
                }
            }

                public function save($name) {
                $movie_name	= $this->request->getPost('movie_name');
                $movie_year	= $this->request->getPost('movie_year');
                $movie_actor		= $this->request->getPost('movie_actor');
                $movie_ratings		= $this->request->getPost('movie_ratings');
            
                $data = [
                    'movie_name'		=> $movie_name,
                    'movie_year'		=> $movie_year,
                    'movie_actor'			=> $movie_actor,
                    'movie_ratings'			=> $movie_ratings,
                ];
        
                $result = $this->userModel->add($data);
                if($result) {
                    echo view('saved',compact("name"));
                } else {
                    echo "Something went wrong";
                        }
                        
            }
            
            public function list($name) {
                $data['result']	= $this->userModel->list();
                $data['name'] = $name;
                echo view('list',$data);
        }


        public function edit($movie_id,$name){
            $data['result']	= $this->userModel->get_user($movie_id);
            $data['name'] = $name;
             echo view('edit', $data);
           
     }

     public function update($movie_id,$name) {
         
         $movie_ratings		= $this->request->getPost('movie_ratings');

         $data = [
             'movie_ratings'			=> $movie_ratings,
            ];
 
         $result = $this->userModel->u_pdate($movie_id, $data);
         if($result) {
             
             echo view('update',compact("name"));
         } else {
             echo "Something went wrong";
         }
     }
            
}
?>