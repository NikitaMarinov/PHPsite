<?php
if (($_POST['name'] != "") and ($_POST['age'] != "") and ($_POST['comment'] != "")) {

    if (isset($_POST['submit'])) {
        header('Location: com.php');
    }
}
?>
<!DOCTYPE html>
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
        <div class="comments">
            <div class="sectioncom">
                <h2>Ваши комментарии важны для нас!</h2>
            </div>
            <div class="com">
                <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
                    <fieldset>
                        <label for="name">Your name:</label>
                        <input type="text" name="name" /><br>
                        <label for="age">Your age:</label>
                        <input name="age" type="number" /><br>
                        <label for="comment">Comment:</label>
                        <input name="comment" type="text" />
                        <input type="submit" value="Transmite" name="submit" />
                        <?php
                        if (isset($_POST['submit'])) {
                            if (($_POST['name'] == "") | ($_POST['age'] == "") | ($_POST['comment'] == "")) {
                                echo "Заполните все строки!";
                            } else {
                                require('connection.php');
                                $Name = $_POST["name"];
                                $Age = $_POST["age"];
                                $Comment = $_POST["comment"];
                                $adaugare = "INSERT INTO comment (Name, Age, Comment) VALUES ('$Name', $Age, '$Comment')";

                                mysqli_query($conn, $adaugare);
                            }
                        }
                        ?>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
    <?php
    require_once("./modules/ui/fullfooter.php")
        ?>
</body>

</html>