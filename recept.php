<!DOCTYPE HTML>
<?php
    include("shared/main.functions.php");
    if(!isset($_GET['recipe']))
    {
        header("Location:recepten.php");
        exit;
    }
    $id = $_GET['recipe'];
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <title>Recept</title>
    </head>
    <body>
        <div class="container">
        <?php 
        include("shared/header.html");
        if($id >= 1 && $id <= 25)
        {
            $Recipe = SelectRecipe($id);
            echo 
            "
                <div class='left'>
                <div class='name'>
                    <h2>
                        ". $Recipe['Naam'] ."
                    </h2>
                </div>
                <div class='image'>
                    Hier hoort een afbeelding te komen als voorbeeld voor het gerecht.
                </div>
                <div class='type'>
                    Gerecht type:\n
                    ". $Recipe['Type'] ."
                </div>
                <div class='description'>
                    <p>
                    Beschrijving:\n
                        ". $Recipe['Beschrijving'] ."
                    </p>
                </div>
                <div class='voedingswaarde'>
                    Hier hoort de voedingswaarde te komen maar zover ben ik nog niet.
                </div>
                </div>
                <div class='right'>
                <div class='moeilijkheid'> 
                    Moeilijkheid:\n
                    ". $Recipe['Moeilijkheid'] ."
                </div>
                <div class='duur'>
                    Bereidingsduur:\n
                    ". $Recipe['Bereidingstijd'] ."
                </div>
                <div class='recept'>
                    <pre>". $Recipe['Bereiding'] ."</pre>
                </div>
                </div>
            ";
        }
        else
        {
            echo"This Recipe doesn't exist";
        }
        ?>
        </div>
    </body>
</html>