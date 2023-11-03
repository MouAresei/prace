<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanka</title>
</head>
<body>
    <?php
    //Zadanie 1
    $var1 = 12;

    if($var1 >  0)
        echo "Liczba jest dodatnia \n";

    else if($var1 < 0)
        echo "Liczba jest ujemna \n";
    else
        echo "Liczba jest rowna 0 \n";


    //Zadanie 2
    $var2 = 13;

    if($var2 %2 == 0)
        echo "Liczba jest parzysta";
    elseif($var2 % 2 != 0)
        echo "Liczba jest nieparzysta";
    else
        echo "Liczba jest zerem";

    //Zadanie 3

    $var3 = "elektronika";
    $cenaElektroniki = 130;
    $cenaOdz = 120;
    $cenaPieczywa = 70;
    $podatek = 12 / 100;
    $cenaPodatek = 0;

    switch($var3){
        case "elektronika":
            $cenaPodatek = $podatek * $cenaElektroniki;
            $cenaElektroniki = $cenaElektroniki + $cenaPodatek;
            echo "Cena za elektronike po opodatkowaniu wynosi: $cenaElektroniki \n";
            break;
        case "odziez":
            $cenaPodatek = $podatek * $cenaOdz;
            $cenaOdz = $cenaOdz + $cenaPodatek;
            echo "Cenaza odziez po opodatkowaniu wynosi: $cenaOdz \n";
            break;
        case "pieczywo":
            $cenaPodatek = $podatek * $cenaPieczywa;
            $cenaPieczywa = $cenaPieczywa + $cenaPodatek;
            echo "Cena pieczywa po opodatkowaniu wynosi: $cenaPieczywa \n";
            break;
    }

    //Zadanie 4

    $var4 = 2008;

    if($var4 %4 == 0)
        if($var4 %100 == 0)
            if($var4 %400 == 0)
                echo "Rok jest przestepny \n";
            else echo "Rok nie jest przestepny \n";
        else echo "Rok nie jest przestepny \n";        
    else
        echo "Rok nie jest przestepny \n";
    
    // Zadanie 5

    $var5 = 50;

    if($var5 > 0 && $var5 <= 29)
        echo "Niedostateczny";
    else if($var5 > 30 && $var5 <= 50)
        echo "Dopuszczajacy";
    else if($var5 > 51 && $var5 <= 74)
        echo "Dostateczny";
    else if($var5 > 75 && $var5 <= 90)
        echo "Dobry";
    else if($var5 > 91 && $var5 <= 95)
        echo "Bardzo dobry";
    else if($var5 > 96 && $var5 <= 100) 
        echo "Celujacy";

    //Zadanie 6

    $a = 10;
    $b = 10;
    $c = 10;

    if($a == $b && $a == $c && $b == $c)
        echo "Trojkat jest rownoboczny";
    else if($c ** 2 == $a ** 2 + $b ** 2)
        echo "Trojkat prostokatny";
    else if($a == $b && $a != $c)
        echo "Trojkat rownoramienny";


    ?>
</body>
</html>