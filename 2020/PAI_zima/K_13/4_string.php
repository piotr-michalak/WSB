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
    echo strlen(trim($name1)); //5
?>