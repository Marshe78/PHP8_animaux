<h1>Liste des articles</h1>
<?php var_dump($animaux); exit; ?>
<ul>
    <?php foreach( $animaux as $animaux): ?>
        <li><a href="public/index.php?page=getArticle&id=<?= $animaux->getRace() ?>"><?= $animaux->getAge() ?></a></li>
    <?php endforeach ?>
</ul>