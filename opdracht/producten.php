<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
  </head>
    <?php require 'includes/functions.php'?>
    <?php include 'includes/menu.php'?>

    <form action="producten.php" method="get"><!-- dit laten staan! -->

        <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
        <table>
            <tr>
                <th>#</th>
                <th>product</th>
                <th>prijs per stuk</th>
            </tr>
            <?php
                foreach ($products as $id => $product) {

                    echo '<tr>';
                    echo '<td>'.$id.'</td>';
                    echo '<td>'.$product['naam'].'</td>';
                    echo '<td>'.$product['prijs'].'</td>';
                    echo '</tr>';
                }
            ?>
        </table>

        <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p>
        <p>
            <label>productnummer: </label>
            <input type="text" name="productnummer"> &nbsp;&nbsp;

            <label>aantal: </label>
            <input type="text" name="aantal">
        </p><!-- dit laten staan! -->

        <p>Vul je leeftijd in voor jouw korting</p>
        <p>
            <label>leeftijd: </label>
            <input type="text" name="leeftijd">
        </p><!-- dit laten staan! -->
        <p>
            <button type="submit" name="submit">Bereken totaal</button>
        </p><!-- dit laten staan! -->
        <p>voor <?php getAmount(); ?> x het product: <?php getProductNr(); ?> betaal je: <?php prijs(); ?></p>
        <p>je bent <?php getAge(); ?> jaar oud en je korting is: <?php sale(); ?></p>

    </form><!-- dit laten staan! -->

  <?php include 'includes/footer.php'?>

  </body>
</html>