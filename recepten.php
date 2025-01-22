<!DOCTYPE HTML>
<?php
    include("shared/main.functions.php");
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <title>Recepten</title>
    </head>
    <body>
    <?php include("shared/header.html");?>
    <div id="container">
        <table>
            <?php
                $recipe = SelectRecipes();
                foreach($recipe as $row)
                {
                    echo
                    "
                    <tr onClick=\"Javascript:window.location.href='/RecipePort/recept.php?recipe=".$row['ID']."';\" class='recipeTabelRow'>
                        <td>
                        <h3>
                            ". $row['Naam'] ."
                        </h3>
                        </td>
                        <td>
                            ". $row['Type'] ."
                        </td>
                        <td>
                            ". $row['Bereidingstijd'] ."
                        </td>
                        <td>
                            ". $row['Moeilijkheid'] ."
                        </td>
                    </tr>
                    ";
                }
            ?>
        </table>
    </div>
    </body>
</html>