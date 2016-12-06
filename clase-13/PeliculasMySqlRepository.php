<?php

require_once('MySqlRepository.php');

class PeliculasMySqlRepository extends MySqlRepository
{
	public function testConnection()
	{
		$this->connect();
		foreach($this->db->query('SELECT * FROM pelicula') as $row)
		{
			var_dump($row);
		}

		//Esto no hace falta con PDO. La conexión se cierra cuando el script termina.
		//Pero como vamos a ejecutar varias cosas seguidas con diferentes generaciones de instancias, la destruímos a mano.
		$this->db = null;

		echo '<br/><br/><br/>';

		$this->connectWithParams();
		$stmt = $this->db->prepare('SELECT * FROM pelicula');
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC))
		{
		    var_dump($row);
		}

		$this->db = null;

		echo '<br/><br/><br/>';

		$this->connectWithAttributes();
		$stmt = $this->db->prepare('SELECT * FROM pelicula');
		$stmt->execute();
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		$this->db = null;

		$this->connectWithAttributes();
		$stmt = $this->db->prepare('INSERT INTO actor (nombre, apellido, rating) VALUES(\'Susana\', \'Gimenez\', 9.3)');
		$stmt->execute();
		echo $this->db->lastInsertId();
	}

	public function generateErrors()
	{
		$this->connect();
		var_dump($this->db->query('SELECT * FROM sarlangaaaa'));

		//Esto no hace falta con PDO. La conexión se cierra cuando el script termina.
		//Pero como vamos a ejecutar varias cosas seguidas con diferentes generaciones de instancias, la destruímos a mano.
		$this->db = null;

		echo '<br/><br/><br/>';

		$this->connectWithParams();
		var_dump($this->db->query('SELECT * FROM sarlangaaaa'));
		$this->db = null;

		echo '<br/><br/><br/>';

		$this->connectWithAttributes();
		var_dump($this->db->query('SELECT * FROM sarlangaaaa'));
		$this->db = null;
	}

	public function queriesWithParams()
	{
		//Orden implicito
		$stmt = $this->db->prepare("SELECT * FROM actor WHERE name = ?");
		$stmt->execute(['Susana']);
		$stmt->execute(['Pedro']);
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		//Orden explicito
		$stmt = $this->db->prepare("SELECT * FROM actor WHERE id = ? AND name = ?");
		$stmt->bindValue(1, 50, PDO::PARAM_INT);
		$stmt->bindValue(2, 'Susana', PDO::PARAM_STR);
		$stmt->execute();
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		//Por Nombre
		$stmt = $this->db->prepare("SELECT * FROM actor WHERE id = :id AND name = :name");
		$stmt->execute([
			':name' => 'Susana',
			':id' => 50
		]);
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		$stmt = $this->db->prepare("SELECT * FROM actor WHERE id = :id AND name = :name");
		$stmt->bindValue(':id', 50, PDO::PARAM_INT);
		$stmt->bindValue(':name', 'Susana', PDO::PARAM_STR);
		$stmt->execute();
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		$id = 50;
		$nombre = 'Susana';
		$stmt = $this->db->prepare("SELECT * FROM actor WHERE id = :id AND name = :name");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->bindParam(':name', $nombre, PDO::PARAM_STR);
		$stmt->execute();
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		$id = 51;
		$nombre = 'Carmen';
		$stmt->execute();
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		//Para Insert
		$stmt = $this->db->prepare("INSERT INTO actor (nombre, apellido, rating) 
									VALUES(:firstName, :lastName, :rating)");
		$stmt->execute([
			':fisrtName' => 'Carmen',
			':lastName' => 'Barbieri',
			':rating' => 5.4
		]);
		$affected_rows = $stmt->rowCount();

		//Para Delete
		$stmt = $this->db->prepare("DELETE FROM actor WHERE id = :id");
		$stmt->bindValue(':id', 50, PDO::PARAM_STR);
		$stmt->execute();
		$affected_rows = $stmt->rowCount();

		//Para Update
		$stmt = $this->db->prepare("UPDATE actor SET name = ? WHERE id = ?");
		$stmt->execute([
			'Susanita',
			50
		]);
		$affected_rows = $stmt->rowCount();

		/**
		 * BINDPARAM solo se puede utilizar para bindear variables.
		 * Ademas, las utiliza por referencia.
		 *
		 * BINDVALUE puede bindear variables o valores; y no los utiliza por referencia.
		 */
	}

	public function transactions()
	{
		$this->db->beginTransaction();
		try
		{
		    $stmt = $this->db->prepare("INSERT INTO actor (nombre, apellido, rating) 
										VALUES(:firstName, :lastName, :rating)");
			$stmt->execute([
				':fisrtName' => 'Carmen',
				':lastName' => 'Barbieri',
				':rating' => 5.4
			]);

			$stmt = $this->db->prepare("DELETE FROM actor WHERE id = :id");
			$stmt->bindValue(':id', 50, PDO::PARAM_STR);
			$stmt->execute();

		    $this->db->commit();
		}
		catch(PDOException $e)
		{
		    $this->db->rollBack();
		    echo $e->getMessage();
		}

		$this->db->beginTransaction();
		try
		{
		    $stmt = $this->db->prepare("UPDATE actor SET name = ? WHERE id = ?");
			$stmt->execute([
				'Susanita',
				50
			]);

			$stmt = $this->db->prepare("INSERT INTO actor (id, nombre, apellido, rating) 
										VALUES(:id, :firstName, :lastName, :rating)");
			$stmt->execute([
				':fisrtName' => 'Carmen',
				':lastName' => 'Barbieri',
				':rating' => 5.4,
				':id' => 1
			]);

		    $this->db->commit();
		}
		catch(PDOException $e)
		{
		    $this->db->rollBack();

		    echo $e->getMessage();
		}
	}
}