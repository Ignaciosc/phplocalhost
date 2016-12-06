<?php

class UserDatabaseRepository extends DatabaseRepository implements UserRepository {

    private function rowToEntity(array $row) {
        $entity = new User(
            $row['nombre'],
            $row['apellido'],
            $row['email'],
            $row['username'],
            $row['password']
        );

        $entity->setId($row['id']);
        $entity->setBirthDate($row['fecha_de_nacimiento']);
        $entity->setBio($row['bio']);

        return $entity;
    }

    private function rowsToEntities(array $rows) {
        $entities = [];

        foreach ($rows as $row) {
            $entities[] = $this->rowToEntity($row);
        }

        return $entities;
    }

    public function getById($id) {

        //conectarse a la base
        $conn = $this->getConnection();

        //ejecutar la busqueda
        $stmt = $conn->prepare('
            SELECT
                *
            FROM
                usuarios
            WHERE
                id = :id
        ');
        $stmt->bindValue(':id',$id,PDO::PARAM_INT);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //si no me trae ningun usuario me va a traer un false, asi que le paso null (array) para que no explote
        if(!$result) {
            return null;
        }

        //mapear los resultados
        return $this->rowToEntity($result);


        //devolver un Array

    }
    public function getByEmail($email) {

        //conectarse a la base
        $conn = $this->getConnection();

        //ejecutar la busqueda
        $stmt = $conn->prepare('
            SELECT
                *
            FROM
                usuarios
            WHERE
                email = :email
        ');
        $stmt->bindValue(':email',strtolower($email),PDO::PARAM_STR);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);


        //mapear los resultados
        return $this->rowToEntity($result);


        //devolver un Array

    }

    public function save(User $user) {
        $conn = $this->getConnection();

        $stmt = $conn->prepare('
            INSERT INTO usuarios (nombre, apellido, email, username, password, fecha_de_nacimiento, bio)
            VALUES (:firstName, :lastName, :email, :usernam, :password, :birthDate, :bio);
        ');

        $stmt->execute([
            ':firstName' => $user->getFirstName(),
            ':lastName' => $user->getLastName(),
            ':email' => $user->getEmail(),
            ':username' => $user->getUsername(),
            ':password' => $user->getPassword(),
            ':birthDate' => $user->getBirthDAte(),
            ':bio' => $user->getBio(),
        ]);

        $user->setId($conn->lastInsertId());
    }
}

 ?>
