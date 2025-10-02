<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="", method="post">
        <input type="number" name="a" step="any">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
        </select>
        <input type="number" name="b" step="any">
        <button type="submit">SUBMIT</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $a = filter_input(INPUT_POST, "a", FILTER_SANITIZE_NUMBER_FLOAT);
        $b = filter_input(INPUT_POST, "b", FILTER_SANITIZE_NUMBER_FLOAT);
        $o = htmlspecialchars($_POST["operator"]);
        if(!empty($a) || !empty($b) || !empty($o)){
            if(is_numeric($a)|| is_numeric($b)){
                switch($o){
                    case "+":
                        echo "Result: ". $a+$b;
                        break;
                    case "-":
                        echo "Result: ". $a-$b;
                        break;
                    case "*":
                        echo "Result: ". $a*$b;
                        break;
                    default: 
                        echo "Something went wrong!";

                }
            }else{
            echo "<h1>ERROR!</h1>";
        }
        }else{
            echo "<h1>ERROR!</h1>";
        }

    }
    ?>
</body>
</html>