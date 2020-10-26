<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
   <form method="POST">
    <input type="text" name="name" placeholder="Imię"><br>
    <input type="text" name="surname" placeholder="Nazwisko"><br>
    <input type="number" name="birth_year" placeholder="Rok urodzenia"><br>
    <input type="text" name="city" placeholder="Miasto"><br>
    <input type="number" name="postcode" placeholder="Kod pocztowy"><br>
    <input type="color" name="color"><br>
    <input type="submit" value="Wyślij dane"><hr>
   </form>
   <?php
    $required_fields = array('name', 'surname', 'birth_year', 'city', 'postcode', 'color');
    $status = false;
    foreach($required_fields as $field) {
        if(empty($_POST[$field])) $error = true;
    }
    if(!$status) {
        $name = ucfirst(strtolower($_POST['name']));
        $surname = ucfirst(strtolower($_POST['surname']));
        $birth_year = $_POST['birth_year'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $color = str_replace('#', '', $_POST['color']);

        //edycja kodu pocztowego, np. 12345 -> 12-345
        $postcode_replaced = substr_replace($postcode, '-', 2, 0);

        //zamiana polskich znaków na ***
        $censure = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
        $city_replaced = str_replace($censure, '***', $city);

        echo "Imię: $name", '<br>';
        echo "Nazwisko: $surname", '<br>';
        echo "Rok urodzenia: $birth_year", '<br>';
        echo "Miasto: $city_replaced", '<br>';
        echo "Kod pocztowy: $postcode_replaced", "<br>";
        echo "Kolor: ", "<font color=$color> $color";
    }else {
        echo '<hr>Wypełnij wszystkie dane!', '<br>';
    }
   ?>
</body>
<head>