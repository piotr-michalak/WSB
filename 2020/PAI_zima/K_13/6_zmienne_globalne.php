<?php
    $x = 10;
    function change() {
        // echo "Wartość \$x w funkcji wynosi: $x"; //error
        echo "Wartość \$x w funkcji wynosi: $GLOBALS[x]";
    }
    change();

    function changeLocal() {
        $x = 5;
        echo "<br>Wartość \$x w funkcji wynosi: $GLOBALS[x]";
    }
    changeLocal();

    // zmienne statyczne
    function add() {
        $x = 4;
        echo "<br>Zmienna \$x wynosi: $x";
        $x += 10;
    }
    add(); //14
    add(); //14

    function addStatic() {
        static $x = 4;
        $x += 10;
        echo "<br>Zmienna \$x wynosi: $x";
    }
    addStatic();
    addStatic();
    addStatic();

    // przekazywanie argumentów
    function addThree($x) {
        $x += 3;
    }
    $num = 10;
    echo "<br>Zmienna \$num: $num";
    addThree($num);
    echo "<br>Zmienna \$num: $num";

    function addRef($x) {
        $x += 3;
    }
    $num = 10;
    echo "<br>Zmienna \$num: $num";
    addRef($num);
    echo "<br>Zmienna \$num: $num";
    addRef($num);
    echo "<br>Zmienna \$num: $num";

    // argumenty domyślne
    function multi($x, $y=4) {
        return $x * $y;
    }
    $a = 3;
    echo "<br>",multi(2,4), "<br>";
    echo multi($a), "<br>";

    function multi1(int $x, int $y=5) {
        return $x * $y;
    }
    echo multi1(1), "<br>";
    echo multi1(3,5), "<br>";
    echo multi1(3.5,5), "<br>";
?>