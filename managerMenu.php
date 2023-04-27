<?php
session_start();
if (!$_SESSION['user']) {
    header("Location: managerlog.php");
}
?>
<?php
if (isset($_POST['exit'])) {
    session_destroy();
    header("Location: index.php");
}
?>


<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>
    <?php
    require_once("./modules/ui/fullheader.php")
        ?>
    <main>

        <div class="contacts3">

            <div class="sectioncom">
                <h2>Меню мэнеджера!</h2>
            </div>
            <br>
            <div class="menu1" style="margin-top:140px">
                <a href="manager/updateglavnoe.php" class="btn-link">Обновить блок "Главное"!</a> <br>
            </div>
            <div class="menu1">
                <a href="manager/addsport.php" class="btn-link">Добавить новость в блок "Спорт"!</a> <br>
            </div>
            <div class="menu1">
                <a href="manager/delsport.php" class="btn-link">Удаление новости из блока "Спорт"!</a> <br>
            </div>
            <div class="menu1">
                <a href="manager/addpolit.php" class="btn-link">Добавить новость в блок "Политика"!</a> <br>
            </div>
            <div class="menu1">
                <a href="manager/delpolit.php" class="btn-link">Удаление новости из блока "Политика"!</a> <br>
            </div>
            <div class="menu1">
                <a href="manager/addtehno.php" class="btn-link">Добавить новость в блок "Технологии"!</a> <br>
            </div>
            <div class="menu1">
                <a href="manager/deltehno.php" class="btn-link">Удаление новости из блока "Технологии"!</a> <br>
            </div>
            <div class="menu1">
                <a href="manager/addadmin.php" class="btn-link">Добавление нового Менеджера!</a> <br>
            </div>
            <div class="menu1">
                <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
                    <input type="submit" value="EXIT" name="exit" />
                </form>
            </div>
        </div>




    </main>


    <?php
    require_once("./modules/ui/fullfooter.php")
        ?>





</body>

</html>