<?php
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;


class Usermodel extends Model {
        
        protected $db;
        public function __construct(ConnectionInterface &$db) {
        $this->db =& $db;
    }
   
    

    public function clientLogin ($username, $password) {
        $result = $this->db
                        ->table('user_list')
                        ->where(["username" => $username, "password" => $password])
                        ->get()
                        ->getRow();
        
        
        if($result) {
            $data = [
                'id'          => $result->id,
                'username'        => $result->username,
                'password'       => $result->password,
                'login_status'      => TRUE,
            ];
            return $data;
        } else {
            return 0;
        }
        
    }

    function add($data) {
		return $this->db
                        ->table('movies')
                        ->insert($data);
    }
    

    public function list() {
		return $this->db
                        ->table('movies')
                        ->orderBy("movie_year")
                        ->get()
                        ->getResult();




}


public function get_user($movie_id) {
    return $this->db
                    ->table('movies')
                    ->where(["movie_id" => $movie_id])
                    ->get()
                    ->getRow();
}

public function u_pdate($movie_id,$data) {
    return $this->db
                    ->table('movies')
                    ->where(["movie_id" => $movie_id])
                    ->set($data)
                    ->update();
}


}




?>