<?php

interface UserRepository {
    public function getById($id);
    public function getByEmail($email);
    public function save(User $user);
}

 ?>
