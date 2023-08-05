<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leerling informatie</title>
</head>
<!-- 
    ################################################################
    Test maar nog geen remote access / navragen of dit wel handig is 
    ################################################################
-->
<body>
    <h1>Leerling informatie</h1>
<form action="process-student.php" method="post">

    <label for="voornaam">Voornaam</label>
    <input type="text" id="voornaam" name="voornaam">

    <label for="tussenvoegsel">tussenvoegsel</label>
    <input type="text" id="tussenvoegsel" name="tussenvoegsel">>

    <label for="achternaam">Achternaam</label>
    <input type="text" id="achternaam" name="achternaam">>

    <label for="klas">Klas</label>
    <input type="text" id="klas" name="klas">>

    <button>Send</button>
</form>


</body>
</html>