<?php
    function SelectRecipes()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=RecipePort", "RecipePort", "SomePassword001");
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            #Query
            $sqlSelect = 
            "
                SELECT *
                FROM recept
            ";
            $array = $conn -> query($sqlSelect) -> fetchAll();
            $conn = null;
            return $array;
        }

        catch(PDOException $e)
        {
            echo "PDO exception: ".$e -> getMessage();
            return false;
        }
    }

    function SelectRecipe($RecipeID)
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=RecipePort", "RecipePort", "SomePassword001");
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            #Query
            $sqlSelect = 
            "
                SELECT *
                FROM recept
                WHERE ID = $RecipeID
            ";
            $row = $conn -> query($sqlSelect) -> fetch();
            $conn = null;
            return $row;
        }

        catch(PDOException $e)
        {
            echo "PDO exception: ".$e -> getMessage();
            return false;
        }
    }
?>