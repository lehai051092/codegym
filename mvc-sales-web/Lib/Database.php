<?php

class Database
{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $password = DB_PASS;
    public $dbName = DB_NAME;

    public $link;
    public $error;

    /**
     * Database constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->connectDB();
    }

    /**
     * @return void
     * @throws Exception
     */
    public function connectDB()
    {
        try {
            $params = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
            $this->link = new PDO($params, $this->user, $this->password);
            // set the PDO error mode to exception
            $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            throw new PDOException("Connection failed: " . $e->getMessage());
        }
    }

    /**
     * @param $query
     * @return mixed
     * @throws Exception
     */
    public function select($query)
    {
        try {
            $stmt = $this->link->prepare($query);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
        } catch(PDOException $e) {
            $this->link = null;
            throw new PDOException("Error: " . $e->getMessage());
        }

        $this->link = null;
        return $result;
    }

    /**
     * @param $query
     * @return string[]
     */
    public function insert($query)
    {
        try {
            $this->link->exec($query);
        } catch (PDOException $e) {
            $this->link = null;
            throw new PDOException($query . "<br>" . $e->getMessage());
        }

        $this->link = null;
        return [
            'messages' => 'New record created successfully'
        ];
    }

    /**
     * @param $query
     * @return string[]
     */
    public function update($query)
    {
        try {
            $stmt = $this->link->prepare($query);
            $stmt->execute();
        } catch (PDOException $e) {
            $this->link = null;
            throw new PDOException($query . "<br>" . $e->getMessage());
        }

        $this->link = null;
        return [
            'messages' => $stmt->rowCount() . " records UPDATED successfully"
        ];
    }

    /**
     * @param $query
     * @return string[]
     */
    public function delete($query)
    {
        try {
            $this->link->exec($query);
        } catch (PDOException $e) {
            $this->link = null;
            throw new PDOException($query . "<br/>" . $e->getMessage());
        }

        $this->link = null;
        return [
            'messages' => 'Record deleted successfully'
        ];
    }

    /**
     * @param $query
     * @return array
     */
    public function getLastInsertId($query)
    {
        try {
            $this->link->exec($query);
            $result = $this->link->lastInsertId();
        } catch (PDOException $e) {
            $this->link = null;
            throw new PDOException($query . "<br/>" . $e->getMessage());
        }

        $this->link = null;
        return [
            'last_insert_id' => $result,
            'messages' => "New record created successfully. Last inserted ID is: " . $result
        ];
    }
}
