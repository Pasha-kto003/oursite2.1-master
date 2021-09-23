<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <input type="radio" name="operator" value="plus">+<br>
    <input type="radio" name="operator" value="minus">-<br>
    <input type="radio" name="operator" value="multi">*<br>
    <input type="radio" name="operator" value="delit">/<br>
    <input type="number" name="first" required><br>
    <input type="number" name="second" required><br>
    <input type="submit" name="send" value="Посчитать">
    </form>

    <?php

        if($_POST['first']){
            $first = strip_tags($_POST['first']);
        }
        if($_POST['second']){
            $second = strip_tags($_POST['second']);
        }

        if($_POST['send'])
        {
            if(!$_POST['operator'])
            {
                $rezult = 'Введите знак то';
            }

            else{
                if($_POST['operator'] == 'plus'){
                    $rezult = 'Сумма<br>'. ($first + $second);
                }
                if($_POST['operator'] == 'minus'){
                    $rezult = 'Разность<br>'. ($first - $second);
                }
                if($_POST['operator'] == 'multi'){
                    $rezult = 'Произведение<br>'. $first * $second;
                }
                if($_POST['operator'] == 'delit'){
                    $rezult = 'Деление<br>'. $first / $second;
                }
            }
        }
        else{
            $rezult = 'Это только калькулятор';
        }
    ?>
</body>
</html>