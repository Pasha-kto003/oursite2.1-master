<a name="rezult"></a>

<form method="POST" action="#rezult" class="POST_CALC_1 ">'.$rezult.'

    <input type="radio" name="operator" value="plus">+<br>

    <input type="radio" name="operator" value="minus">-<br>

    <input type="radio" name="operator" value="multi">*<br>

    <input type="radio" name="operator" value="delit">/<br>

    <input type="number" name="first" required><br>

    <input type="number" name="second" required><br>

    <input type="submit" name="send" value="���������">

</form>

<?php>
    if($_POST['first']{
	$first = strip_tags($_POST['first']);
    }
	if(_POST['second']){
	$second = strip_tags($_POST['second']);}
	if($_POST['send']){
	if(!$_POST['operator']){
	$rezult = '�������� ����';
	}
	else{
	if($_POST['operator'] == 'plus'){
	$rezult = '��������� ��������: <br>'.($first + $second);
	}
	if($_POST['operator'] == 'minus'){
	$rezult = '��������� ���������: <br>'.($first - $second);
	}
	if($_POST['operator'] == 'multi'){
	$rezult = '��������� ���������: <br>'.$first * $second;
	}
	if($_POST['operator'] == 'delit'){
	$rezult = '��������� �������: <br>'.$first / $second;
	}
	}
	
	
	}
	else{
	$rezult = '����������� �������� �����';
	}
	
</?php>