<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio18</title>
</head>
<body>
    <?php
        $select = "<select name='filmpreferito'>";
        $film = array("Fight Club", "American Psycho", "Taxi Driver", "Interstellar", "Donnie Darko");
        for($i = 0; $i < count($film); $i++) {
            $select = $select . "<option value=f".$i.">".$film[$i]."</option>";
        }
        echo $select;
    ?>  
</body>
</html>