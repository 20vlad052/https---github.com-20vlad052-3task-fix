
<?php
#Подвержена инькциям
/*
if(isset($_POST['form'])) {
    echo 'Заголовок: ', $_POST['title'], '<br>';
    echo 'Текст: ', $_POST['content'];
}
*/
#Не подвержена инькциям
if(isset($_POST['form'])) {
    echo 'Заголовок: ', htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8'), '<br>';
    echo 'Текст: ', htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');
}
?>
<form method="POST">
    <p>Заголовок: <input name="title"></p>
    <p>Текст: <textarea name="content"></textarea></p>
    <p><button name="form">Отправить!</button></p>
</form>