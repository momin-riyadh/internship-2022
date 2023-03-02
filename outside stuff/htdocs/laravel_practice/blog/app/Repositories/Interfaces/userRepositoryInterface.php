<?php

namespace App\Repositories\Interfaces;
Interface userRepositoryInterface{
    public function all();
    public function store($data);
    public function find($id);
    public function update($data,$id);
    public function delete($id);
}
?>