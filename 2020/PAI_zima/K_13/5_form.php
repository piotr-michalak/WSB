<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Formularze</title>
</head>
<body>
   <form method="get">
    <input type="text" name="name" placeholder="Imię"><br>
    <input type="color" name="color"><br>
    Regulamin:<input type="checkbox" name="info"><br>
    <input type="submit" value="Wyślij dane"><br>
    <input type="radio" name="color_choice" value="bialy">biały<br>
    <input type="radio" name="color_choice" value="czarny" CHECKED>czarny<br>
   </form>
   <?php
    if (!empty($_GET['name']) && !empty($_GET['color'])) {
        $name = $_GET['name'];
        $color = $_GET['color'];
        echo "Twoje imię: $name", '<br>';
        echo "Kolor: $color", '<br>';
    }else {
        echo '<hr>Wypełnij wszystkie dane!', '<br>';
    }

    if (isset($_GET['info'])) {
        echo 'Zgody zatwierdzone', '<br>';
    }else {
        echo 'Zatwierdź zgody', '<br>';
    }
    
    // pola radio z wyborem jaki kolor: biały/czarny*
    if (!empty($_GET['color_choice'])) {
        $color_choice = $_GET['color_choice'];
        echo "Wybrales kolor $color_choice";
    }
   ?>
</body>
<head>