<?php
include 'conf.php';
include 'database.php';
include 'config_help.php';

$dbConnection = connectToDatabase();
$messageBoardCategories = getCategory($dbConnection);
$messageBoardItems = getItems($dbConnection);

$config = [
    'tableHeaders' => [
        'email' => 'Электронная почта',
        'category' => 'Категория объявления',
        'title' => 'Заголовок объявления',
        'description' => 'Текст объявления'
    ]
];

?>


<!DOCTYPE html>
<html>
<head>
    <title>Adboard (Lab 5)</title>
    <meta charset="UTF-8">
</head>

<body>
<form name="userAd" method="post">
    <label>ДОБАВИТЬ ОБЪЯВЛЕНИЕ</label><br><br>
    <label>Категория объявления:</label><br>
    <select name="adCategory">

    </select><br><br>
    <label>Название объявления:</label>
    <input name="adTitle"><br><br>
    <label>Ваш email:</label>
    <input name="adEmail"><br><br>
    <label>Текст объявления:</label><br>
    <textarea name="adText" rows="10" cols="80"></textarea><br><br>
    <button type="submit">Отправить объявление</button>
</form>


<p>СПИСОК ОБЪЯВЛЕНИЙ:</p>
<table border="1">
    <tr>
        <th>Категория</th>
        <th>Название</th>
        <th>Email</th>
        <th>Текст</th>
    </tr>

</table>
</body>
</html>


?>