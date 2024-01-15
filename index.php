<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    <!-- form to fill and retrieve info from user --> 
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="number" name="num01" placeholder="Number One"> 
            <select name="Operator">
                <option value="add">+</option>
                <option value="divide">/</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
            </select>
            <input type="number" name="num02" placeholder="Number Two"> 
            <button>Calculate</button>
        </form>

        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
            $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["Operator"]);
        }
        ?>
    </main>
</body>
</html>