<?php
    $text = <<<TEXT
        wsb - Wyższa
        szkoła
        bankowa
TEXT;

    echo $text,'<hr>';
    echo nl2br($text);

    echo strtolower($text),'<br>';
    echo strtoupper($text),'<br>';
    echo ucfirst($text),'<br>';

    $text1 = 'anna Tomasz krystian';
    echo ucfirst($text1),'<br>';

    echo ucwords($text1),'<br>';

    $name = 'jAnUsz';
    $name = ucfirst(strtolower($name));
    echo $name,'<hr>';
    $lorem = <<<LOREM
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, odio! Molestiae itaque quas culpa. Maiores optio tenetur harum accusamus explicabo, fugiat recusandae autem unde sunt sequi impedit commodi provident cumque.
LOREM;

    echo $lorem, '<hr>';
    $col = wordwrap($lorem, 40, '<br>');
    echo $col,'<hr>';

    // białe znaki
    $name = 'Kasia';
    $name1 = '  Kasia ';

    // echo $name, $name1;

    echo strlen($name); //5
    echo strlen($name1),'<br>'; //8
    echo strlen(ltrim($name1)); //6
    echo strlen(rtrim($name1)); //7
    echo strlen(trim($name1)), '<hr>'; //5

    // przeszukiwanie danych
    $text = 'Poznań, ul. Rynek Jeżycki 13, tel. 61 627 00 00';
    $search = strstr($text, 'tel');
    echo $search, '<hr>'; //tel. 61 627 00 00

    $search = stristr($text, 'Tel');
    $search = strstr($text, 'tel', true);

    // czyszczenie zawartości bufora
    ob_clean();

    // przetwarzanie ciągów znaków
    $replace = str_replace('%name%', 'Janusz', 'Masz na imię: %name%');
    echo $replace, '<hr>';

    // substr
    $surname = substr('Katarzyna Nowak', 3);
    echo $surname, '<hr>'; //arzyna Nowak

    $surname = substr('Katarzyna Nowak', 3, 5);
    echo $surname, '<hr>'; //arzyn
 
    $name = "Mirosław";
    $censure = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
    $replace = array('a', 'e', 's', 'z', 'z', 'c', 'o', 'n', 'l');

    $correctName = str_replace($censure, $replace, $name);
    echo '<br>Dane przed poprawą: ', $name;
    echo '<br>Dane po porawie: ', $correctName;
    // znajdź domenę pobraną od użytkownika
?>