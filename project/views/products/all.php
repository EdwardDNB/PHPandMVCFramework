<h1><?= $h1; ?></h1>
<div id="content">
	<table>
		<tr>
			<th>id</th>
			<th>title</th>
			<th>ссылка</th>
		</tr>
		<?php foreach ($products as $product): ?>
		<tr>
			<td><?= $product['id']; ?></td>
			<td><?= $product['title']; ?></td>
			<td><a href="/product/<?= $product['id']; ?>/">ссылка на product</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>