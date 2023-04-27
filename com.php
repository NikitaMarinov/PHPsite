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
                        <?php
                        require('connection.php');
                        $Name = $_POST["name"];
                        $Age = $_POST["age"];
                        $Comment = $_POST["comment"];
                        $adaugare = "INSERT INTO comment (Name, Age, Comment) VALUES ('$Name', $Age, '$Comment')";
                        mysqli_query($conn, $adaugare);
                        $extragere = "SELECT * FROM comment";
                        $result = @mysqli_query($conn, $extragere);
                        while ($rows = @mysqli_fetch_array($result)) {
                            ?>
                            <div class="sectioncom">
                                <table>
                                    <tr>
                                        <td>Name:</td>
                                        <td>
                                            <? echo $rows['Name']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Age:</td>
                                        <td class="cell">
                                            <? echo $rows['Age']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Comment:</td>
                                        <td class="cell">
                                            <? echo $rows['Comment']; ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        <?php }
                        @mysqli_close($conn);
                        ?>
                        <a href="index.php" class="btn-link">На главую!</a>
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