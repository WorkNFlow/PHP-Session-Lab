<?php session_start(); ?>

<?php if(isset($_SESSION['name'])): ?>
    <p>Данные из сессии:</p>
    <ul>
        <li>Имя: <?= $_SESSION['name'] ?></li>
        <li>Фильм: <?= $_SESSION['film_name'] ?></li>
    </ul>
<?php else: ?>
    <p>Данных пока нет.</p>
<?php endif; ?>

<a href="index.html">Заполнить форму</a> |
<a href="view.php">Посмотреть все данные</a>
