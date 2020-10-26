<?php
    echo "rok-miesięc-dzień: ".date("Y-m-d"), '<br>';
    echo "rok-miesięc-dzień: ".date("Y-M-d"), '<br>';
    echo date("G:i:s"), '<br>';
    echo date("Y-m-d G:i:s"), '<br>';
    echo date("w"), '<br>'; //0 - niedziela, 1 - poniedziałek

    $data = getdate();
    echo '<pre>';
        print_r($data);
    echo '</pre>';

    // wyświetl datę w następującym formacie: 4 październik 2020 | niedziela
    $day = date("d");
    $week_day = date("w");
    $month = date("m");
    $year = date("y");

    switch ($week_day){
        case "1": $week_day = "poniedziałek"; break;
        case "2": $week_day = "wtorek"; break;
        case "3": $week_day = "środa"; break;
        case "4": $week_day = "czwartek"; break;
        case "5": $week_day = "piątek"; break;
        case "6": $week_day = "sobota"; break;
        case "0": $week_day = "niedziela"; break;
    }

    switch($month) {
        case "1": $month = "styczeń"; break;
        case "2": $month = "luty"; break;
        case "3": $month = "marzec"; break;
        case "4": $month = "kwiecień"; break;
        case "5": $month = "maj"; break;
        case "6": $month = "czerwiec"; break;
        case "7": $month = "lipiec"; break;
        case "8": $month = "sierpień"; break;
        case "9": $month = "wrzesień"; break;
        case "10": $month = "październik"; break;
        case "11": $month = "listopad"; break;
        case "12": $month = "grudzień" ; break;
    }

    echo "$day $month $year | $week_day";

    $months_pol = ['styczeń', 'luty', 'marzec', 'kwiecień', 'maj', 'czerwiec', 'lipiec', 'sierpień', 'wrzesień', 'październik', 'listopad', 'grudzień'];
    $day_pol = ['niedziela', 'poniedziałek', 'wtorek', 'środa', 'czwartek', 'piątek', 'sobota', 'niedziela'];
    echo $data[mday]." ".$months_pol[$data[mon]]." ".$data[year]." | ".$day_pol[$data[wday]];
?>