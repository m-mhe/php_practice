<?php

include "db.php";

header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];


if ($method == 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $student_id = $input['student_id'];
    $pwd = $input['pwd'];
    try {
        $query = "SELECT * FROM student_profile WHERE student_id = ? AND pwd = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$student_id, $pwd]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = null;
        $pdo = null;
        if (!empty($result)) {
            echo json_encode($result);
        } else {
            die("No such user!");
        }
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}else{
    die("INVALID REQUEST!");
}