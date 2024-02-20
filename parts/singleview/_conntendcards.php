<div class="container my-4">
    <h2 class="mb-4 text-warning">Buch-Neuheiten</h2>
    <div class="row row-cols-1 row-cols-md-5 g-4"> <!-- Anpassung für 5 Karten pro Reihe auf mittleren und größeren Bildschirmen -->
        <!-- Buch 1 -->


        <?php

        require ('./logic/connection.verwaltung.php');
        $stmt = $con->prepare("SELECT * From bücher b JOIN autor a ON a.autor_id = b.autor_id");
        $stmt->execute();

        while ($row = $stmt->fetch()){
            ?>


            <div class="col mb-3">
                <div class="card h-100">
                    <img src="./assets/img/crescent-city-wenn-die-schatten-sich-erheben-gebundene-ausgabe-sarah-j-maas.jpeg" class="card-img-top" alt="Buchcover Neuheit 1">
                    <div class="card-body">
                        <h5 class="card-title text-truncate" style="max-width: 200px"><?php echo $row['titel']?></h5>
                        <p class="card-text"><small><?php echo $row['vorname'] . ' ' . $row['nachname']?></small></p>
                        <p class="card-text text-truncate"><?php echo $row['kurzbeschreibung']?></p>
                        <p class="card-text font-weight-bold"><?php echo $row['preis']?>€</p><!-- Preis -->
                        <a href="#" class="stretched-link">Mehr erfahren...</a>
                        <button type="button" class="btn btn-warning">In den Warenkorb</button> <!-- In den Warenkorb Button -->

                    </div>
                </div>
            </div>
        <?php }?>

    </div>
</div>