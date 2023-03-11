<h1>Продукт <?= $name; ?> из категории <?= $category; ?></h1>
<p>
	Цена: <?= $price; ?>$, количество: <?= $quantity; ?>
</p>
<p>
	Стоимость <?php $full= $price*$quantity ?>
		: <?= $full; ?>$
</p>