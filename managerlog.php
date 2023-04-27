<?php
session_start();
$exist = false;
if (isset($_POST['submit'])) {
    if (($_POST['login'] == "") || ($_POST['pass'] == "")) {
        echo ("<br><div class='text'>Заполните все поля!</div>");
    } else {
        require('connection.php');
        $extragere = "SELECT * FROM manager";
        $result = mysqli_query($conn, $extragere);
        while ($rows = mysqli_fetch_array($result)) {
            $entered_password = $_POST['pass'];
            $hashed_password = md5($entered_password);

            if ($rows['login'] == $_POST['login'] and $rows['pass'] == $hashed_password) {
                $exist = true;
                $login = $rows['login'];
            }
        }
        if ($exist == true) {
            $_SESSION['user'] = $login;
            header("Location: managerMenu.php");
        } else {
            echo " <div class='text'>Пароли не совпадают!</div>";
        }
    }
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
        <div class="contacts1">
            <div class="sectioncom">
                <h2>Вход в профиль!</h2>
            </div>
            <div style="margin-top: 150px;">
                <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
                    <fieldset>
                        <input type="text" placeholder="Log-in" name="login" autocomplete="off" />
                        <input type="text" placeholder="Parola" name="pass" size="12" maxlength="10"
                            autocomplete="off" /><br />
                        <input type="submit" value="Transmite" name="submit" />

            </div>

            </fieldset>
            </form>
    </main>

    <?php
    require_once("./modules/ui/fullfooter.php")
        ?>





</body>

</html>