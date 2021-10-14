<h1>Animaux a adoptés</h1>

<?php foreach( $animaux as $animaux): ?>
        <?= $animaux->getAnimal() ?>
        <?= $animaux->getRace() ?>
        <?= $animaux->getAge() ?>
        <?= $animaux->getTaille() ?>
        <?= $animaux->getPoids() ?>
        <?= $animaux->getPhoto() ?>
        <?= $animaux->getDateArrive() ?>
    <?php endforeach ?>
