<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="ru">
    <link rel="stylesheet" href="css/resyltStyle.css">
</head>
<body>
<?php if(isset($_GET['value1']) && isset($_GET['value2'])) { 

function mb_strrev($value1)
{
    $value1 = strrev(mb_convert_encoding($value1, 'UTF-16BE', 'UTF-8'));
    return mb_convert_encoding($value1, 'UTF-8', 'UTF-16LE');
}

    $value1 = (urldecode($_GET['value1'])); 
    $reversedValue1 = mb_strrev($value1);
    // Писать строго капсом
    $value2 = str_replace('Е', 'Н', $_GET['value2']);} 
    ?>

<div class="containerBox">
    <h1>Результат обработки формы</h1>
    <table border="1">
        <tr>
            <th>№</th>
            <th>Параметр</th>
            <th>Значение</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Метод</td>
            <td>GET</td>
        </tr>
        <tr >
            <td>2</td>
            <td>IP-адрес</td>
            <td><?php echo $_SERVER['REMOTE_ADDR']; ?></td>
        </tr>
        <tr >
            <td>3</td>
            <td>Переход</td>
            <td><?php echo $_SERVER['HTTP_REFERER']; ?></td>
        </tr>
    </table>
    
    <h2>Обработанные значения</h2>
    <p>Первое значение в обратном порядке: <?php echo $reversedValue1; ?></p>
    <p>Второе значение с заменой 'E' на 'H': <?php echo $value2; ?></p>
</div>

    
<?php
    setcookie('form_values', json_encode($_GET), time() + 3600);
?>
</body>
</html>