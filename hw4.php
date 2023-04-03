// 4.1
<?php
if (isset($_GET['name'])) {
    var_dump($_GET['name']);
}
?>

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Имя:</label>
    <input type="text" name="name" id="name">
    <button type="submit">Отправить</button>
</form>

// 4.2
<?php
$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? '';

if (!empty($name) && !empty($age)) {
    if (!is_numeric($age)) {
        $age = '';
        echo 'Введите в поле возраст число';
    } else {
        echo "Привет, {$name}! Тебе {$age} лет.";
    }
}
?>

<form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Имя:</label>
    <input type="text" name="name" id="name" value="<?= $name ?>" required>
    <label for="age">Возраст:</label>
    <input type="text" name="age" id="age" value="<?= $age ?>" required>
    <button type="submit">Отправить</button>
</form>

// 4.3
<?php
var_dump($_POST['student']);
?>
<form method="post">
    <div>
        Первый ученик:<br> ФИО: <input type="text" name="student[]">
    </div>
    <hr>
    <div>
        Второй ученик:<br> ФИО: <input type="text" name="student[]">
    </div>
    <hr>
    <div>
       Третий ученик:<br> ФИО: <input type="text" name="student[]">
    </div>
    <hr>
    <div>
        Четвертый ученик:<br> ФИО: <input type="text" name="student[]">
    </div>
    <hr>
    <button type="submit">отправить</button>
</form>