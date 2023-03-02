<?php
namespace App\Repositories;
use App\Repositories\Interfaces\userRepositoryInterface;
use App\user;

class userRepository implements userRepositoryInterface{

    
    public function store($data){
     
            user::create($data);
       
    }
}

?>