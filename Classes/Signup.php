<?php

class Signup extends Database
{
    public function __construct(private $username, private $password)
    {
    }

    public function insertUser()
    {
        $query = "INSERT INTO users (username, password) VALUES (:username, :password);";

        $stmt = parent::getConnection()->prepare($query);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }

    public function isEmptySubmitForm()
    {
        if (isset($this->username) && isset($this->password)) {
            return false;
        }
        return true;
    }

    public function signupUser()
    {
        if ($this->isEmptySubmitForm()) {
            header("Location: " . $_SERVER['DOCUMENT_ROOT']) . '/Signup.php';
            die();
        }

        $this->insertUser();
    }
}
