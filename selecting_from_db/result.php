<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST["user_name"];
    $pwd = $_POST["pwd"];

    try {
        require_once "includes/dbh.inc.php";
        $query = "SELECT id FROM user_id WHERE user_name = ? AND pwd = ?;";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$user_name,$pwd]);
        $result = $stmt->fetch(PDO::FETCH_NUM); //Only takes the first row.
        $queryTwo = "SELECT user_comment FROM comments WHERE user_id = ?;";
        $stmt = $pdo->prepare($queryTwo);
        $stmt->execute([$result[0]]);
        $comment = $stmt->fetchAll(PDO::FETCH_ASSOC); //Takes all rows and asiign a key values pair (associative array)
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        echo "!!!ERROR!!!". $e->getMessage();
    }
}else{
    header("Location: index.html"); 
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        if(!empty($comment)){
            foreach ($comment as $value){
                foreach ($value as $k => $v){
                    echo $v."<br>";
                }
            }
        }else{
            echo "This user has no comment";
        }
        ?>
    </h1>
</body>
</html>