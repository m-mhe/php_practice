<?php
class Login_query extends Db_connection
{
    private $student_id;
    private $pwd;
    public function __construct($student_id, $pwd)
    {
        $this->student_id = $student_id;
        $this->pwd = $pwd;
        parent::__construct("mysql:host=localhost;dbname=acadence;", "mmhe", "password");
    }

    public function login(){
        try {
            $query = "SELECT student_id, userName, img_url, token FROM student_profile WHERE student_id = :student_id AND pwd = :pwd;";
            $stmt = parent::connect()->prepare($query);
            $stmt->bindParam(":student_id", $this->student_id);
            $stmt->bindParam("pwd", $this->pwd);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt = null;
            return $result;
        } catch (PDOException $e) {
            return null;
        }
    }
}