<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.css.map" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="title-container">Formular Person</div>
    <form class="person-form" action="index.php" method="post">
        <div class="person-form__row person-form__row--first">
            <div class="person-form__column">
                <label>Vorname</label>
            </div>
            <div class="person-form__column">
                <input class="form-control" type="text" placeholder="Vorname" name="firstname">
            </div>
        </div>

        <div class="person-form__row">
            <div class="person-form__column">
                <label>Nachname</label>
            </div>
            <div class="person-form__column">
                <input class="form-control" type="text" placeholder="Nachname" name="lastname">
            </div>
        </div>

        <div class="person-form__row">
            <div class="person-form__column">
                <label>Alter</label>
            </div>
            <div class="person-form__column">
                <input class="form-control" type="number" placeholder="Alter" name="age">
            </div>
        </div>

        <div class="person-form__row person-form__row--button-row">
            <div class="person-form__column">
                <input class="form-button" type="submit" value="Daten anzeigen">
            </div>
        </div>
    </form>

    <div class="person-card">
        <?='Ich heisse '.$_POST["firstname"].' '.$_POST['lastname'].' und bin '.$_POST['age'].' Jahre alt.'?>
    </div>
</div>


</body>
</html>

