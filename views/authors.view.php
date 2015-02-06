<?php foreach ($authors as $author): ?>
<div class="col-sm-6 col-md-4">
	<li>
		<?= $author['name'] ?>
	</li>

	<li>
		<?= $author['username'] ?>
	</li>
</div>

<?php endforeach; ?>