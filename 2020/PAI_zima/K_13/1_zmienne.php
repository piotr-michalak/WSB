<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Zmienne</title>
</head>
<body>
    Pierwszy plik<hr>
    <?php
        $name='Anna';
        echo 'Imię: $name<br>';
        echo "Imię: $name<br>";
        // konkatenacja
        echo 'WSB'.'<hr>';

        // składnia heredoc
        $text = <<<LABEL
            Heredoc<br>
            Imię: $name<br>
            <hr>
        LABEL;

        echo $text;

        echo <<<L
            Heredoc 2<br>
            Imię: $name
            <hr>
        L;

        // składnia nowdoc
        echo <<<'L'
            Nowdoc 2<br>
            Imię: $name
            <hr>
        L;

        // integer
            $bin = 0b1010;
            $oct = 011;
            $hex = 0x11;
            echo $hex,'<hr>';

        $city='Poznań';
        echo "Nazwa zmiennej: $city, wartość: $city";

        $x = true;
        $x = false;
        echo $x,'<br>';

        // wersja PHP
        echo PHP_VERSION; //7.4.10
        echo 
    ?>
</body>
<head>