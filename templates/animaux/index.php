<h1>Liste des Animaux arrivés durant les 30 derniers jours</h1>


    <?php foreach( $animaux as $animaux): ?>
        <?= $animaux->getAnimal() ?>
        <?= $animaux->getRace() ?>
        <?= $animaux->getAge() ?>
        <?= $animaux->getTaille() ?>
        <?= $animaux->getPoids() ?>
        <?= $animaux->getPhoto() ?>
        <?= $animaux->getDateArrive() ?>
    <?php endforeach ?>
