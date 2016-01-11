<h1>Possible Matches</h1>
<ul>
    <?php foreach($matches as $match): ?>
    <li>
        <?= htmlentities($match['primary_city']) ?>,
        <?= htmlentities($match['state']) ?>
        <?= htmlentities($match['country']) ?>
        <?= htmlentities($match['zip']) ?>
    </li>
    <?php endforeach; ?>
</ul>
