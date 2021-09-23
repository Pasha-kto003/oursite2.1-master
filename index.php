<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a name="rezult"></a>
<form method="POST" action="#rezult" class="POST_CALC_1 ">'.$rezult.'
    <input type="radio" name="operator" value="plus">+<br>
    <input type="radio" name="operator" value="minus">-<br>
    <input type="radio" name="operator" value="multi">*<br>
    <input type="radio" name="operator" value="delit">/<br>
    <input type="number" name="first" required><br>
    <input type="number" name="second" required><br>
    <input type="submit" name="send" value="Посчитать">

</form>
<?php//1

if($_POST['first']) 
    { $first = strip_tags( $_POST['first'] ); }//2

if($_POST['second']) 
    { $second = strip_tags( $_POST['second'] ); }//3

if($_POST['send'])//4
{

    if(!$_POST['operator'])//6
    {

    $rezult = 'Нужно выбрать знак';

    }

    else
    {

    if($_POST['operator'] == 'plus') 
        { $rezult = 'Результат сложения :<br>'. ($first + $second) ;}//12

    if($_POST['operator'] == 'minus')   
        { $rezult = 'Результат минусования :<br>'.($first - $second) ;}//13

    if($_POST['operator'] == 'multi')
        { $rezult = 'Результат умножения :<br>'. $first * $second ;}//14

    if($_POST['operator'] == 'delit')
        { $rezult = 'Результат деления:<br>'. $first / $second ;}//15

    }

}

else
{
$rezult = 'Простой калькулятор! ';
}

?>
</body>
</html>