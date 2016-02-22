<h1>Possible Matches</h1>
<ul>
    <?php foreach($matches as $match): ?>
    <li>
        <?= htmlentities($match['primary_city']) ?>,
        <?= htmlentities($match['state']) ?>
<<<<<<< HEAD
        <?= htmlentities($match['country']) ?>
        <?= htmlentities($match['zip']) ?>
    </li>
    <?php endforeach; ?>
</ul>

=======
        <?= htmlentities($match['zip']) ?>
        <?= htmlentities($match['country']) ?>
    </li>
    <?php endforeach; ?>
</ul>
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1
