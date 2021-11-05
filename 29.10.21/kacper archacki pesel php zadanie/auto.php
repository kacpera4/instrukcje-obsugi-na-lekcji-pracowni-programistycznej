<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Komis Samochodowy</title>
    <link rel="stylesheet" type="text/css" href="auto.css">
</head>

<body>
    <?php
    $polaczenie = mysqli_connect("localhost", "root", "", "Komis");
    ?>


    <!--https://egzamin-informatyk.pl/arkusz-praktyczny-e14-2017-01-01/!-->
    <div id="baner">
        <h1>SAMOCHODY</h1>
    </div>

    <div id="lewy">
        <h2>Wykaz samochodów</h2>
        <ul>
            <?php
            $zapytanie = mysqli_query($polaczenie, "Select id,marka,model FROM samochody;");
            while ($wiersz = mysqli_fetch_row($zapytanie)) {
                print("<li>" . $wiersz[0] . " " . $wiersz[1] . " " . $wiersz[2] . "</li>");
            }
            ?>
        </ul>
        <h2>Zamówienia</h2>
        <ul>
            <?php
            // pobieranie zamówień samochodów
            $zapytanie = mysqli_query($polaczenie, "SELECT samochody_id, Klient FROM zamowienia;");
            while ($wiersz = mysqli_fetch_row($zapytanie)) {
                print("<li>" . $wiersz[0] . " " . $wiersz[1] . "</li>");
            }
            ?>
        </ul>
    </div>
    <div id="prawy">
        <h2>Pełne dane: Fiat</h2>
        <?php
        // pobieranie samochodów marki Fiat
        $zapytanie = mysqli_query($polaczenie, "Select * FROM samochody WHERE marka='Fiat'");
        /*
        while ($wiersz = mysqli_fetch_row($zapytanie)) {
            for ($i = 0; $i < count($wiersz); $i++) {
                print($wiersz[$i]);
                if($i < count($wiersz) - 1) {
                    print(" / ");
                }
            }
            print("<br>");
        }
        */
        while ($wiersz = mysqli_fetch_row($zapytanie)) {
            print($wiersz[0] . " / " . $wiersz[1] . " / " . $wiersz[2] . " / " . $wiersz[3] . " / " . $wiersz[4] . " / " . $wiersz[5] . "<br>");
        }
        ?>
    </div>


    <div id="stopka">
        <table>
            <tr>
                <td>
                    <a href="kwerendy.txt"> Kwerendy </a>
                </td>
                <td>
                    Autor:Kacper
                </td>
                <td>
                    <img src="auto.png" alt="komis samochodowy">
                </td>
            </tr>
        </table>
    </div>


    <?php
    mysqli_close($polaczenie);
    ?>
</body>

</html>